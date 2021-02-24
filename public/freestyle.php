<?php
   include('../private/session.php');
   include('../private/db_connection_emp.php');
?>
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
        <a class="logout" href="logout.php">logout</a>
        </ul>
    </nav>
</header>
<div class="container">
    <body class="bg3">
      
        <div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        </div>
        <div></div>
        <div> 
        <br>
        <br>
        <br>
        <br>

  <h4>EMPLOYEE INFORMATION:</h4>
 
        <br>
        <br>
        <div id="mytable">

<?php

$sql = "SELECT dept_no, dept_name FROM employees ORDER BY dept_no";
$result = mysqli_query($connection_emp, $sql);
$rowcount=mysqli_num_rows($result);

if ($rowcount > 0) {
    
  echo "table class ='employee'>
  <tr><th>Department Number</tr><th>Department Name</th></tr>";

 
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo "<tr><td>" . $row["dept_no"] . "</td><td>" . $row["dept_name"] . "</tr></td>";
 
    }

    echo "</table>";

} else {
    echo "0 results";
}

// close connection
$connection->close();
?>
    </div>
      <br>
      <h4>EMPLOYEE INFORMATION:</h4>
      <!--The code for form submit learned in https://www.youtube.com/watch?v=Hv0AiWFAiRg-->
      <div>
      <form>
      <input type="text" name="" placeholder="type...">
      <!--button style from bootstrap-->
      <button class="btn btn-secondary">Submit</button>
      </form>
      </div>
      <br>
      <table class="table2">
        <thead>
          <tr>     
          <th>Employee No.</th>
          <th>Department No.</th>
          <th>From</th>
          <th>To</th>
          </tr>
          </thead>
          <tbody>
          <tr> 
          <td>101</td>
          <td>XYZ</td>
          <td>01/02/2018</td>
          <td>02/02/2019</td>
          </tr>
          <tr>
          <td>102</td>
          <td>ABC</td>
          <td>01/03/2018</td>
          <td>02/02/2019</td>
          </tr>
          <tr>
          <td>103</td>
          <td>DEF</td>
          <td>01/04/2018</td>
          <td>02/02/2019</td>
          </tr>
          <tr>
          <td>104</td>
          <td>LMN</td>
          <td>01/05/2018</td>
          <td>02/02/2019</td>
          </tr>
          </tbody>
      </table>
           
        </div>
      
<!-- jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>