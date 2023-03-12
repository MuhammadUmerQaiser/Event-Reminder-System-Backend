<?php
include('connection.php');
// $user_id = "2";
$user_id = $_POST['user_id'];

$response = array();
$response['data'] = array();
$query = "SELECT * FROM `events` WHERE `user_id` = '".$user_id."'";
$result = mysqli_query($con, $query);
while($row = mysqli_fetch_assoc($result)){
    $index['id'] = $row['id'];
    $index['name'] = $row['name'];
    $index['date'] = $row['date'];
    $index['time'] = $row['time'];
    $index['description'] = $row['description'];
    $index['venue'] = $row['venue'];
    array_push($response['data'], $index);
}
$response['message'] = "1";
$response['error'] = false;
json_encode($response);
echo json_encode($response);
?>