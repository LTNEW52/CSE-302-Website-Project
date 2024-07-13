<?php
    session_start();
    include("../HTML File/header.html");
    include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enthusiast Reader Club</title>
    <link rel="icon" type="Image/jpg" href="../Image/Favicon2.jpg">
    <link rel="stylesheet" href="../CSS File/style.css">
</head>
<body id="home">

    <main>

        <div id="buyborrow">
            <h1>Search Your Prefered Book!</h1>
        
            <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" autocomplete="off">
                <input id="buytext" type="text" name="booksearch" placeholder="Enter Book or Author Name!">
                <input id="buybutton" type="submit" name="booksubmit" value="Search!">
            </form>

        </div>

        <div id="req">
            <h1>Request For Book If We Don't Have It!</h1>

            <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" autocomplete="off">
                <input id="reqbook" type="text" name="reqbookname" placeholder="Enter Requested Book Name!">
                <input id="reqauthor" type="text" name="reqauthorname" placeholder="Enter Author Name Of The Requested Book!">
                <input id="reqbutton" type="submit" name="reqsub" value="Submit!">
            </form>
        </div>

    </main>

    <script>

        const buyborrow = document.getElementById("buyborrow");
        const error = document.createElement("p");
        error.classList.add("show");

        const req = document.getElementById("req");

        let buyborrowresult = document.createElement('div');
        let bookname = document.createElement('h1');
        let bookauthorname = document.createElement('h3');
        let bookprice = document.createElement('p');
        let bookborrowprice = document.createElement('p');
                
        buyborrowresult.classList.add('buyborrowresult');
        bookname.classList.add('bookname');
        bookauthorname.classList.add('bookauthorname');
        bookprice.classList.add('bookprice');
        bookborrowprice.classList.add('bookprice');

        buyborrowresult.appendChild(bookname);
        buyborrowresult.appendChild(bookauthorname);
        buyborrowresult.appendChild(bookprice);
        buyborrowresult.appendChild(bookborrowprice);

        buyborrow.appendChild(buyborrowresult);

        const submitbuy = document.createElement("div");
        const buy = document.createElement("p");
        const buysub = document.createElement("button");
        const rejectbuy = document.createElement("button");

        const borrow = document.createElement("p");
        const borrowsub = document.createElement("button");
        const rejectborrow = document.createElement("button");
        
        bookprice.addEventListener("click" , () => {

            submitbuy.innerHTML = "";

            buy.classList.add("buy");
            buysub.classList.add("buysub");
            rejectbuy.classList.add("buysub");

            buy.textContent = "Are You Sure You Want To Buy?";
            buysub.textContent = "Continue";
            rejectbuy.textContent = "Cancel";

            submitbuy.appendChild(buy);
            submitbuy.appendChild(buysub);
            submitbuy.appendChild(rejectbuy);

            buyborrow.appendChild(submitbuy);
        })

        bookborrowprice.addEventListener("click" , () => {

            submitbuy.innerHTML = "";

            borrow.classList.add("borrow");
            borrowsub.classList.add("borrowsub");
            rejectborrow.classList.add("borrowsub");

            borrow.textContent = "Are You Sure You Want To Borrow?";
            borrowsub.textContent = "Continue";
            rejectborrow.textContent = "Cancel";

            submitbuy.appendChild(borrow);
            submitbuy.appendChild(borrowsub);
            submitbuy.appendChild(rejectborrow);

            buyborrow.appendChild(submitbuy);
        })

        // button is working, but can't send back to php. Possible with form and ajax , tried ajax but that's not working , have to use form
        buysub.addEventListener("click" , () => {
            
        })

        rejectbuy.addEventListener("click" , () => {
            submitbuy.innerHTML = "";
        })

        borrowsub.addEventListener("click" , () => {
            console.log("borrow Successful!");
        })

        rejectborrow.addEventListener("click" , () => {
            submitbuy.innerHTML = "";
        })
                        

    </script>
</body>
</html>

