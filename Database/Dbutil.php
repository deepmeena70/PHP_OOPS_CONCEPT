<?php

class Dbutil
{
    function create_db($conn)
    {
        try {
            $stmt = $conn->start()->prepare("CREATE DATABASE $conn->db_name");
            $stmt->execute();
        } catch (PDOException $e) {
            echo $stmt . "<br>" . $e->getMessage();
        }
        $conn = null;
    }

    function drop_db($conn)
    {
        try {
            $stmt = $conn->start()->prepare("DROP DATABASE $conn->db_name");
            $stmt->execute();
        } catch (PDOException $e) {
            echo $stmt . "<br>" . $e->getMessage();
        }

        $conn = null;
    }

    function create_table($conn)
    {
        try {
            $stmt = $conn->start()->prepare(
                "Use $conn->db_name;CREATE TABLE users(
                id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                username VARCHAR(30) NOT NULL,
                email VARCHAR(50) NOT NULL,
                u_password VARCHAR(30) NOT NULL
                )"
            );
            $stmt->execute();
        } catch (PDOException $e) {
            echo $stmt . "<br>" . $e->getMessage();
        }

        $conn = null;
    }

    function show_table($conn)
    {
        try {
            $stmt = $conn->start()->prepare("USE $conn->db_name;SELECT * FROM users");
            $stmt->execute();
        } catch (PDOException $e) {
            echo $stmt . "<br>" . $e->getMessage();
        }

        $conn = null;
    }

    function drop_table($conn)
    {
        try {
            $stmt = $conn->start()->prepare("USE $conn->db_name;DROP TABLE users");
            $stmt->execute();
        } catch (PDOException $e) {
            echo $stmt . "<br>" . $e->getMessage();
        }

        $conn = null;
    }

    function create_data($conn, $user)
    {
        try {
            $stmt = $conn->start()->prepare("USE $conn->db_name;INSERT INTO users(username, email, u_password)VALUES(?, ?, ?)");
            $stmt->bindParam(1, $user->username);
            $stmt->bindParam(2, $user->email);
            $stmt->bindParam(3, $user->password);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $stmt . "<br>" . $e->getMessage();
        }
    }

    function show_data($conn,$user)
    {
        try {
            $stmt = $conn->start()->prepare("USE $conn->db_name;SELECT * FROM WHERE username=?");
            $stmt->bindParam(1, $user->username);
            $stmt->bindParam(2, $user->email);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $stmt . "<br>" . $e->getMessage();
        }
    }

    function edit_data($conn, $user)
    {
        try {
            $stmt = $conn->start()->prepare("USE $conn->db_name;INSERT INTO users(username, email, u_password)VALUES(?, ?, ?) WHERE username= ? &email = ?");
            $stmt->bindParam(1, $user->username);
            $stmt->bindParam(2, $user->email);
            $stmt->bindParam(3, $user->password);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $stmt . "<br>" . $e->getMessage();
        }
    }


    function remove_data($conn, $user)
    {
        try {
            $stmt = $conn->start()->prepare("USE $conn->db_name;DELETE FROM users where username= ? & email = ?");
            $stmt->bindParam(1, $user->username);
            $stmt->bindParam(2, $user->email);            
            $stmt->execute();
        } catch (PDOException $e) {
            echo $stmt . "<br>" . $e->getMessage();
        }
    }
}
