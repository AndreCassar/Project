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
            #info
            {
                color: #696d69;
            }

        </style>

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

                                echo "<select class='form-control' name='genre'>";
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
            <?php
                
                if(isset($_POST['filters']))
                {
                    echo'<tr>
                                <th><font color="#669960">Title</font></th>
                                <th><font color="#669960">Genre</font></th>
                                <th><font color="#669960">Release Date</font></th>
                                <th><font color="#669960">Rating</font></th>
                            </tr>';
                
                    $title = $_POST['title'];
                    $genre = $_POST['genre'];
                    if($title == "")
                    {
                        $query = "SELECT movie_genre.movie_id, movie_genre.genre, movies.title, movies.date, movies.rating FROM `movie_genre` inner join movies on movie_genre.movie_id = movies.movie_id WHERE movie_genre.genre = '".$genre."'";
                    
                        $result = mysqli_query($link, $query) or die("error here: ".mysqli_error($link));
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
                    else
                    {  //WHERE column1 LIKE '%word1%' 
                        $query = "SELECT movie_genre.movie_id, movie_genre.genre, movies.title, movies.date, movies.rating FROM `movie_genre` inner join movies on movie_genre.movie_id = movies.movie_id WHERE movies.title LIKE '%$title%' AND movie_genre.genre = '".$genre."'";
                    
                        $result = mysqli_query($link, $query) or die("error here: ".mysqli_error($link));
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
                }
                    
                    
                ?>
                
            </table>
            </div>
            
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>