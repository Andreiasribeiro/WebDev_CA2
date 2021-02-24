<?php

// Credentials
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'employees';

// Create a database connection
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$requestData= $_REQUEST;

$columns = array(
  array( '0' => 'emp_no' ),
  array( '1' => 'dept_no' ),
  array( '2' => 'from_date' ),
  array( '3' => 'to_date' )
 
);

$result_user = "SELECT emp_no, dept_no, from_date, to_date FROM employess";
$resultfrom_user = mysqli_query($connection, $result_user);
$qnt_line = mysqli_num_rows($resultfrom_user);

$result_users = "SELECT emp_no, dept_no, from_date, to_date FROM employess WHERE 1=1";

$resultfrom_users = mysqli_query($connection, $result_users);
$totalfiltered = mysqli_num_rows($resultfrom_users);

$result_users.= "ORDER BY". $columns[$requestData['order'][0]['column']]." ". $requestData['order'][0]['dir']."LIMIT". $requestData['length']." ";
$resultfrom_users= mysqli_query($connection, $result_users);

$data = array();

while ($row_users = mysqli_fetch_array($resultfrom_users)) {
  $datauser = array();
  $data[]= $row_users ["emp_no"];
  $data[]= $row_users ["dept_no"];
  $data[]= $row_users ["from_date"];
  $data[]= $row_users ["to_date"];

  $datauser[]= $data;
}

$json_data = array(
  "draw"=> intval ($requestData['draw']), 
  "recordsTotal": intval ($qnt_line),
  "recordsFiltered": intval ($totalfiltered),
  "data"=> $datauser

);
echo json_encode($json_data);


?>
