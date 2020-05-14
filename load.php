<?php 
    // load database classes
    require_once 'Database\Connection.php';
    require_once 'Database\Dbutil.php';

    //load Controller class
    require_once 'Controller.php';

    //load User class
    require_once 'User.php';

    
    //load objects

    $conn = new Connection();
    $db = new Dbutil();
    $control = new Controller();
    $user = new User();
   


