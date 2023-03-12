<?php
include('connection.php');
$email = $_POST['email'];
$password = $_POST['password'];

$response = array();
$query = "SELECT * FROM `user` WHERE `email` = '".$email."' AND `password` = '".$password."'";
$result = mysqli_query($con, $query);
$count = mysqli_num_rows($result);
if($count > 0){
    $response['message'] = "User is Authenticated";
    $response['error'] = "false";
    $data = mysqli_fetch_assoc($result);
    $response['id'] = $data['id'];
    $response['name'] = $data['name'];
    $response['email'] = $data['email'];
    $response['contact'] = $data['contact'];
    $response['password'] = $data['password'];
}else{
    $response['error'] = "true";
    $response['message'] = "User is not Authenticated";
}
json_encode($response);
echo json_encode($response);
?>