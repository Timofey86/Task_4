<?php
session_start();
require_once '../config/connect.php';
require_once '../app/TwoMessages.php';

use app\Two_Messages;

$commentNewCount = $_POST['commentsNewCount'] ;

$two_messages = new Two_Messages($db,$commentNewCount);
$result = $two_messages->getTwoMessages();
$response = [
    "status" => true,
    ];
if (mysqli_num_rows($result) > 0) {
    while ($row = $result->fetch_assoc()){
        $response['answer'][] = $row;
    }
} else {
    $response = [
        "status" => false,
    ];
}
echo json_encode($response);