<?php
//Connect to a database
$conn = mysqli_connect('localhost', 'root','', 'ajaxtest');

// select all the users from the DB
$query = 'SELECT * FROM users';

// get the result from the query
$result = mysqli_query($conn, $query);  //run the query against the   db



// fetch data
//  get the data from result variable and  return it as an associative array
$users = mysqli_fetch_all($result,  MYSQLI_ASSOC);

// convert the users variable into  json format string
echo json_encode($users);
?>