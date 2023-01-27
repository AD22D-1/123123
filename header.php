<header>
        <!-- <img id="logo" src="images/makandologo.png" alt="Logo"> -->
       <a href="index.php#home" title="home"> <img id="logo" src="images/logo.png" alt="Logo"></a>
             <nav>
                 <label for="hamburger">&#9776;</label>
                 <input type="checkbox" id="hamburger"/>
                 <ul id="menu">
                     <li><a href="index.php">Home</a></li>
                     <li><a href="movie.php">Movie</a></li>
                     <li><a href="favourite.php">Favourite</a></li>  
                   <li><a href="otherlist.php">Other Playlist</a></li>
                <?php
            
                session_start();

                if (!isset($_SESSION["userid"]))
                {
                    echo '<li><a href="login.php">Login</a></li>';
                }
                else
                {
                    echo '<li><a href="logout.php">Logout</a></li>';
                }
                ?>
                    <li><a href="updateUser.php">Profile</a></li>
                    
                    <li><a href="contact.php">Contact</a></li>
            
                 </ul>
              
             </nav>
    
             <hr>
     </header>