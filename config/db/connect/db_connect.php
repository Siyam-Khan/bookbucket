<?php
    define('DB_SERVER', 'localhost');
    define('DB_DATABASE', 'id1160815_bookbucket_info');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');

    $connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE) or die( mysqli_error($connection) );
    // Check connection
    if (mysqli_connect_errno()){
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    } else {
      //echo "db connection successfull" . '<br>';
    }

?>
