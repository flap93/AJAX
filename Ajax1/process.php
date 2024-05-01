<?php


echo "Processing..GET ";

// check for GET variable
// el punto tiene que ir pegado que es una concatenacion
if(isset($_GET['name'])) {
  echo ' Your name is  ' .$_GET['name'];
}

?>