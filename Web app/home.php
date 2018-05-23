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
            <h3>Top 10 highest ranked movies from our database!</h3>
              <div class="table-responsive-sm">
            
            <table class="table table-dark">
                <tr>
                    <th><font color="#669960">Rank</font></th>
                    <th><font color="#669960">Preview Image</font></th>
                    <th><font color="#669960">Title</font></th>
                    <th><font color="#669960">Avg. Rating</font></th>
                </tr>
                <?php
                    include('connect.php');
                    $u = $_SESSION['user_id'];
                    //$query = "SELECT * FROM `movie-user` WHERE user_id = ".$u;
                    $query = "SELECT * FROM `movies` ORDER BY `rating` DESC";
                    
                    //echo $query;
                    $result = mysqli_query($link, $query) or die("error here: ".mysqli_error($link));
                    $rank = 1;
                    while ($row = mysqli_fetch_assoc($result))
                    {    
						echo "<tr>";
                        echo "<td><h4>".$rank."</h4></td>";
                        echo "<td><img id='url' src=".$row['image']." alt='No preview available' height='80' width='70'></td>";
				        echo "<td>".$row['title']."</td>";
						echo "<td>".$row['rating']."</td>";
						echo "</tr>";
                        $rank++;
                        if($rank > 10)
                        {
                            break;
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
