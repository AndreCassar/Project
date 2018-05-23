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
                
                if(isset($_GET['theme']))
                {
                    $theme = $_GET['theme'];
                    if($theme == 0)
                    {
                        echo "background-image: url('http://apshn.com/wp-content/uploads/2014/10/light-background.jpg');";
                    }
                    else
                    {
                        echo "background-image: url('http://mattvizzo.com/wp-content/uploads/2013/08/dark-website-backgrounds-10.jpg;');";
                    }
                }
                else
                {
                    echo "background-image: url(".$_SESSION['bgi'].");";
                
                }
                ?>
            }
            h3
            {
                text-align: center;
                color: darkorange;
            }
        </style>

    </head>

    <body>
        <?php
            include('nav.php');
        ?>
        
        <div id="info" class="container">
            <h3>Help</h3>
            <div class="jumbotron">
                <p>The My Movie List website allows its users to create a list of their watched, favourite and plan to watch movies.</p>
                <p>This can be done by searching for a movie from the Search page or the Filtered Search page and afterwards clicking on the respective button.</p>
                <p>By adding a movie to your list you would be helping us expand our database.</p>
                <hr class="my-4">
                <p>Once a movie is added to your list you can rate and add a comment/review to it by entering entering the data and clicking 'submit' in the row of the movie you wish to rate or review.</p>
                <p>In addition, in order to remove a movie from your list, simply click the 'remove' button next to the movie you wish to delete from your list.</p>
                <hr class="my-4">
                <p>The 'Advanced Search' can be used to help our users discover more movies form our database by applying filtering by titles and genre.</p>
            </div>
            
 
            
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    </body>
</html>
