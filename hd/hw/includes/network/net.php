<?php

require_once 'config/db.php';

$net = mysqli_connect(host,user,pass,database);


if ($net -> connect_error) {
    echo "<script>alert('we cannot connect to our store at the moment. Try agin later');</script>";
}

?>