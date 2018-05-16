<?php
    session_start();
    $_SESSION['bgi'] = "http://mattvizzo.com/wp-content/uploads/2013/08/dark-website-backgrounds-10.jpg";
    if(isset($_SESSION['username']))
    {
        header("location:home.php");
        die("You are already logged in");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        html, body{
            height:100%; /* important to vertically align the container */
            margin:0;
            padding:0;
            background-image: url(http://mattvizzo.com/wp-content/uploads/2013/08/dark-website-backgrounds-10.jpg);
            
        }

        .vertical-center {
          min-height: 100%;  
          min-height: 100vh; 
          display: flex;
          align-items: center;
          background-image: background-image: url("http://mattvizzo.com/wp-content/uploads/2013/08/dark-website-backgrounds-10.jpg");
        }
        a
        {
            color: black;
        }
    </style>
</head>
    <body>
        <?php
            if(isset($_GET['change']))
            {
                $c = $_GET['change'];
                if($c == 1)
                {
                    echo "<div class=\"alert alert-success\">Password updated</div>";
                }

            }
            if(isset($_GET['login']))
            {
                $l = $_GET['login'];
                if($l == 0)
                {
                    echo "<div class=\"alert alert-danger\">Incorrect username or Password!</div><br/>";
                }
            }
        ?>
       <div class="vertical-center">
        <div class="container">
                <div class="jumbotron bg-secondary text-black">
               <div class="row">
                <div class="col-sm-2">
                </div>    
                   <div class="col-sm-8">
                   <div class="row justify-content-center">
                        <a class="justify-content-center" href="register.php">Unregistered? Click here to sign up!</a>
                    </div>
                   
                    <div class="row justify-content-center">
                        <div class="col-sm-4">
                          <h2 class="justify-content-center">Login</h2>
                        </div>
                    </div>
                     <form action="login.php" method="post">
                      <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="user" placeholder="Username" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" name="pass" placeholder="Password" required>
                        </div>
                      </div>
                      <button type="submit" name="submit" class="btn btn-dark btn-lg btn-block">Login</button>
                    </form>
                       <div class="row justify-content-center">
                        <a class="justify-content-center" href="changePass.php">Change Password</a>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
        </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <?php
        if(isset($_GET['login']))
        {
            $log = $_GET['login'];
            if($log == -1)
            {
                echo "<div class=\"alert alert-error\">Please enter all fields</div>";
            }
            //else if($log == 0)
        }
        ?>
    </body>
</html>