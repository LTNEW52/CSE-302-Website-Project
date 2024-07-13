<?php
    session_start();
    include("../HTML File/header.html");
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
        <div id="msgcontainer">
            <div id="msgshow"></div>

            <div id="msgsend">
                <form action="" method="post" autocomplete="off">
                    <input id="msg" type="text" name="msgtxt">
                    <input id="msgsub" type="submit" name="msgsub" value="Send!">
                </form>
            </div>
        </div>  
    </main>

    <script>
        const msgshow = document.getElementById("msgshow");
    </script>
</body>
</html>

<?php 
    if (isset($_POST["msgsub"])) {
        if (isset($_POST["msgtxt"])) {
            $msg = filter_input(INPUT_POST , "msgtxt" , FILTER_SANITIZE_SPECIAL_CHARS);
            echo "<script>
                let msgdiv = document.createElement('div');
                let message = document.createElement('p');

                msgdiv.classList.add('msgdiv');
                message.classList.add('message');

                message.textContent = '$msg';
                msgdiv.appendChild(message);

                msgshow.appendChild(msgdiv);
            </script>";
        }
    }
?>
