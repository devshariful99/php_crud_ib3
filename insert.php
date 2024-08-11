<?php
include('db/db_connection.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $student_id = $_POST['student_id'];


    $insert = "INSERT INTO students(name, student_id, phone) VALUES ('$name','$student_id','$phone')";

    $result = $conn->query($insert);
    if ($result) {
        header('location:index.php');
    } else {
        echo "Data Insert Failed";
    }
}