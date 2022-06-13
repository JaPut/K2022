<?php
// require_once('../class/class.php');
require_once('./class/realclass.php');

    class database
    {
        public $conn;

        public function __construct()
        {
            $this->db_connect();
        }
       
        public function db_connect()
        {
            $this->conn = mysqli_connect('localhost','root','','templatejp');
            if(mysqli_connect_error())
            {
                die(" Connect Failed ");
            }
        }

        public function check($a)
        {
            $return = mysqli_real_escape_string($this->conn,$a);
            return $return;
        }

        
    }
?>
