<?php 
    class Connection
    {
        public $db_host = 'localhost';
        public $db_name = 'my_mvc';
        public $db_user = 'root';
        public $db_pass = '';
        public $pdo;

        public function start()
        {
            try{
                $pdo = new PDO("mysql:host={$this->db_host};dbname={$this->db_name}", $this->db_user, $this->db_pass);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                echo "Error : " . $e->getMessage() . "<br/>";
            }

            return $pdo;
            
        }

    }
?>