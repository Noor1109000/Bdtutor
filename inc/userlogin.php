<?php 

include("constant.php");




$email=$_POST['email'];

$password=$_POST['password'];


$sql = "SELECT id   FROM user where email='$email' AND password='$password' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       header("Location: http://localhost/bazar/product_price.php");
    }
} else {
    echo "Email & Password don't Match . Please Try Again ";
}

$conn->close();
?>








