<?php
    function getConn() {
        try {
            $username = "root";
            $password = "";

            $conn = new PDO("mysql:host=localhost;dbname=crud", $username, $password);
        } catch (PDOException $e) {
            echo "ERROR: " . $e->getMessage();
        }

        return $conn;
    }
?>