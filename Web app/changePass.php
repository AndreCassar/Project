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
            if(isset($_POST['submit']))
            {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $newPass = $_POST['newPass'];
                include('connect.php');
                //SELECT * FROM users WHERE username = "amock" AND password = "123"
                $sql = "SELECT * FROM users WHERE username = '".$user."' AND password = '".$pass."'";
                $result = mysqli_query($link, $sql) or die("Error in query: ". mysqli_error($link));
                $count = 0;
                while ($row = mysqli_fetch_assoc($result)){
                    $count++;
                }
                if($count == 1)
                {
                    $sql = "UPDATE users SET password = '$newPass' WHERE username='$user'";
                    //$sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";

                    mysqli_query($link, $sql) or die(mysqli_error($link));
                    $change = 1;
                    header("location:index.php?change=".$change);
                }
                else
                {
                    echo "<div class=\"alert alert-danger\">Incorrect username or password</div>";
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
                        <div class="col-sm-6">
                          <h2 class="justify-content-center">Change Password</h2>
                        </div>
                    </div>
                     <form action="changePass.php" method="post">
                      <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Username</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="user" placeholder="Username" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Old Password</label>
                        <div class="col-sm-8">
                          <input type="password" class="form-control" name="pass" placeholder="Old Password" required>
                        </div>
                      </div>
                         <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">New Password</label>
                        <div class="col-sm-8">
                          <input type="password" class="form-control" name="newPass" placeholder="New Password" required>
                        </div>
                      </div>
                      <button type="submit" name="submit" class="btn btn-dark btn-lg btn-block">Change Password</button>
                    </form>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
        </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
    </body>
</html>