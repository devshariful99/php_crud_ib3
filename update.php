<?php
include('db_connection.php');

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $student_id = $_POST['student_id'];
    $updated_at = date('Y-m-d H:i:s');


    $query = "UPDATE students SET name='$name',student_id='$student_id', phone='$phone',updated_at='$updated_at' WHERE id=$id";

    $result = $conn->query($query);
    if($result){
        header("location:edit.php?id=$id&message=Data Updated Successfully");
    }else{
        echo "Data Update Failed";
    }

}




?>
