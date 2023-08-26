<?php

    $con = new mysqli('localhost', 'root', '', 'hotel');

    if(!$con) {
        die(mysqli_error($con));
    }
?>