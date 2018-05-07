<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        html, body{
            height:100%; 
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
    <script>
            function light() {
                document.body.style.backgroundImage = "url('https://i.imgur.com/NGAN1yI.jpg')";
            }
            function dark() 
            {
                document.body.style.backgroundImage = "url('http://mattvizzo.com/wp-content/uploads/2013/08/dark-website-backgrounds-10.jpg')";
            }
        </script> 
</head>
    <body>
      <?php
				//if submit_btn was pressed
				if (isset($_POST['submit_btn'])) {
					$user = $_POST['user'];
					$email = $_POST['email'];
                    $pass = $_POST['pass'];
					
					if (empty($user) || empty($email) || empty($pass)) {
						echo "<div class=\"alert alert-danger text center\"> You need to enter all details</div>";
					}
					else {
                        include('connect.php');
						$query = "SELECT * FROM users WHERE username = '".$user."'";
                        $result = mysqli_query($link, $query) or die("Error in query: ". mysqli_error($link));
                        if(mysqli_fetch_assoc($result) >= 1)
                        {
                            echo "<div class=\"alert alert-danger\">User already exists</div>";
                        }
                        else
                        {
                            $query = "INSERT INTO users (username, email, password) VALUES('$user', '$email', '$pass')";
                            //send statement to mysql
                            mysqli_query($link, $query);

                            //check if 1 row was added...
                            if (mysqli_affected_rows($link) == 1) {
                                echo "<div class=\"alert alert-success\">Thank you! You were registered!</div>";
                            }
                            else {
                                echo "<div class=\"alert alert-warning\">Oops! Something went wrong!</div>";
                            }    
                        }
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
                        <div class="col-sm-4">
                          <h2 class="justify-content-center">Register</h2>
                        </div>
                    </div>
                     <form action="register.php" method="post">
                      <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="user" placeholder="Username" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" name="pass" placeholder="Password" required>
                        </div>
                      </div>
                      <button type="submit" name="submit_btn" class="btn btn-dark btn-lg btn-block">Register</button>
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