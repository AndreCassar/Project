<?php
    session_start();
    //$ui = $_SESSION['bgi']; 
    $_SESSION['bgi'] = "http://mattvizzo.com/wp-content/uploads/2013/08/dark-website-backgrounds-10.jpg";                    //header("location: http://localhost/Web%20app/movieSearch.php");
    header("location:home.php?theme=1");
?>