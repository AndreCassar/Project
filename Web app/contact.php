<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("location:index.php");
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
                <?php
                    echo "background-image: url(".$_SESSION['bgi'].");";
                ?>
                /*
                background-image: url(http://mattvizzo.com/wp-content/uploads/2013/08/dark-website-backgrounds-10.jpg);
                */
            }
            
            #info
            {
                color: #696d69;
            }

        </style>
        <script>
            function light() {
                <?php
                $_SESSION['bgi'] = "https://i.imgur.com/oiLCxsp.jpg";
                ?>
                document.body.style.backgroundImage = "url('https://i.imgur.com/oiLCxsp.jpg')";
            }
            function dark() 
            {
                <?php
                    $_SESSION['bgi'] = "http://mattvizzo.com/wp-content/uploads/2013/08/dark-website-backgrounds-10.jpg";
                ?>
                document.body.style.backgroundImage = "url('http://mattvizzo.com/wp-content/uploads/2013/08/dark-website-backgrounds-10.jpg')";
            }
        </script>
         

    </head>

    <body>
        <?php
            include('nav.php');
        ?>
        <div class="container">
            <div class="jumbotron">
                <h1 class="display-4">Contact us</h1>
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Enter text</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type='submit' name='submit_btn' class='btn btn-dark' id='f'>Submit!</button>
                    </div>
                </form>
            </div>    
        </div>
        
        <script
          src="http://code.jquery.com/jquery-3.2.1.min.js"
          integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
          crossorigin="anonymous"></script>
        <script src="js/movieSearch.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>