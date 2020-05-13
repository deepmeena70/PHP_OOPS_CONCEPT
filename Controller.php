<?php 
    class Controller
    {
        public static function index($conn, $db)
        {
            $result = $db->show_table($conn);

            
            // echo gettype($result);

            // print_r($result);
            
                                   
            include 'views\registered_users.php';
        }

        public static function add()
        {
           
        }

        public static function remove_all()
        {

        }

        public static function edit()
        {

        }



        public static function remove()
        {
            
        }

    }
