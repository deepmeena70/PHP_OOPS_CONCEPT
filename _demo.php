<?php 
    require 'Database/Connection.php';
    require 'Database/Dbutil.php';
    // require 'Controller.php';
    // require 'User.php';

$conn = new Connection();
$db = new Dbutil();

// $db->create_db($conn);
// $db->drop_db($conn);
// $db->create_table($conn);
// $db->drop_table($conn);
$db->add_data($conn);
// echo "checked";