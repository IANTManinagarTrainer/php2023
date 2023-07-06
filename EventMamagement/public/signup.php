<html>
    <head>
        <title>Register</title>
    </head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <body>
        <?php include('nav.php'); ?>

        <h1 class="text-center pt-5">Register</h1>

        <?php
            if(isset($_POST['register'])){
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $password2 = $_POST['password2'];

                if($password == $password2){
                    include_once('../head/db.php');
                    $db = new db();
                    $sql = "INSERT INTO users_details (username, email, password) VALUES ('$username', '$email', '$password')";
                    $db->con->query($sql);
                    echo "User registered successfully <br>Go to <a href='login.php'>Login</a>";
                }else{
                    echo "Passwords do not match <a href='signup.php'>Try again</a>";
                }
            }
            else{ ?>
        
        <div class="text-center">
            <form method="POST">
                <input type="text" name="username" placeholder="Enter your username"> <br>
                <input type="text" name="email" id="email" placeholder="Enter your Email"> <br>
                <input type="password" name="password" placeholder="Enter your password"> <br>
                <input type="password" name="password2" placeholder="Confirm your password"> <br>
                <input type="submit" name="register" value="register">
            </form>
        </div>
        <?php }?>
    </body>
</html>