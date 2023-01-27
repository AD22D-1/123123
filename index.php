<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/css_reset.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet">
        
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cantarell&family=Kanit:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
    
    <body>
       <?php include_once('header.php'); ?>
            <section id="main">
                    <div class="block heroimage">
                    <!-- mqimg6: set up hero image for quick flex in column direction for newly created 
                    tagline and button -->
                    <!-- <div>
                    <h1></h1>
                    </div> -->
                    <div>
                    <!-- <input class="button" type="button" value="Watch Now"> -->
                    <button class="button "><a href="movie.php">Watch Now</a></button>
                    </div>
                    <!-- set up hero image for quick flex in column direction for newly created tagline 
                    and button -->
                   </div>
                   
                   <div class ="block video">
                    <h1>Top Video of the Day</h1>
                        <video controls>
                          <source src="images/Top Video.mp4" type="video/mp4">
                        </video>
                   </div>
                   
                   <div id="flex-container">
                   <?php
    if (!isset($_SESSION["userid"]) )
    {
       ?> 
                    <article class="feat1">
                        <img src="images/thumbnail1.jpg" alt="thumbnail">
                        <h2>Long Long Time Ago 3: The Diam Diam Era</h2>
    <div class="fadetrigger" class="bar">Click here for more details</div>
    <div class="fadeinout" class="content">
        
        <p>
        In the '70s and '80s, the second generation of the Lim family reckons with a generational gap amid social change and education reforms in Singapore.

        Directed By: Jack Neo

        Produced By: MM2 Entertainment

        Cast: Mark Lee,Richie Koh,Meixin Macy
        </p>
    </div> 
                    </article>
                        
                    
                    <article class="feat2">
                    <img src="images/thumbnail1.jpg" alt="thumbnail">
                       <h2> Sonic the Hedgehog</h2>
                       <div class="fadetrigger2" class="bar">Click here for more details</div>
    <div class="fadeinout2" class="content">
        
        <p>
        A small-town sheriff helps an alien hedgehog with supersonic speed outrun a mad doctor who wants the creature's special powers to dominate the world.

        Directed By: Jeff Fowler

        produced By: Toby Ascher 

        Cast: James Marsden,Jim Carrey,Ben Schwartz
        </p>
    </div> 
                    </article>
                    
                    <article class="feat3" >
                    <img src="images/thumbnail1.jpg" alt="thumbnail">
                    <h2> The Speed Cubers</h2>
                    <div class="fadetrigger3" class="bar">Click here for more details</div>
    <div class="fadeinout3" class="content">
        
        <p>
        This documentary captures the extraordinary twists and turns in the journeys of Rubik's Cube-solving champions Max Park and Feliks Zemdegs.

        Directed By: Sue Kim

        Produced By:Chris Romano,Evan Krauss

        Cast: Feliks Zemdegs
        </p>
    </div> 
                    
                    </article>

                   <article class="feat4">
                   <img src="images/thumbnail1.jpg" alt="thumbnail">
                   <h2>The Mermaid</h2>
                   <div class="fadetrigger4" class="bar">Click here for more details</div>
    <div class="fadeinout4" class="content">
        
        <p>
        When egocentric tycoon Xuan's plans for a pristine ocean reserve threaten the merpeople living there, comely mermaid Shan is sent to ice him.

        Produced By:  John Musker

        Directed By: Stephen Chow

        Cast: Deng Chao
        </p>
    </div> 
                  
                   
                    </article>
                    
                    <article class="feat5">
                    <img src="images/thumbnail1.jpg" alt="thumbnail">
                    <h2>The Last Dance</h2>
                    <div class="fadetrigger5" class="bar">Click here for more details</div>
    <div class="fadeinout5" class="content">
        
        <p>
        This docuseries chronicles the rise of superstar Michael Jordan and the 1990s Chicago Bulls, with unaired footage from an unforgettable 1997-98 season.

        Directed By: Jason Hehir
        </p>
    </div> 
                    </article>
                    
                    <article class="feat6">
                    <img src="images/thumbnail1.jpg" alt="thumbnail">
                    <h2>Transformers</h2>
                    <div class="fadetrigger6" class="bar">Click here for more details</div>
    <div class="fadeinout6" class="content">
        
        <p>
        As the Autobots and the Decepticons struggle for control of Earth's resources, young Sam Witwicky is unaware he is mankind's only hope for survival.

        produced By: Lorenzo di Bonaventura
        
        Directed By: Steven Caple Jr.
        
        Cast: Shia LaBeouf


        </p>
    </div> 
                    </article>
                    
    <?php
    }

         
         else if (isset($_SESSION["userid"]) ){
            ?>
                    <article class="feat1">
                       <video controls>
                            <source src="images/video1.mp4" type="video/mp4">
                            
                        </video> 
                       <h2>Long Long Time Ago 3: The Diam Diam Era</h2>
                        <div class="fadetrigger" class="bar">Click here for more details</div>
    <div class="fadeinout" class="content">
        
        <p>
        In the '70s and '80s, the second generation of the Lim family reckons with a generational gap amid social change and education reforms in Singapore.

        Directed By: Jack Neo

        Produced By: MM2 Entertainment

        Cast: Mark Lee,Richie Koh,Meixin Macy
        </p>
    </div> 
                    </article>
                    
                    <article class="feat2">
                    <video controls>
                              <source src="images/video1.mp4" type="video/mp4">
                              
                        </video> 
                        <h2>Sonic the Hedgehog</h2> 
                        <div class="fadetrigger2" class="bar">Click here for more details</div>
    <div class="fadeinout2" class="content">
        
        <p>
        A small-town sheriff helps an alien hedgehog with supersonic speed outrun a mad doctor who wants the creature's special powers to dominate the world.

        Directed By: Jeff Fowler

        produced By: Toby Ascher 

        Cast: James Marsden,Jim Carrey,Ben Schwartz
        </p>
    </div> 
                    </article>
                    
                    <article class="feat3">
                   
                       <video controls>
                            <source src="images/video1.mp4" type="video/mp4">
                            
                        </video> 
                        <h2> The Speed Cubers</h2>
                        <div class="fadetrigger3" class="bar">Click here for more details</div>
    <div class="fadeinout3" class="content">
        
        <p>
        This documentary captures the extraordinary twists and turns in the journeys of Rubik's Cube-solving champions Max Park and Feliks Zemdegs.

        Directed By: Sue Kim

        Produced By:Chris Romano,Evan Krauss

        Cast: Feliks Zemdegs
        </p>
    </div> 
         </article>  

                   <article class="feat4">
                  <video controls>
                              <source src="images/video1.mp4" type="video/mp4">
                            
                        </video> 
                        <h2>The Mermaid</h2>
                        <div class="fadetrigger4" class="bar">Click here for more details</div>
    <div class="fadeinout4" class="content">
        
        <p>
        When egocentric tycoon Xuan's plans for a pristine ocean reserve threaten the merpeople living there, comely mermaid Shan is sent to ice him.

        Produced By:  John Musker

        Directed By: Stephen Chow

        Cast: Deng Chao
        </p>
    </div> 
                    </article>
                    
                    <article class="feat5">
                    <video  controls>
                              <source src="images/video1.mp4" type="video/mp4">
                              
                        </video> 
                        <h2>The Last Dance</h2>
                        <div class="fadetrigger5" class="bar">Click here for more details</div>
    <div class="fadeinout5" class="content">
        
        <p>
        This docuseries chronicles the rise of superstar Michael Jordan and the 1990s Chicago Bulls, with unaired footage from an unforgettable 1997-98 season.

        Directed By: Jason Hehir
        </p>
    </div> 
                    </article>
                    
                    <article class="feat6">
                     <video  controls>
                            <source src="images/video1.mp4" type="video/mp4">
                          
                        </video> 
                        <h2>Transformers</h2>
                        <div class="fadetrigger6" class="bar">Click here for more details</div>
    <div class="fadeinout6" class="content">
        
        <p>
        As the Autobots and the Decepticons struggle for control of Earth's resources, young Sam Witwicky is unaware he is mankind's only hope for survival.

        produced By: Lorenzo di Bonaventura
        
        Directed By: Steven Caple Jr.
        
        Cast: Shia LaBeouf


        </p>
    </div> 
                    </article>
         </div>
                    <?php
                }     
                    ?>
               

            </section>
        <?php include_once('footer.php');?>
        <script src="js/jquery.js"></script>
        <script src="js/index.js"></script>
    </body>
    
</html>
