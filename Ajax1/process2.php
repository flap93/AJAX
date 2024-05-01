<?php
//Connect to a database
$conn = mysqli_connect('localhost', 'root','', 'ajaxtest');


echo "Processing..POST ";
// this code take the value of the input field and add it to the DB
// check for POST variable
// el punto tiene que ir pegado que es una concatenacion
if(isset($_POST['name'])) {
  $name = mysqli_real_escape_string($conn, $_POST['name']);

  echo 'Your name is  ' .$_POST['name'];

  $query = "INSERT INTO users(name) VALUES('$name')";

  if(mysqli_query($conn, $query)) {
    echo 'User added';
  } else {
    echo 'ERROR' .mysqli_error($conn);
  }
}

?>