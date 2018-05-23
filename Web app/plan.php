<?php
    session_start();
    if(isset($_POST['submit_btn']))
    {
        $id = $_POST['movie_id'];
        $title = $_POST['title'];
        $date = $_POST['date'];
        $rating = $_POST['rating'];
        $url = $_POST['image'];
        $genre = $_POST['genre'];
        echo "Title: ".$title."<br/>";
        echo "Date released: ".$date."<br/>";
        echo "rating: ".$rating."<br/>";
        echo "ID: ".$id."<br/>";
        
        include('connect.php');
        $query = "INSERT INTO movies (movie_id, title, date, rating, image) VALUES ('$id', '$title', '$date', '$rating', '$url')";
        mysqli_query($link, $query);
        
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
            $gen = ltrim($g);
            $query = "INSERT INTO `genre` (`genre`) VALUES ('$gen')";
            mysqli_query($link, $query);

            
            $sql = "INSERT INTO `movie_genre` (`movie_id`, `genre`) VALUES ('$id', '$gen')";
            mysqli_query($link, $sql);

            
        } 
        
        
        
        $added = true;
        //mysqli_query($link, $query) or die("Error in query: ". mysqli_error($link));
        if(mysqli_affected_rows($link) != 1)
        {
            //$added = false;
        }
        
          
        $u = $_SESSION['user_id'];
        //UPDATE `movie_user` SET `favourite` = 'True' WHERE `movie_user`.`movie_id` = 'tt2560140' AND `movie_user`.`user_id` = 1;
        $sql = "UPDATE movie_user SET plan_to_watch = 'True' WHERE `movie_user`.`movie_id` = '$id' AND `movie_user`.`user_id` = ".$u;
        $query = "INSERT INTO `movie_user` (`movie_id`, `user_id`, `rating`, `comments`, `watched`, `favourite`, `plan_to_watch`) VALUES ('$id', '$u', NULL, NULL, NULL, NULL, 'True');";
        mysqli_query($link, $query) or mysqli_query($link, $sql) or $added = false;
        
        if($added == true)
        {
            header("location:movieSearch.php?added=1");
        }
        else
        {
            header("location:movieSearch.php?added=0");
        }
        
    }
    else
    {
        echo "You shouldn`t be here";
    }
?>