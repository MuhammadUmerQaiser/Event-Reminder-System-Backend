<?php
include('connection.php');
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$password = $_POST['password'];

$response = array();
$query = "INSERT INTO `user`(`name`, `email`, `contact`, `password`) VALUES ('".$name."','".$email."','".$contact."','".$password."')";
$result = mysqli_query($con, $query);
if($result){
    $response['message'] = "User Registered Successfully";
    $response['error'] = false;
}else{
    $response['error'] = true;
    $response['message'] = "Insufficient Parameters";
}
json_encode($response);
echo json_encode($response);
?>