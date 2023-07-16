<?php
if (isset($_POST['sub'])) {
 $conn=mysqli_connect("localhost","root","");
 
  $uname=$_POST['firstname'];
  $uno=$_POST['mobileno'];
  $uemail=$_POST['uemail'];
  $ufeedback=$_POST['userfeedback'];

  $sql="INSERT INTO `feedback`.`user_detail` (`Name`, `Mobile_No`, `Email_ID`, `Feedback`)
  VALUES ('$uname', '$uno', '$uemail', '$ufeedback');";

  if (mysqli_query($conn, $sql)) {
  echo "Thanks for feedback";
  } else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }
   mysqli_close($conn);
}
?>