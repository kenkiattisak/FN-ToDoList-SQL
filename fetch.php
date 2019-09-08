<?php
    $connect = mysqli_connect("localhost", "root", "", "todolistdb");
    $query = "SELECT * FROM tb_todo";
    $result = mysqli_query($connect, $query);
    $output = array();
    while($row = mysqli_fetch_assoc($result))
    {
    $output[] = $row;
    }
    echo json_encode($output);
?>