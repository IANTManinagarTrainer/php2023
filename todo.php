<html>
    <head>
        <title>ToDo Page</title>
    </head>
    <body>
        <form method="post"><input type="submit" name="reset" value="reset"></form>
        <form method="post">
            Item: <input type="text" name="input1" />
            <input type="submit" value="Add">
        </form>
        <ol>
            <?php
                session_start();
                
                if(isset($_REQUEST["reset"]))
                {
                    unset($_SESSION["array1"]);
                    session_destroy();
                }

                $array1 = array();  // create an empty array
                
                if(isset($_SESSION["array1"]))  // check if the session variable exists
                    $array1 = $_SESSION["array1"];  // get the array from the session
                
                if(isset($_REQUEST["input1"]))
                {
                    $input1 = $_REQUEST["input1"];
                    array_push($array1, $input1);  // add the new item to the array
                }
                
                foreach($array1 as $item)
                    echo "<li><input type='radio' name='radio1' value='$item'/>$item</li>";
                
                $_SESSION["array1"] = $array1;  // save the array back to the session
            ?>
        </ol>
    </body>
</html>