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
    }
?>