<?php
require("../database_connection.php");

$full_name = $_POST['full_name'];

$email = $_POST['email'];
$subject = $_POST['subject'];
$msg = $_POST['msg'];



$sql = "INSERT INTO users (email,  full_name, subject, msg) VALUES ('$email',  '$full_name', 'subject','msg')";
$result = mysqli_query($conn, $sql);
if (!$result) {
    $response = array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}

$response = array("success" => true, "message" => "Your account has been created successfully!");
echo json_encode($response);
mysqli_close($conn);
?>