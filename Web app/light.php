<?php
    session_start();
    echo $_SESSION['bgi']; 
    $_SESSION['bgi'] = "https://www.walldevil.com/wallpapers/a66/nice-wallpapers-color-imagepages-images-wallpaper.jpg";                   //header("location: http://localhost/Web%20app/movieSearch.php");
    header("location: home.php?theme=0");
?>