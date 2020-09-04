<?php

    $server   = "localhost";
    $username = "guestbook_user";
    $password = "guestbook_password";
    $database = "guestbook";

    try {

        $connection = new PDO ("mysql:host=$server;dbname=$database", $username, $password);

        $connection -> setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
    catch (PDOException $e) {
        echo "Connection failed: " . $e -> getMessage ();
    }
