<?php

    define('DB_HOST', '127.0.0.1');
    define('DB_USER', 'root');
    define('DB_PASS', 'MySqlPassword@4321');
    define('DB_NAME',  'php_dev_tutorial');

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if($conn->connect_error) {
        die('Connection Failed' . $conn->connect_error);
    }


?>