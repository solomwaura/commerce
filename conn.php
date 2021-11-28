<?php

    $servername = "localhost";
    $username ="root";
    $password = "";
    $dbname = "jumbo";

    $conn = new mysqli($servername,$username,$password,$dbname);

    if (mysqli_connect_error()) {

        die("Database connection failed: " . mysqli_connect_error());
    }
    
// define('DB_NAME', 'jumbo');
// define('DB_USER', 'root');
// define('DB_PASS', '');
// define('DB_HOST', 'localhost');

// $link = mysql_connect(DB_HOST, DB_USER, DB_PASS);

// if(!$link)
// {
//     die('Could not connect to database: ' . mysql_error());
// }

// $db_select = mysql_select_db(DB_NAME);

// if(!$db_select)
// {
//     die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
// }





?>