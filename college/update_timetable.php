<?php
$conn = new mysqli("localhost", "root", "", "school_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$class = $_POST['class'];
$subject = $_POST['subject'];
$teacher = $_POST['teacher'];
$time = $_POST['time'];

$sql = "INSERT INTO timetable (class, subject, teacher, time)
VALUES ('$class', '$subject', '$teacher', '$time')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
