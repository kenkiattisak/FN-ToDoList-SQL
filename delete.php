<?php
    $connect = mysqli_connect("localhost", "root", "", "todolistdb");
    $id = $_POST['id'];
    $query = "DELETE FROM `tb_todo` WHERE td_id = '".$id."'";
    mysqli_query($connect, $query);
?>