<?php
include('db/db_connection.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM students WHERE id=$id";
    $result = $conn->query($sql);
    if ($result) {
        header('location:index.php');
    } else {
        echo "Filed";
    }
}