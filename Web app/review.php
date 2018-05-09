<?php
    session_start();
    if(isset($_POST['submit_btn']))
    {
        $id = $_POST['rowID'];
        $com = $_POST['comment'];
        $rat = $_POST['rat'];
        echo "ID is: ".$id;
        echo "comment is: ".$com;
        echo "Rating is: ".$rat;
        
        include('connect.php');
        $u = $_SESSION['user_id'];
        $query = "UPDATE `movie_user` SET `rating` = '.$rat.', `comments` = '$com'  WHERE `movie_user`.`movie_id` = '$id' AND `movie_user`.`user_id` = ".$u;
        echo $query;
        mysqli_query($link, $query);
        
        header("location:list.php");
    }
    
?>