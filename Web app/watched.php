<?php
    session_start();
    if(isset($_POST['submit_btn']))
    {
        $title = $_POST['title'];
        $date = $_POST['date'];
        $rating = $_POST['rating'];
        $url = $_POST['image'];
        $genre = $_POST['genre'];
        $id = $_POST['movie_id'];
        echo "Title: ".$title."<br/>";
        echo "Date released: ".$date."<br/>";
        echo "rating: ".$rating."<br/>";
        
        include('connect.php');
        $query = "INSERT INTO movies (movie_id, title, date, rating, image) VALUES ('$title', '$date', '$rating', '$url')";
        mysqli_query($link, $query) or die("Error in query: ". mysqli_error($link));
        $findme = ', ';
        
        function mb_stripos_all($haystack, $needle) 
        {
            $s = 0;
            $i = 0;
            while(is_integer($i)) 
            {
                $i = mb_stripos($haystack, $needle, $s);
                if(is_integer($i)) 
                {
                    $aStrPos[] = $i;
                    $s = $i + mb_strlen($needle);
                }
            }
            if(isset($aStrPos)) 
            {
                return $aStrPos;
            }  
            else 
            {
            return false;
          }
        }
        echo "<br/>";
        echo "<br/>";
        $num = mb_stripos_all($genre, $findme);
        echo "dgdg: ".strpos($genre, ', ');
        for ($x = 0; $x < sizeof($num)+1; $x++) 
        {
            echo "<br/>";
            echo "x is ".$x;
            echo "<br/>";
            if($x != sizeof($num))
            {
                $v =  $num[$x] - strlen($genre);
            }
            
            if($x == 0)
            {
                echo "ddfhbfh";
                $g = substr($genre, 0, $v);    
            }
            else
            {
                if($x == sizeof($num))
                {
                    
                    $g = substr($genre, $num[$x-1]+1);    
                }
                else
                {
                    echo "ddfhbfh";
                    $g = substr($genre, $num[$x-1]+1, $v);
                }
                
            }
            echo "G is: ".$g;
            //INSERT INTO `genre` (`genre_Id`, `genre`) VALUES (NULL, 'Action');
            $query = "INSERT INTO `genre` (`genre_Id`, `genre`) VALUES (NULL, '$g')";
            mysqli_query($link, $query) or die("Error in query: ". mysqli_error($link));
            
            $sql = "INSERT INTO `movie-genre` (`movie_id`, `genre_id`) VALUES (NULL, '$g')";
            mysqli_query($link, $sql) or die("Error in query: ". mysqli_error($link));
            
        } 
        
        
        /*
        $added = true;
        mysqli_query($link, $query) or die("Error in query: ". mysqli_error($link));
        if(mysqli_affected_rows($link) != 1)
        {
            $added = false;
        }
        
        $sql = "SELECT movie_id FROM movies WHERE title = '$title' AND date = '$date'";
        $result = mysqli_query($link, $sql) or die("Error in query: ". mysqli_error($link));
        $row = mysqli_fetch_assoc($result);
        
        $u = $_SESSION['user_id'];
        echo "INSERT INTO `movie-user` (`movie_id`, `user_id`, `rating`, `comments`, `watched`, `favourite`, `plan_to_watch`) VALUES ('38', '1', NULL, NULL, NULL, NULL, NULL);";
        $query = "INSERT INTO `movie-user` (`movie_id`, `user_id`, `rating`, `comments`, `watched`, `favourite`, `plan_to_watch`) VALUES ('$row[movie_id]', '$u', NULL, NULL, 'True', NULL, NULL);";
        echo "<br/>".$query."<br/>";
        mysqli_query($link, $query) or die("Error in query2: ". mysqli_error($link));
        if(mysqli_affected_rows($link) != 1)
        {
            $added = false;
        }
        if($added == true)
        {
            header("location:movieSearch.php?added=1");
        }
        */
    }
    else
    {
        echo "You shouldn`t be here";
    }
?>