<?php

    if(isset($_POST["booksubmit"])) {
        if(!empty($_POST["booksearch"])) {
            $booksearch = filter_input(INPUT_POST , "booksearch" , FILTER_SANITIZE_SPECIAL_CHARS);
            
            $sql = "SELECT book_name , book_author_name , book_price , book_borrow_price FROM book_data WHERE book_name = '$booksearch' OR book_author_name = '$booksearch'";

            $result = mysqli_query($db_connect , $sql);

            if(mysqli_num_rows($result) > 0) {

                $book_name = array();
                $book_author_name = array();
                $book_price = array();
                $book_borrow_price = array();

                while ($row = mysqli_fetch_assoc($result)) {

                    array_push($book_name , $row["book_name"]);
                    array_push($book_author_name , $row["book_author_name"]);
                    array_push($book_price , $row["book_price"]);
                    array_push($book_borrow_price , $row["book_borrow_price"]);
    
                } 
                
                for($i = 0; $i < count($book_name) ; $i++) {
                    /* only last loop shows, can possible with JSON but js can't handle <?php ?>, then how to solve this? */
                    echo "
                        <script>
                            buyborrowresult.style.display = 'inline-block';

                            bookname.textContent = '$book_name[$i]';
                            bookauthorname.textContent = '$book_author_name[$i]';
                            bookprice.textContent = 'Regular Price: $book_price[$i]';
                            bookborrowprice.textContent = 'Borrow Price: $book_borrow_price[$i]';
                        </script>
                    ";
                }

                mysqli_close($db_connect);

            } else {
                echo 
                "<script>
                    error.textContent = 'Book/Author Not Found! Check The Spelling Again';
                    buyborrow.appendChild(error);
                </script>";
            }
        } else {
            echo 
            "<script>
                error.textContent = 'SearchBar Can\'t Be Empty!';
                buyborrow.appendChild(error);
            </script>";
        }
    }

    if(isset($_POST["reqsub"])) {
        if(!empty($_POST["reqbookname"] && $_POST["reqauthorname"])) {
            $reqbookname = filter_input(INPUT_POST , "reqbookname" , FILTER_SANITIZE_SPECIAL_CHARS);
            $reqauthorname = filter_input(INPUT_POST , "reqauthorname" , FILTER_SANITIZE_SPECIAL_CHARS);

            $username = $_SESSION["username"];

            $sql_prev_chk = "SELECT book_name , book_author_name FROM book_data WHERE book_name = '$reqbookname' AND book_author_name = '$reqauthorname'";

            $prev_res = mysqli_query($db_connect , $sql_prev_chk);

            if(mysqli_num_rows($prev_res) > 0) {
                while ($rowprev = mysqli_fetch_assoc($prev_res)) {
                    if($rowprev["book_name"] == $reqbookname && $rowprev["book_author_name"] == $reqauthorname) {
                        echo "<script>
                        error.textContent = 'Your Requested Book Is Already In Our Database!';
                        req.appendChild(error);
                    </script>"; 
                    }
                }
            } else {
                $sql_chk = "SELECT book_name , author_name FROM book_request WHERE book_name = '$reqbookname' AND author_name = '$reqauthorname'";

                $reqresult = mysqli_query($db_connect , $sql_chk);

                if(mysqli_num_rows($reqresult) > 0) {
                    while ($row = mysqli_fetch_assoc($reqresult)) {
                        if($row["book_name"] == $reqbookname && $row["author_name"] == $reqauthorname) {
                            echo 
                            "<script>
                                error.textContent = 'Your Requested Book Is Already In Our Request List, We Are Working On It!';
                                req.appendChild(error);
                            </script>";
                        }
                    }
                } else {
                    $sql_req_post = "INSERT INTO book_request (book_name , author_name , username) VALUES ('$reqbookname' , '$reqauthorname' , '$username')";

                    mysqli_query($db_connect , $sql_req_post);

                    echo "<script>
                        error.textContent = 'Your Request For Missing Book Is Received!';
                        req.appendChild(error);
                    </script>";
                }

                mysqli_close($db_connect);
            }

        } else {
            echo 
            "<script>
                error.textContent = 'Input Field Can\'t Be Empty!';
                req.appendChild(error);
            </script>";
        }
    }

?>
