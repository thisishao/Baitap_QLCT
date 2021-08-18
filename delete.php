<?php
    include 'connect.php';
    $id= $_GET['id'];
    $sql = "DELETE FROM `qlct` WHERE `id`='".$id."'";

    if ($result = $con->query($sql)) {
        echo "<h1> Đã xoá thành công <a href='index.php'>Cick vào đây để trở về</a> <h1>";
    }else{
        echo "<h1> Đã xoá thất bại<a href='index.php'>Cick vào đây để trở về</a> <h1>";
    }
?>