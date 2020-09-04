<?php

    include "connect.php";

    $query = "DELETE FROM entries WHERE id=" . $_GET ['id'];

    try {
        if (isset ($connection)) {
            $connection -> exec ($query);
        }
    }
    catch (PDOException $e) {
        echo $query . "<br/>" . $e -> getMessage ();
    }

    $connection = null;

    header ('Location: ' . $_SERVER ['HTTP_REFERER']);
