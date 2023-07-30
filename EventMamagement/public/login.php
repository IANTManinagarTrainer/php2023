<html>
    <head>
        <title>
            Log In
        </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php include('nav.php'); ?> 
        <div class="">

            <div class="container">
                <div class="row justify-content-center">
                  <div class="col-lg-4 col-md-6 col-sm-8 mt-5">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title text-center">Login</h5>
                        <hr>
                        <form action="../head/dologin.php" method="post">
                          <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input required type="text" class="form-control" name="username" id="username" placeholder="Enter your username">
                          </div>
                          <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input required type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
                          </div>
                          <div class="text-center d-grid">
                            <button type="submit" class="btn btn-danger btn-block">Login</button>
                          </div>
                          <div class="text-danger">
                            <?php
                              session_start();
                              if(isset($_SESSION['error'])){
                                echo $_SESSION['error'];
                                unset($_SESSION['error']);
                              }
                            ?>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </body>
</html>