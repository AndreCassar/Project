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
            }
            #info
            {
                color: #696d69;
            }

        </style>
        <script>
            function light() {
                <?php
                $_SESSION['bgi'] = "https://i.imgur.com/NGAN1yI.jpg";
                ?>
                document.body.style.backgroundImage = "url('https://i.imgur.com/NGAN1yI.jpg')";
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

       <div class="row justify-content-center">
           <div class="jumbotron text-black col-sm-10">

               <div class="row justify-content-center">
                   <h2 class="justify-content-center">Apply search filters</h2>
               </div>
               <form action="advancedSearch.php" method="post">
                   <div class="row justify-content-center">
                       <label class="col-sm-1 col-form-label">Title</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="title" placeholder="title">
                        </div>
                        <label class="col-sm-1 col-form-label">Genre:</label>
                        <div class="col-sm-4">

                            <!--<div class="dropdown">
                            <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Select Genre
                            </button>
                            -->
                            <!--<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">-->
                            <?php
                                
                                include('connect.php');
                                $query = "SELECT genre FROM genre";
                                //echo $query;
                                $result = mysqli_query($link, $query) or die("error here: ".mysqli_error($link));
                                echo "<select name='genre'>";
                                while ($r = mysqli_fetch_assoc($result))
                                {
                                    $g = $r['genre'];
                                    echo "<option value=".$g.">".$g."</option>";                                              
                                    //echo $r['genre'];
                                    //echo "<a class='dropdown-item'>".$r['genre']."</a>";    
                                    //echo $genre;
                                }
                                echo "</select>";
                            ?> 
                                      <!--</div>-->
                        </div>
                              <!--</div>-->
                            <button type="submit" name="filters" class="btn btn-dark">Search</button>
                          </div>                      

                        </form>
            </div>
            </div>
            
        <div id="info" class="container">
           <div class="table-responsive-sm">

            <table class="table table-dark">
                <tr>
                    <th><font color="#669960">Title</font></th>
                    <th><font color="#669960">Genre</font></th>
                    <th><font color="#669960">Release Date</font></th>
                    <th><font color="#669960">Rating</font></th>
                    <th><font color="#669960">Comments</font></th>
                    <th><font color="#669960">Remove from list</font></th>
                </tr>
                <?php
                
                    if(isset($_POST['filters']))
                    {
                        $title = $_POST['title'];
                        $genre = $_POST['genre'];
                        
                        $query = "SELECT movie_genre.movie_id, movie_genre.genre, movies.title, movies.date, movies.rating FROM `movie_genre` inner join movies on movie_genre.movie_id = movies.movie_id WHERE movie_genre.genre = '".$genre."'";
                    
                        echo "<br/>".$query."<br/>";
                        $result = mysqli_query($link, $query) or die("error here: ".mysqli_error($link));
                         echo "<br/>".mysqli_num_rows($result)."<br/>";
                        while ($row = mysqli_fetch_assoc($result))
                        {    
                            echo "<tr>";
                            echo "<td>".$row['title']."</td>";
                            echo "<td>".$row['genre']."</td>";
                            echo "<td>".$row['date']."</td>";
                            echo "<td>".$row['rating']."</td>";
                            echo "</tr>";
                        }
                    }
                    
                    
                ?>
                
            </table>
            </div>
            
        </div>
</body>
</html>