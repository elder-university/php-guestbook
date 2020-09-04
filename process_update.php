<?php

    include "connect.php";

    $query = "UPDATE entries SET ";
    $query .= "user = \"" . $_POST ['user'] . "\", ";
    $query .= "comment = \"" . $_POST ['comment'] . "\" ";
    $query .= "WHERE id=" . $_POST ['id'];

    try {
        if (isset ($connection)) {
            $connection -> exec ($query);
        }
    }
    catch (PDOException $e) {
        echo $query . "<br/>" . $e -> getMessage ();
    }

    $connection = null;

    header ('Location: index.php');
