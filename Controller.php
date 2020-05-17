<?php 
    class Controller
    {
        
        public function index($conn, $db)
        {
            $result = $db->show_table($conn);

            
            // echo gettype($result);

            // print_r($result);
            
                                   
            include 'views\registered_users.php';
            die();
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

            header('Location: /');
            die(); 

        }


        public function edit($conn, $db, $user)
        {
            $user->setId($_REQUEST['id']);
            
            $id = $user->getId();            
            
            $result = $db->show_row($conn, $id);

            // header('Location: /views/edit_users.php');

            include 'views\edit_users.php';

        } 

        public function update($conn, $db, $user)
        {
            $user->setId($_REQUEST['id']);
            $user->setUsername($_REQUEST['username']);
            $user->setEmail($_REQUEST['email']);
            $user->setPassword($_REQUEST['password']);

            $id = $user->getId();

            $username = $user->getUsername();

            $email = $user->getEmail();

            $pass = $user->getPassword();

            $db->update_data($conn, $id, $username, $email, $pass);

            header('Location: /');

            die();

        }



        public function remove($conn, $db, $user)
        {
            $user = $user->setId($_REQUEST['id']);

            $id = $user->getId();

            $db->remove_data($conn, $id);

            header('Location: /');
            die();            
        }

    }
