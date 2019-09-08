<?php
    $connect = mysqli_connect("localhost", "root", "", "todolistdb");
    $query = "UPDATE tb_todo SET td_todo = '".$_POST["value"]."' WHERE td_id = '".$_POST["pk"]."'";
    mysqli_query($connect, $query);
?>