<!DOCTYPE html>
<?php
require_once('includes/connect.php');
$query = 'SELECT GROUP_CONCAT(image_filename) AS images, description,execution,objective,conclusion ,title FROM projects, media WHERE projects.id = project_id AND projects.id = :projectId';


$stmt = $connection->prepare($query);
$projectId = $_GET['id'];
$stmt->bindParam(':projectId', $projectId, PDO::PARAM_INT);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$images = explode(",", $row['images']);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row['title']; ?></title>
    <link rel="stylesheet" href="css/main.css" type="text/css">
 

    
    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/grid.css" rel="stylesheet">
  
    
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

                  <section  id="casestudy" class="grid-con  ">

<h2 class="l-col-span-full m-col-span-full col-span-full"><?php echo $row['title']; ?></h2>
<section class="scroll-container l-col-span-full m-col-span-full col-span-full">
<?php 
for($i =0; $i < count($images); $i++) {

echo '<img class="portfolio-image scroll-container l-col-span-full m-col-span-full col-span-full" src="images/'.$images[$i].'" alt="Project Image">';

}
?>

</section>

<h3> OBJECTIVE</h3>
<P class="l-col-span-full m-col-span-full col-span-full"><?php echo $row['objective']; ?></p>

<h3> EXECUTION</h3>
<P class="l-col-span-full m-col-span-full col-span-full"><?php echo $row['execution']; ?></p>
<h3> CONCLUSION</h3>
<P class="l-col-span-full m-col-span-full col-span-full"><?php echo $row['conclusion']; ?></p>



</section>

</body>
</html>
