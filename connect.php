<?php
$Email = $_POST['Email'];
$Password = $_POST['Password'];

$conn = new mysqli('localhost', 'root', '' ,'test');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into login(Email, Password)
    values (?,?)");
    $stmt->bind_param("ss", $Email, $Password);
    $stmt->execute();
    echo "registration successfully";
    $stmt->close();
    $conn->close();
}
?>