<?php
header("Content-Type: application/json");

$action = isset($_GET['action']) ? $_GET['action'] : '';

if ($action === 'get_moisture_data') {
    $data = [
        ["date" => "2024-10-01", "time" => "08:30 AM", "moisture_level" => "55%", "status" => "Normal"],
        ["date" => "2024-10-01", "time" => "12:45 PM", "moisture_level" => "43%", "status" => "Low"],
    ];
    echo json_encode($data);
}

elseif ($action === 'update_thresholds' && $_SERVER["REQUEST_METHOD"] == "POST") {
    $minThreshold = isset($_POST['min_threshold']) ? $_POST['min_threshold'] : 40;
    $maxThreshold = isset($_POST['max_threshold']) ? $_POST['max_threshold'] : 70;

    $response = [
        "success" => true,
        "message" => "Thresholds updated successfully for min: $minThreshold% and max: $maxThreshold%."
    ];
    echo json_encode($response);
}
?>
