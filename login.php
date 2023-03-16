<!doctype html>
<html lang="en">
<title>Peedu Erik Pajo IT21</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="login.css">
<body>
    <div class="container">
<?php
        if (isset($_GET ["admin"] )&&isset($_GET ["parool"])) {
            $cookie_name = $_GET ["admin"];
            $cookie_value = $_GET ["parool"];
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1
            header('Location: admin.php');
             }
        
            
            
        
        
    ?>

    
   
   </div>
   <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
              <a class="navbar-brand" href="KT.php">Peedu Erik Pajo</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="KT.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="KT1.php">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="KT2.php">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="KT3.php">Templates</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="KT4.php">Pricing</a>
                  </li>
                </ul>
                    <i class="fa-brands fa-instagram " style="margin-right: 15px;"></i>
                    <i class="fa-brands fa-twitter" style="margin-right: 15px;"></i>
                    <i class="fa-brands fa-linkedin" style="margin-right: 15px;"></i>
                <form class="d-flex" role="search">
                  <a href="login.php">Logi Sisse</a>
                </form>
              </div>
            </div>
          </nav>
    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="login.php" method="get">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="admin" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="parool" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Logi sisse">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>