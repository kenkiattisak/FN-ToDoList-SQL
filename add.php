<?php
    $connect = mysqli_connect("localhost", "root", "", "todolistdb");
    $query = "INSERT INTO `tb_todo`(`td_id`, `td_todo`) VALUES ('','')";
    mysqli_query($connect, $query);
?>