<?php

            // Establishing the connection
            $serverName = "localhost";
            $username = "root";
            $password = "";
            $dbname = "school";

            $conn = mysqli_connect('localhost', 'root', '', 'school');

            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }


?>