<?php

// load database classes
require_once 'Database\Connection.php';
require_once 'Database\Dbutil.php';

//load Controller class
require_once 'Controller.php';

//load User class
require_once 'User.php';

//load Objects
$conn = new Connection();
$db = new Dbutil();
$user = new User();


// $conn->start();
// $db->create_db($conn);
// $db->drop_db($conn);
// $db->create_table($conn);
// $db->drop_table($conn);
// $db->edit_data($conn);
// $db->show_table($conn);
// echo "checked";


// Route::('URI', 'controller')

Controller::index($conn, $db);


