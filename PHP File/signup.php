<?php
    include("database.php");
    include("../HTML File/signup.html");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (!empty($_POST["firstname"]) && !empty($_POST["lastname"]) && !empty($_POST["email"]) && !empty($_POST["username"]) && !empty($_POST["password"]) && !empty($_POST["confirmpassword"])) {
            
            if ($_POST["password"] == $_POST["confirmpassword"]) {

                $firstname = filter_input(INPUT_POST , "firstname" , FILTER_SANITIZE_SPECIAL_CHARS);
                $lastname = filter_input(INPUT_POST , "lastname" , FILTER_SANITIZE_SPECIAL_CHARS);
                $email = filter_input(INPUT_POST , "email" , FILTER_SANITIZE_EMAIL);
                $username = filter_input(INPUT_POST , "username" , FILTER_SANITIZE_SPECIAL_CHARS);
                $password = filter_input(INPUT_POST , "password" , FILTER_SANITIZE_SPECIAL_CHARS);
                $hash = password_hash($password , PASSWORD_DEFAULT);

                $sqlcheck = "SELECT username , email FROM user_data WHERE firstname = '$firstname' OR lastname = '$lastname' OR username = '$username' OR email = '$email'";
                $result = mysqli_query($db_connect , $sqlcheck);

                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);

                    if($row["username"] == $username || $row["email"] == $email) {
                        echo "<script> window.alert('Username or Email Already Exists') </script>";
                    }
                }  else {
                    $sqlpost = "INSERT INTO user_data (firstname , lastname , email , username , password) VALUES ('$firstname' , '$lastname' , '$email' , '$username' , '$hash')";
                    mysqli_query($db_connect , $sqlpost);

                    echo "<script> window.alert('Registered Successfully!') </script>";
                }
                mysqli_close($db_connect);
            } else {
                echo "<script> window.alert('Password and Confirm Password Doesn\'t Match!') </script>";
            } 
        } else {
            echo "<script> window.alert('Registration Field Can\'t be Empty') </script>";
        }
    }
?>