<?php
    session_start();
?>

<?php
    session_destroy();
    header("location: ../HTML File/login.html");
?>
