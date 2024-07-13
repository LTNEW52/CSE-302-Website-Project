<?php
    session_start();

    include("database.php");
    include("../HTML FILE/login.html");

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        if(!empty($_POST["username"]) && !empty($_POST["password"])) {

            $username = filter_input(INPUT_POST , "username" , FILTER_SANITIZE_SPECIAL_CHARS);
            $password = filter_input(INPUT_POST , "password" , FILTER_SANITIZE_SPECIAL_CHARS);
            $hash = password_hash($password , PASSWORD_DEFAULT);

            $sql = "SELECT username , password FROM user_data WHERE username = '$username'";
            $result = mysqli_query($db_connect , $sql);

            if(mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);

                mysqli_close($db_connect);

                if($username == $row["username"] && password_verify($password , $row["password"])) {

                    $_SESSION["username"] = $username;
                    header("location: ../PHP File/home.php");
                } else {
                    echo "<script> window.alert('Username or Password Doesn\'t Match!') </script>";
                }
            } else {
                echo "<script> window.alert('Username Doesn\'t Exists!') </script>";
            }
        } else {
            echo "<script> window.alert('Username and Password Can\'t be Empty!') </script>";
        }
    }
?>
