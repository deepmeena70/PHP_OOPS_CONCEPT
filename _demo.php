<?php 

require 'load.php';

/*   

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

    $id = 1;

    $res = show_row($conn, $id);

    foreach($res as $v)
    {
       print_r($v) ;
    } 
    
    */

    