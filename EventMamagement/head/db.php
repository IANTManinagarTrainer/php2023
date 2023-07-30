<?php
    class db{
        public $con;
        function __construct()
        {
            $settings = parse_ini_file("../app.ini" , true);
            $this->con = new mysqli(
                $settings['database']['hostname'], 
                $settings['database']['username'], 
                $settings['database']['password'], 
                $settings['database']['database']
            );
        }
        function check_connection(){
            if($this->con == null || $this->con->connect_error)
                return false;
            return true;
        }

        function insert_user($username, $email, $password){
            $this->check_connection();
            $password = md5($password);
            if(!preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/', $email))
            {
                return false;
            }
            $sql = "INSERT INTO users_details 
                (username, email, password) 
                VALUES ('$username', '$email', '$password')";
            return $this->con->query($sql);
        }

        function log_user($username, $password){
            $this->check_connection();
            $password = md5($password);
            $sql = "SELECT * FROM users_details 
                WHERE username='$username' AND password='$password'";
            $result = $this->con->query($sql);
            if($result->num_rows > 0){
                if(!isset($_SESSION))
                    session_start();
                $_SESSION['username'] = $username;
                return true;
            }
            return false;
        }
        function __destruct()
        {
            $this->con->close();
        }
    }
?>