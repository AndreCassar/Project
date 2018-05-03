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
        <?php
            include('nav.php');
        ?>

        <div id="info" class="container">
           <div class="table-responsive-sm">

            <table class="table table-bordered table-dark">
                <tr>
                    <th><font color="#669960">Title</font></th>
                    <th><font color="#669960">Genre</font></th>
                    <th><font color="#669960">Release Date</font></th>
                    <th><font color="#669960">Rating</font></th>
                    <th><font color="#669960">Preview Image</font></th>
                    <th><font color="#669960">Comments</font></th>

                </tr>
                <?php
                    include('connect.php');
                    $u = $_SESSION['user_id'];
                //SELECT * FROM `movie-user` WHERE user_id = 1
                    $query = "SELECT * FROM `movie-user` WHERE user_id = ".$u;
                    $result = mysqli_query($link, $query) or die(mysqli_error($link));
                    while ($row = mysqli_fetch_assoc($result)) 
                    {
                        
                
                        
                        $query = "SELECT * FROM movies WHERE movie_id = '".$row['movie_id']."'";
                        $res = mysqli_query($link, $query) or die(mysqli_error($link));
                        $r = mysqli_fetch_assoc($res);        
                        
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
                        $q = "SELECT * FROM movie-genre WHERE movie_id = '".$row['movie_id']."'";
                        $re = mysqli_query($link, $q) or die(mysqli_error($link));
                        $g = mysqli_fetch_assoc($re);
                        
						echo "<tr class='$col'>";
				        echo "<td>".$r['title']."</td>";
						echo "<td></td>";
						echo "<td>".$r['date']."</td>";
						echo "<td>";
                        ?>
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
                        <?php
                        //echo "</td>";
                        //echo "<td><img src=\"".$r['image']."\" alt='No preview available' height='240' width='180'></td>";
						//echo "</tr>";
					}
                ?>
                
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
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>
