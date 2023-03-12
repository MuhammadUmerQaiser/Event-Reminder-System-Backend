<?php
include('connection.php');
$name = $_POST['name'];
$date = $_POST['date'];
$time = $_POST['time'];
$venue = $_POST['venue'];
$description = $_POST['description'];
$user_id = $_POST['user_id'];

$response = array();
$query = "INSERT INTO `events`(`name`, `date`, `time`, `venue`, `description`, `user_id`) VALUES ('".$name."','".$date."','".$time."','".$venue."','".$description."','".$user_id."')";
$result = mysqli_query($con, $query);
if($result){
    $response['message'] = "Event Created Successfully";
    $response['error'] = false;
}else{
    $response['error'] = true;
    $response['message'] = "Insufficient Parameters";
}
json_encode($response);
echo json_encode($response);
?>