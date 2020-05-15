<?php

class Dbutil
{
    function create_db($conn)
    {
        try {
            $pdo = new PDO("mysql:host={$conn->db_host}", $conn->db_user, $conn->db_pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $pdo->prepare("CREATE DATABASE $conn->db_name");
            $stmt->execute();
        } catch (PDOException $e) {
            echo $stmt . "<br>" . $e->getMessage();
        }
        $pdo = null;
    }

    function drop_db($conn)
    {
        try {
            $pdo = new PDO("mysql:host={$conn->db_host}", $conn->db_user, $conn->db_pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $pdo->prepare("DROP DATABASE $conn->db_name");
            $stmt->execute();
        } catch (PDOException $e) {
            echo $stmt . "<br>" . $e->getMessage();
        }
        $pdo =null;
    }

    function create_table($conn)
    {
        try {
            $stmt = $conn->start()->prepare(
                "CREATE TABLE users(
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
            $stmt = $conn->start()->prepare("SELECT * FROM users");
            $stmt->execute();
            $result = $stmt->fetchAll();                     
        } catch (PDOException $e) {
            echo $stmt . "<br>" . $e->getMessage();
        }

        return $result;
    }

    // function drop_table($conn)
    // {
    //     try {
    //         $stmt = $conn->start()->prepare("DROP TABLE users");
    //         $stmt->execute();
    //     } catch (PDOException $e) {
    //         echo $stmt . "<br>" . $e->getMessage();
    //     }

    //     $conn = null;
    // }

    function create_data($conn, $username, $email, $pass)
    {
        try {
            $stmt = $conn->start()->prepare("INSERT INTO users(username, email, u_password)VALUES(?, ?, ?)");
            $stmt->bindParam(1, $username);
            $stmt->bindParam(2, $email);
            $stmt->bindParam(3, $pass);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $stmt . "<br>" . $e->getMessage();
        }
    }


    function show_row($conn,$id)
    {
        try {
            $stmt = $conn->start()->prepare("SELECT * FROM users WHERE id=?");
            $stmt->bindParam(1, $id);
            $stmt->execute();
            $result = $stmt->fetchAll();
        } catch (PDOException $e) {
            echo $stmt . "<br>" . $e->getMessage();
        }

        return $result;
    }



    function update_data($conn, $id, $username, $email, $pass)
    {
        try {
            $stmt = $conn->start()->prepare("UPDATE users
            SET username = ?, email= ?, u_password = ?
            WHERE id = ?");
            // echo $id.$username.$email.$pass;
            $stmt->bindParam(1, $username);
            $stmt->bindParam(2, $email);
            $stmt->bindParam(3, $pass);
            $stmt->bindParam(4, $id);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $stmt . "<br>" . $e->getMessage();
        }
        // echo "completed";
    }


    function remove_data($conn, $id)
    {
        try {
            $stmt = $conn->start()->prepare("DELETE FROM users where id=?");
            $stmt->bindParam(1, $id);
            $stmt->execute();
            $stmt = $conn->start()->prepare("ALTER TABLE users AUTO_INCREMENT = 1");
            $stmt->execute();
        } catch (PDOException $e) {
            echo $stmt . "<br>" . $e->getMessage();
        }
    }
}
