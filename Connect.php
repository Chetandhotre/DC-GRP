<?php
$firstName = $_POST['UserName'];
$password = $_POST['password'];

// Database connection
$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
echo "$conn->connect_error";
die("Connection Failed : ". $conn->connect_error);
} else {
$stmt = $conn->prepare("insert into registration(UserName,password) values(?, ?)");
$stmt->bind_param("sssssi", $UserName, $password);
$execval = $stmt->execute();
echo $execval;
echo "Registration successfully...";
$stmt->close();
$conn->close();
}
