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
        <div id="reviewpost">
            <h1>Review The Book You Want!</h1>
            <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" autocomplete="off">
                <input class="input" type="text" name="reviewbookname" placeholder="Enter The Book Name You Want To Review!">
                <input class="input" type="text" name="reviewbookauthorname" placeholder="Enter The Author Name Of The Book!">
                <textarea name="review" rows="5" cols="100" placeholder="Write Your Review Here!"></textarea>
                <input id="reviewsub" type="submit" name="reviewsubmit" value="Submit!">
            </form>
        </div>

        <div id="reviewshow">
            <h1>See Review Posted By Our Members!</h1>
            <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" autocomplete="off">
                <input class="input" type="text" name="getreviewbook" placeholder="Enter The Book Or Author Name!">
                <input id="reviewget" type="submit" name="reviewextract" value="Get Review!">
            </form>
        </div>
        
    </main>

    <script>

        const reviewpost = document.getElementById("reviewpost");
        const show = document.createElement("p");
        show.classList.add("show");

        const reviewshow = document.getElementById("reviewshow");
        let showrev = document.createElement("div");
        let booknameshow = document.createElement("h1");
        let authornameshow = document.createElement("h3");
        let review = document.createElement("p");
        let usernameshow = document.createElement("p");

        showrev.classList.add("showrev");
        booknameshow.classList.add("booknameshow");
        authornameshow.classList.add("authornameshow");
        review.classList.add("review");
        usernameshow.classList.add("usernameshow");

    </script>
</body>
</html>

<?php

    if(isset($_POST["reviewsubmit"])) {

        if(!empty($_POST["reviewbookname"] && $_POST["reviewbookauthorname"] && $_POST["review"])) {
            $reviewbookname = filter_input(INPUT_POST , "reviewbookname" , FILTER_SANITIZE_SPECIAL_CHARS);
            $reviewbookauthorname = filter_input(INPUT_POST , "reviewbookauthorname" , FILTER_SANITIZE_SPECIAL_CHARS);
            $review = filter_input(INPUT_POST , "review" , FILTER_SANITIZE_SPECIAL_CHARS);

            $username = $_SESSION["username"];

            $sql_check = "SELECT book_name , author_name , review , username FROM book_review WHERE book_name = '$reviewbookname' OR author_name = '$reviewbookauthorname' OR review = '$review'";

            $result = mysqli_query($db_connect , $sql_check);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);

                if ($reviewbookname == $row["book_name"] && $reviewbookauthorname == $row["author_name"] &&
                $review == $row["review"] && $username == $row["username"]) {
                    echo "<script> 
                    show.textContent = 'This Review By You Already Exists!'  
                    reviewpost.appendChild(show);
                    </script>";
                } else {
                    $sql_insert = "INSERT INTO book_review (book_name , author_name , review , username) VALUES ('$reviewbookname' , '$reviewbookauthorname' , '$review' , '$username')";

                    mysqli_query($db_connect , $sql_insert);
                    
                    echo "<script> 
                    show.textContent = 'Review Submitted Successfully!'  
                    reviewpost.appendChild(show);
                    </script>";
                }

            } else {
                $sql_insert = "INSERT INTO book_review (book_name , author_name , review , username) VALUES ('$reviewbookname' , '$reviewbookauthorname' , '$review' , '$username')";

                mysqli_query($db_connect , $sql_insert);
                
                echo "<script> 
                    show.textContent = 'Review Submitted Successfully!'  
                    reviewpost.appendChild(show);
                    </script>";
            }
            mysqli_close($db_connect);
        } else {
            echo "<script> 
                    show.textContent = 'Input Fields Can\'t Be Empty!'  
                    reviewpost.appendChild(show);
                    </script>";
        }
    }

    if (isset($_POST["reviewextract"])) {
        if(!empty($_POST["getreviewbook"])) {

            $getreviewbook = filter_input(INPUT_POST , "getreviewbook" , FILTER_SANITIZE_SPECIAL_CHARS);

            $sql_retrieve = "SELECT book_name , author_name , review , username FROM book_review WHERE book_name = '$getreviewbook' OR author_name = '$getreviewbook'";

            $result_show = mysqli_query($db_connect , $sql_retrieve);

            if(mysqli_num_rows($result_show) > 0) {

                while ($row = mysqli_fetch_assoc($result_show)) {
                    $bookname = $row["book_name"];
                    $authorname = $row["author_name"];
                    $reviewshow = $row["review"];
                    $username = $row["username"];

                    /* Same problem as before, only last loop shows */
                    echo "
                    <script>
                        booknameshow.textContent = '$bookname';
                        authornameshow.textContent = '$authorname';
                        review.textContent = '$reviewshow';
                        usernameshow.textContent = 'Posted by - $username';

                        showrev.appendChild(booknameshow);
                        showrev.appendChild(authornameshow);
                        showrev.appendChild(review);
                        showrev.appendChild(usernameshow);

                        reviewshow.appendChild(showrev);
                    </script>";
                }
            } else {
                // This works
                echo "Works";
                // But This Doesn't work????
                echo "<script> 
                    show.textContent = 'Book Or Author Name Doesn't Match!';  
                    reviewshow.appendChild(show);
                    </script>";
            }

            mysqli_close($db_connect);

        } else {
            echo "<script> 
                    show.textContent = 'Search Bar Can\'t Be Empty!';  
                    reviewshow.appendChild(show);
                    </script>";
        }
    }
?>