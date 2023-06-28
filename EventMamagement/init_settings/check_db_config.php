<?php
    $settings = parse_ini_file("../app.ini" , true);
    
    $con = new mysqli(
        $settings['database']['hostname'], 
        $settings['database']['username'], 
        $settings['database']['password'], 
        $settings['database']['database']
    );  // meaning $con->open();

    if($con->connect_error)
        die("Cannot connect to database");
    else echo "1. Connected to database<br>";
    try{
        $con->query("SELECT 1 FROM users_details LIMIT 1");
        echo "2. Table users_details found<br>";
    }catch(Exception $e){

        $create_table = $con->query("CREATE TABLE IF NOT EXISTS users_details(
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(30) NOT NULL,
            password VARCHAR(30) NOT NULL,
            email VARCHAR(50) NOT NULL,
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )");
        
        if($create_table)
            echo "2. Table User Details created<br>";
        else die("2. Error creating Table User Details<br>");
    }

    $con->close();
?>