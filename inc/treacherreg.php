<?php


include("constant.php");



$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['mobile'];
$qualification=$_POST['qualification'];
$password=$_POST['password'];

$sql = "INSERT INTO teacher (name,number,password,email,qualification)
VALUES ('$name','$number','$password','$email','$qualification')";

if ($conn->query($sql) === TRUE) {
    echo "Tutor Added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>








