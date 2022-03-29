<!--I'm going to use here a cloud based DB, so you don't neeed to create the table in your localhost server -->
<?php
    $host = "sql11.freesqldatabase.com";
    $user = "sql11478598";
    $password = "QV8lN45HjW";
    $db = "sql11478598";
    $conn = mysqli_connect($host, $user, $password, $db);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
    ?>
    