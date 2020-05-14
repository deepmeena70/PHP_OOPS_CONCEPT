<?php 
    class Controller
    {
        
        public function index($conn, $db)
        {
            $result = $db->show_table($conn);

            
            // echo gettype($result);

            // print_r($result);
            
                                   
            return include 'views\registered_users.php';
        }

        public function add($conn, $db, $user)
        {
            $user->setUsername($_REQUEST['username']);
            $user->setEmail($_REQUEST['email']);
            $user->setPassword($_REQUEST['password']);

            $username = $user->getUsername();

            $email = $user->getEmail();

            $pass = $user->getPassword();

            $db->create_data($conn, $username, $email ,$pass);

            return include 'index.php';

        }


        public function edit($conn, $db, $user)
        {
            $user->setId($_REQUEST['id']);
            $user->setUsername($_REQUEST['username']);
            $user->setEmail($_REQUEST['email']);
            $user->setPassword($_REQUEST['password']);
            
            $id = $user->getId();

            $username = $user->getUsername();

            $email = $user->getEmail();

            $pass = $user->getPassword();
            
            $result = $db->show_row($conn, $id);

            include 'views\edit_users.php';

            $db->edit_data($conn, $id, $username, $email, $pass);
            
        } 



        public function remove($conn, $db, $user)
        {
            $user = $user->setId($_REQUEST['id']);

            $id = $user->getId();

            $db->remove_data($conn, $id);

            return include 'index.php';            
        }

    }
