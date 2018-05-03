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
            #info
            {
                color: #696d69;
            }

        </style>

    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3 mb-4">
            <div class="container">
                <a class="navbar-brand" href="#"><i class="fa fa-ravelry text-danger" aria-hidden="true"></i></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="list.php">List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="movieSearch.php">Search</a>
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
        
        <div class="container">
            <div class="jumbotron">
                <h3 class="text-center">Movies</h3>
            <!--    <div class="float-left">Float left on all viewport sizes</div><br>
                <div class="float-right">Float right on all viewport sizes</div><br>
                <div class="float-none">Don't float on all viewport sizes</div>-->
                <div class="row">
                    <div class="col-8">
                        <form id="searchForm">
                            <!-- <div id="movie"></div> -->
                            <input type="text" class="form-control" id="movieSearch" placeholder="Enter movie title">
                        </form>
                    </div>
                    <div class="col-4">
                        <button type="button" class="btn btn-dark" id="search">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="info" class="container">
           <div class="table-responsive-sm">

            <table class="table table-bordered table-dark">
                <tr>
                    <th><font color="#669960">Title</font></th>
                    <th><font color="#669960">Genre</font></th>
                    <th><font color="#669960">Release Date</font></th>
                    <th><font color="#669960">Rating</font></th>
                    <th><font color="#669960">Preview Image</font></th>
                    <th><font color="#669960">Watched</font></th>
                    <th><font color="#669960">Favourite</font></th>
                    <th><font color="#669960">Plan to watch</font></th>
                </tr>
                <tr>
                    <td id="titl">sdfsdf</td>
                    <td id="genre">sdfsdf</td>
                    <td id="date">sdfsdf</td>
                    <td id="rating">sdfsdf</td>
                    <td><img id="url" src="" alt="No preview available" height="240" width="180"></td>
                    <td>
                    <form action="watched.php" method="post">
                        <input id="id" type="hidden" name="movie_id">
                        <input id="title" type="hidden" name="title">
                        <input id="dat" type="hidden" name="date">
                        <input id="ratin" type="hidden" name="rating">
                        <input id="imag" type="hidden" name="image">
                        <input id="genr" type="hidden" name="genre">
                        <button type="submit" name="submit_btn" class="btn btn-success" id="w">Add as watched</button>    
                    </form>
                    
                    </td>
                    <td><button type="button" class="btn btn-danger" id="f">Add to favourites!</button></td>
                    <td><button type="button" class="btn btn-primary" id="ptw">Plan to watch!</button></td>
                </tr>
            </table>
            </div>
            <div id="movieInfo" class="row">
                <div id="title" class="col-6">
                    
                </div>

                
                <!--<img id="preview" src="" class="img-thumbnail rounded float-right"> 
                <img src="..." class="rounded float-left" alt="...">
                <img src="..." class="rounded float-right" alt="...">-->
                
            
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
