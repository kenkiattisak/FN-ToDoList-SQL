<?php
    
    $connect = mysqli_connect("localhost", "root", "", "todolistdb");
    $todo = $_POST['todo'];
    $td_id=$_POST['td_id'];
    $ins = "INSERT INTO tb_suc (id,suc) VALUES ('','".$todo."')";
    mysqli_query($connect, $ins);
    $del = "DELETE FROM `tb_todo` WHERE td_id = '".$td_id."'";
    mysqli_query($connect, $del);
    
?>