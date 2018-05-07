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
                background-image: url(http://mattvizzo.com/wp-content/uploads/2013/08/dark-website-backgrounds-10.jpg);
            }
            #info
            {
                color: #696d69;
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
            include('nav.php');
        ?>
        
        <div id="info" class="container">
           <div class="table-responsive-sm">

            <table class="table table-dark">
                <tr>
                    <th><font color="#669960">Title</font></th>
                    <th><font color="#669960">Genre</font></th>
                    <th><font color="#669960">Release Date</font></th>
                    <th><font color="#669960">Rating</font></th>
                    <th><font color="#669960">Comments</font></th>
                    <th><font color="#669960">Submit</font></th>
                    <th><font color="#669960">Remove from list</font></th>
                </tr>
                <?php
                include('connect.php');
                    $u = $_SESSION['user_id'];
                    //$query = "SELECT * FROM `movie-user` WHERE user_id = ".$u;
                    $query = "SELECT movie_user.movie_id, movie_user.rating, movie_user.comments, movie_user.plan_to_watch, movie_user.favourite, movie_user.watched, movies.title, movies.date FROM `movie_user` inner join movies on movie_user.movie_id = movies.movie_id WHERE movie_user.user_id = ".$u;
                    //echo $query;
                    $result = mysqli_query($link, $query) or die("error here: ".mysqli_error($link));
                    while ($row = mysqli_fetch_assoc($result)) 
                    {
                        //$query = "SELECT * FROM movies WHERE movie_id = '".$row['movie_id']."'";
                        //$res = mysqli_query($link, $query) or die(mysqli_error($link));
                        //$r = mysqli_fetch_assoc($res);
                        //SELECT genre FROM `movie_genre` WHERE movie_id = 'tt2560140'
                        $sql = "SELECT genre FROM `movie_genre` WHERE movie_id = '".$row['movie_id']."'";
                        //echo $sql;
                        $re = mysqli_query($link, $sql) or die("error here: ".mysqli_error($link));
                        $genre = "";
                        while ($r = mysqli_fetch_assoc($re))
                        {
                            $genre .= $r['genre']." ";
                            //echo $genre;
                        }
                        
                        if($row['plan_to_watch'] == 'True')
                        {
                            $col = 'bg-primary';
                        }
                        else if($row['favourite'] == 'True')
                        {
                            $col = 'bg-danger';
                        }
                        else
                        {
                            $col = 'bg-success';
                        }
                        //$q = "SELECT * FROM movie-genre WHERE movie_id = '".$row['movie_id']."'";
                        //$re = mysqli_query($link, $q) or die(mysqli_error($link));
                        //$g = mysqli_fetch_assoc($re);
                        
						echo "<tr class='$col'>";
				        echo "<td>".$row['title']."</td>";
                        echo "<td>".$genre."</td>";
						echo "<td>".$row['date']."</td>";
						
						echo "<td>";
                        ?>
                        <form action="review.php" method="post">
                            <div class="form-group">
                                <select>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                        
                        <?php
                        echo "</td>";
                        echo "<td>";
                        echo "<div class='form-group'>";
                        echo "<input type='text' class='form-control' id='formGroupExampleInput' placeholder='Enter comment'>";
                        echo "</div>";
                        echo "</td>";
                        echo "<td><a class=\"btn btn-secondary\" href=\"review.php?id=".$row['movie_id']."\">Submit</a></td>";
                        echo "</form>";
                        echo "<td><a class=\"btn btn-danger\" href=\"delete.php?id=".$row['movie_id']."\">Remove</a></td>";
                        
                        //echo "<td><img src=\"".$r['image']."\" alt='No preview available' height='240' width='180'></td>";
						echo "</tr>";
					}
                ?>
                
            </table>
            </div>
            
        </div>

        <script
          src="http://code.jquery.com/jquery-3.2.1.min.js"
          integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
          crossorigin="anonymous"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>
