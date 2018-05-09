<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3 mb-4">
    <div class="container">
        <a class="navbar-brand" href="#"><i class="fa fa-ravelry text-danger" aria-hidden="true"></i></a>
        <img src="images\Nav_Icon.png" width="50" height="50" alt="">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="list.php">List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="movieSearch.php">Search</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="advancedSearch.php">Filtered Search</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Change theme</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" onclick="dark()">Dark</a>
                      <a class="dropdown-item" onclick="light()">Light</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact us</a>
                </li>
            </ul>
            <span class="navbar-text">
                <?php
                    echo "<h5>You are  logged in as: ".$_SESSION['username']."</h5>";
                ?>
                <a href='logout.php'>Log out</a>
            </span>
                     
                      
                    
            </div>
        </div>
</nav>