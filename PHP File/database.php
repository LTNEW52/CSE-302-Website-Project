<?php

    $db_server = "localhost:3307";
    $db_user = "root";
    $db_pass = "";
    $db_name = "enthusiast_reader_club";

    try {
        $db_connect = mysqli_connect($db_server , $db_user , $db_pass , $db_name);
    } catch (mysqli_sql_exception) {
        echo "<script>window.alert('Can\'t Connect To Database!')</script>";
    }

?>