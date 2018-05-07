<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("location:index.php");
    }
	//test the following by creating the following GET request:
	//delete.php?id=blablabla
	if (isset($_GET['id'])) {
		
		$id = $_GET['id'];
		
		//connect to DB
		include('connect.php');
        $u = $_SESSION['user_id'];
	    //$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$sql = "DELETE FROM `movie_user` WHERE `movie_user`.`movie_id` = '$id' AND `movie_user`.`user_id` = ".$u;
		$result = mysqli_query($link, $sql) or die("Error in query: ". mysqli_error($link));
						
		//check if 1 row was delete...
		if (mysqli_affected_rows($link) == 1) {
			$deleted = 1;
		}
		else {
			$deleted = 0;
		}

		//redirect user back to index.php
		header("Location: list.php?deleted=$deleted");
	}
	else {
		echo "'id' not set!";
	}

?>