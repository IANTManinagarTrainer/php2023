<html>
    <head>
        <title>Fibonacci Series</title>
    </head>
    <body>
        <h1 style="text-align: center;">Fibonacci Series</h1>
        <p style="text-align: end;">
            Created by: Nikhil Gupta <br>
            Date: 2023-08-08
        </p>
        <hr>

        <b>Max: 
            <?php
                $max = 50;
                print($max);
            ?>
        </b><br>
        <b>Output:</b><br>
        <?php
    $n1=1;
    $n2=1;
    $n3=$n1+$n2;
    while($n3<$max)
    { //Yes here
        print("$n3, ");
        $n1=$n2;
        $n2=$n3;
        $n3=$n1+$n2;
    }//No Here
?>
    </body>
</html>
