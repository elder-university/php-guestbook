<?php

    include "connect.php";

    $query = "INSERT INTO entries (user, comment, date_posted) VALUES (";
    $query .= '"' . $_POST ['user'] . '",' . '"' . $_POST ['comment'] . '",';
    $query .= "now())";

    try {
        if (isset($connection)) {
            $connection -> exec ($query);
        }
    }
    catch (PDOException $e) {
        echo $query . "<br/>" . $e -> getMessage ();
    }

    $connection = null;

    header ('Location: ' . $_SERVER ['HTTP_REFERER']);
