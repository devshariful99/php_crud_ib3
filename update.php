<?php
include('db/db_connection.php');

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $student_id = $_POST['student_id'];
    $updated_at = date('d M, Y');


    $update = "UPDATE students SET name='$name',student_id='$student_id',phone='$phone',updated_at='$updated_at' WHERE id=$id";

    $result = $conn->query($update);
    if ($result) {
        header('location:index.php');
    } else {
        echo "Data Insert Failed";
    }
}