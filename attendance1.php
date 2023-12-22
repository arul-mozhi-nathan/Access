<?php
include "database.php";

// Get student data
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = "SELECT * FROM students";
    $result = $conn->query($sql);

    $data = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    echo json_encode($data);
}

// Update student attendance
if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    parse_str(file_get_contents("php://input"), $putData);
    $studentId = $putData['studentId'];
    $attendance = $putData['attendance'];

    $sql = "UPDATE students SET attendance = $attendance WHERE id = $studentId";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(array("message" => "Attendance updated successfully"));
    } else {
        echo json_encode(array("message" => "Error updating attendance"));
    }
}

$conn->close();
?>
