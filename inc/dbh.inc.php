<?php
    $user = "root";
    $pass = "";
    $conn = new PDO("mysql:host=localhost;dbname=celswap;", $user, $pass);

    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
?>