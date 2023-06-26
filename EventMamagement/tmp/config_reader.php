<?php
    $settings = parse_ini_file("../app.ini", true);
?>

<html>
    <head>
        <title>Reading and Showing Configs</title>
    </head>
    <body>
        <h1>Database</h1>
        <table>
            <tr>
                <td>Key</td>
                <td>Value</td>
            </tr>
            <?php foreach($settings['database'] as $key => $value){ ?>
                <tr>
                    <td><?=$key?></td>
                    <td><?=$value?></td>
                </tr>
            <?php }?>
        </table>

        <h3>Name of database is <?=$settings["database"]['database']?></h3>
    </body>
</html>