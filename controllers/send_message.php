<?php
session_start();
require_once '../config/connect.php';
require_once '../app/Send_Message.php';

use app\Send_Message;

$full_name = $_POST['full_name'];
$message = $_POST['message'];
$error_fields = [];

if ($full_name === '') {
    $error_fields[] = "full_name";
}
if ($message === '') {
    $error_fields[] = "message";
}
if (!empty($error_fields)) {
    $response = [
        "status" => false,
        "message" => "Проверьте поля",
        "fields" => $error_fields
    ];
    echo json_encode($response);
    die;
}

$full_name = mysqli_real_escape_string($db, $full_name);
$message = mysqli_real_escape_string($db, $message);
$send_message = new Send_Message($db, $full_name, $message);
$send_message->sendToDataBase();

$response = [
    "status" => true,
    "message" => 'Запись успешно добавлена!'
];
echo json_encode($response);

$_SESSION['user']['full_name'] = $full_name;


