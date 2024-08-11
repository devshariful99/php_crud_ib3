<?php
include('db/db_connection.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM students WHERE id=$id";
    $result = $conn->query($sql);
    if ($result) {
        $student = $result->fetch_assoc();
        include('view/edit.php');
    } else {
        echo "Filed";
    }
}