<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "registerUser";

    $conn = mysqli_connect($server, $username, $password, $dbname);

    if(!$conn){
        die("Conection Fialed". mysqli_connect_error());
    } else{
        "Успех";
    } ?>