<?php
header("Content-Type: application/json");

$data = json_decode(file_get_contents("php://input"), true);

if ($data) {
    echo json_encode([
        "status" => "success",
        "receivedData" => $data
    ]);
} else {
    echo json_encode([
        "status" => "error",
        "message" => "No data received"
    ]);
}
?>

