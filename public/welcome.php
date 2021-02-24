<?php
   include('../private/session.php');
?>
<!DOCTYPE html>
<html lang="en">
    <!--nav style learned from https://www.youtube.com/watch?v=PwWHL3RyQgk-->
  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Andreia Portifolio</title>

    <link rel="stylesheet" href="mystyle.css"/>

</head>
<header class="menu">
    <nav>
    <ul>
    <li class="nav__links"><a href="index.php">Home</a></li>
    <li class="nav__links"><a href="welcome.php">Welcome</a></li>
    <li class="nav__links"><a href="resume.php">Resume</a></li>
    <li class="nav__links"><a href="table.php">Tables</a></li>
    <li class="nav__links"><a href="freestyle.php">Freestyle</a></li>
    <a class="logout" href="logout.php">logout</a>
    </ul>
    </nav>
</header>
<div class="container">
    <body class="bg6">
    <!--The class Layoutgrid and Layoutgrid2 has been sourced from youtube course:CCS Grid Layout Crash Course https://www.youtube.com/watch?v=jV8B24rSN5o/-->
    <div class="layoutgrid">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div> 
    <div class="textprincipal">
    <div>
              
<h3>Welcome to my web site</h3>
<p>​ I am a designer and web developer.<br><br>
  Here you can see my portifolio and know more about me.<br><br>
  I design and code beautifully simple things. <br><br>
  If you like get in touch.</p>
</div>
</div>
            
</div>
</div>
    
<!-- jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>


