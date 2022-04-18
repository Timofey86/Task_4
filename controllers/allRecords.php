<?php
require_once '../config/connect.php';
require_once '../app/AllRecords.php';

use app\Allrecords;

$full_name = ($_GET['full_name']);
$error_fields = [];

if ($full_name === '') {
    $error_fields[] = "full_name";
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

$all_records = new Allrecords($full_name, $db);
$result = $all_records->getAllMessages();
$response = [
    "status" => true,
    "message" => 'Успешный запрос!'
];
if (mysqli_num_rows($result) > 0) {
    while ($row = $result->fetch_assoc()) {
        $response['answer'][] = $row;
    }
} else {
    $response = [
        "status" => false,
        "message" => 'Пользователь не найден!',

    ];
}
echo json_encode($response);

