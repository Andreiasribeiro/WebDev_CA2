<!DOCTYPE html>
<html lang="en">
  <!--nav style learned from https://www.youtube.com/watch?v=PwWHL3RyQgk-->
  
  
<head>

  <script>
    function myfuntion() {
if (document.getElementById("mytable").style.display==="none") {

  document.getElementById("mytable").style.display="block";
}
else {

  document.getElementById("mytable").style.display="none";
}

    }
  </script>
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
        <li class="nav__links"><a href="login.php">Login</a></li>
        <a class="logout" href="logout.php">logout</a>
        </ul>
    </nav>
</header>
<div class="container">
        <body class="bg1">
        <div class="row">
        <div class="col-12"></div>
        </div>
        <div class="textprincipal"> 
        <h1>Hi, I'm Andreia</h1>
        <h3>Tips to backup/recovery close to 100%</h3>
        <p>Always test your code.</p><p> Have a plan in case the things go wrong.</p>
        <p>Do not have your data hosted in a single data center.</p>
        <p> Ensure that you have adequate backups of your data and that you have access to these backups in the event of an interruption</p>
        <p> have a recovery plan or Runbook in place that your on-call team can follow in case a problem is detected.</p>
        <h3>Login to see more</h3>
        <a href="login.php">
        <button type="button" class="btn btn-secondary btn-lg">Login</button>
        </a>
        <p>Student number 2020402 - Andreia Ribeiro</p>
        </div>
       
<!-- jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>