<?php
 include 'connexion.php';
$course=$_POST['text1'];
$grade=$_POST['text2'];
$credit=$_POST['text3'];

$course2=$_POST['text11'];
$grade2=$_POST['text22'];
$credit2=$_POST['text33'];

$course3=$_POST['text111'];
$grade3=$_POST['text222'];
$credit3=$_POST['text333'];

$course4=$_POST['text1111'];
$grade4=$_POST['text2222'];
$credit4=$_POST['text3333'];


//$sql = "UPDATE semester1 SET courses='$course' and grades='$grade'  and credits='$credit' ;

$sql = "INSERT INTO semester1 (courses, grades, credits) VALUES ('$course' , '$grade', '$credit')";
$sql = "INSERT INTO semester1 (courses, grades, credits) VALUES ('$course2' , '$grade2', '$credit2')";
$sql = "INSERT INTO semester1 (courses, grades, credits) VALUES ('$course3' , '$grade3', '$credit3')";
$sql = "INSERT INTO semester1 (courses, grades, credits) VALUES ('$course4' , '$grade4', '$credit4')";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }
  
  $conn->close();
  ?>