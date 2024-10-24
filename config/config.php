<?php

    define("HOST","localhost");
    define("DBNAME","online_store");
    define("USER","root");
    define("PASS","");

    try {
        $conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME,USER,PASS);
        echo "Connection is fine";
        $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Connection is failed". $e->getMessage();
    }

