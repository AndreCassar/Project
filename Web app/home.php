<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        die("You did not log in properly");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>My App</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"> 
        <style>
            html, body{
                height:100%; /* important to vertically align the container */
                margin:0;
                padding:0;
                background-image: url(http://mattvizzo.com/wp-content/uploads/2013/08/dark-website-backgrounds-10.jpg);
            }   

        </style> 
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3 mb-4">
            <div class="container">
                <a class="navbar-brand" href="#"><i class="fa fa-ravelry text-danger" aria-hidden="true"></i></a>
                <img src="images\Nav_Icon.png" width="50" height="50" alt="">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="favourites.html">List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="movies.html">Search</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                    <?php
                        echo "<h5>You are  logged in as: ".$_SESSION['username']."</h5>";
                        
                    ?>
                        <a href='logout.php'>Log out</a>
                    </span>
                     
                      
                    
                </div>
            </div>
        </nav>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    </body>
</html>
