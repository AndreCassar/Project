<?php
    session_start();
    //check if user is already logged in
    if(isset($_SESSION['username']))
    {
        //user is already logged in, so no need to process form!
        header("location:home.php");
    }
    else
    {
        if(isset($_POST['submit']))
        {
            $username = $_POST['user'];
            $password = $_POST['pass'];
            
            if(empty($username) || empty($password))
            {
                header("location:index.php?login=-1");
            }
            else{
                //connect to DB
                include('connect.php');
                $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
                
                $result = mysqli_query($link, $sql) or die(mysqli_error($link));
                $row = mysqli_fetch_assoc($result);
                
                if(mysqli_num_rows($result) == 1)
                {
                    //log user in!
                    $_SESSION['username'] = $username;
                    $_SESSION['user_id'] = $row[user_id];
                    $_SESSION['bgi'] = "http://mattvizzo.com/wp-content/uploads/2013/08/dark-website-backgrounds-10.jpg";
                    header("location:home.php?login=1");
                }
                else
                {
                    header("location:index.php?login=0");
                }
            }
        }
    }
?>