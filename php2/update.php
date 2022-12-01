<?php
include 'connexion.php';
$name=$_POST['fname'];
$age=$_POST['fage'];



$sql = "UPDATE semester1 SET age='$age' WHERE name='$name'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }
  
  $conn->close();
  ?>