<!DOCTYPE html>
<html lang="en">
    <?php

require_once('includes/connect.php');
$stmt = $connection->prepare('SELECT * FROM projects ORDER BY title ASC');
$stmt->execute();
?>

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
   
    
    <title> Bhuvnish portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Whisper&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prata&family=Whisper&display=swap" rel="stylesheet">

</head>
<body>
<h1 class="hidden">portfolio</h1>
    <div >
        <div id="sticky-nav-con">
            <header class="grid-con">
                <nav id="main-nav" class="col-span-full m-col-span-full l-col-span-full ">
                    <h2 class="hidden">Main Navigation</h2>
                    <button id="button"></button>
                    <div id="burger-con">
                        <ul id="burger-menu" class="col-span-full">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="bio.html">About</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="mywork.html">My Work</a></li>
                        </ul>
                    </div>


                   

                </nav>
                
            </header>

            
            </div>
            </div>
             <main>

          

                <section id="lo" class="grid-con ">
                    <h2 class="hidden"> video</h2>
                    <div class="logo col-span-full m-col-span-full l-col-span-full">
                        <video autoplay muted>
                     
                      <source src="videos/hero-animation.mp4" type="video/mp4">
                      
                    </video>
                    
                      <h3>Bridging the Gap Between Design and Function</h3>
                    </div>
                  </section>
            
         
  

   
    
<section id="profession" class="grid-con" >

  <h2 class="hidden" >  profession</h2>
  <div id="designer" class="l-col-start-1  l-col-end-6 m-col-start-1  m-col-end-6  col-start-1 col-end-3">
      <h3>DESIGNER</h3>
      <p>I Always try my best to turn Visions
          into Beautiful Designs
          </p>
  </div>
  <div id="developer" class="l-col-start-8  l-col-end-12 m-col-start-8  m-col-end-12 col-start-3 col-end-5">
      <h3>DEVELOPER</h3>
      <p>I love to Transform Ideas into
          Functional Code</p>
  </div>

</section>
<section id="bio" class="grid-con bio">
  <h2  class= " m-col-span-full l-col-span-full col-span-full glow " > ABOUT ME</h2>
  <div class="col-span-full ">
    <h3 class="stick col-span-full m-col-span-full l-col-span-full ">  Scroll  slow to Explore </h3>
    <canvas id="explode-view"></canvas> 
</div>

</section>

<section id="skills" class="grid-con ">
  <h3 class="l-col-span-full m-col-span-full col-span-full glow ">
      SKILLS
  </h3>

<div id="design" class="  l-col-start-1 l-col-end-6 m-col-start-1 m-col-end-6 col-start-1 col-end-3">
  <h4> Things I Enjoy Designing</h4>
  <p> UX.UI,WEB,LOGOS, <br>Product Designing</p>
  
</div>
<div  id="dev" class="l-col-start-7 l-col-end-12 m-col-start-6 m-col-end-12 col-start-3 col-end-5">
<h5>Languages I speak</h5>
<p> HTML ,CSS ,SASS </p>
</div>


</section>



<section class="grid-con" >




<?php

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

  echo  '<section  class="project-con  l-col-span-full m-col-span-full col-span-full "><h3>'.
        $row['title'].
'</h3><a href="project_detail.php?id='.
$row['id'].
'"><img class="thumbnail  l-col-span-full m-col-span-full col-span-full" src="images/'.    
        $row['image_url'].   
        '" alt="Project Thumbnail"></a><p>'.   
         
        '</p></section>';

}

$stmt = null;

?>

</section>
<section id="contact" class="grid-con">

<h2 class="l-col-span-full m-col-span-full col-span-full">
   "I'm eager to collaborate with you. Let's schedule a meeting to discuss our 
               potential partnership. I'll handle the coffee!"
</h2>



    <h3  class="l-col-span-full m-col-span-full col-span-full">

       CONTACT
    </h3>
     
    <div class="container l-col-span-full m-col-span-full col-span-full">
        <form action="mail.php" method="post">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name.." required>
    
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
    
            <label for="company">Company</label>
            <input type="text" id="company" name="company" placeholder="Company.." required>
    
            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>
    
            <input type="submit" value="Submit">
        </form>
    </div>
</section>

<footer class="grid-con">
<p class="col-span-full">Lets Connect</p>
<div class="social-links col-span-full l-col-span-full m-col-span-full">
  <a href="https://www.linkedin.com/" target="_blank" title="LinkedIn"><i class="fab fa-linkedin"></i> LinkedIn</a>
  <a href="https://www.facebook.com/" target="_blank" title="Facebook" class="facebook"><i class="fab fa-facebook"></i> Facebook</a>
</div>
</footer>

</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/ScrollTrigger.js"></script>
<!-- Include GSAP library -->
<script src="https://unpkg.com/gsap@3.9.2/dist/gsap.min.js"></script>
<script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>

<script src="js/main.js"></script>


</body>
</html>
