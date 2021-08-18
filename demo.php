<?php
    //Kết nối databse
    // include 'connect.php';
    // include 'config.php';
    //get id tren url
    // $id = $_GET['id'];

    $check = 1;
    $error_name = $error_age = $error_quoctich = $error_vitri = $error_vitri = $error_luong = $error_avatar = "";
    if (isset($_POST['sub'])) {
        
        if (empty($_POST['name'])) {
            $error_name = "<span style='color:red;'>Lỗi: Họ tên bắt buộc phải nhập.</span>";
            $check = 0;
        }else{

            if (!preg_match("/^[a-zA-Z ]*$/",$_POST["name"])) {
              $error_name = "<span style='color:red;'>Lỗi: Họ tên chỉ chấp nhận chữ và khoảng trắng.</span>";
              $check = 0;
            }
        }

        if (empty($_POST['age'])) {
            $error_age = "<span style='color:red;'>Lỗi: Tuổi bắt buộc phải nhập.</span>";
            $check = 0;
        }else{
            if (!preg_match("/^[0-9]{2}$/",$_POST["age"])) {
                $error_age = "<span style='color:red;'>Lỗi: Tuổi chỉ chấp nhận số từ 2 kí tự</span>";
                $check = 0;
            }

        }
        if (empty($_POST['quoctich'])) {
            $error_quoctich = "<span style='color:red;'>Lỗi: Quốc tịch bắt buộc phải nhập.</span>";
            $check = 0;
        }else{
            if (!preg_match("/^[a-zA-Z ]*$/",$_POST["quoctich"])) {
              $error_quoctich = "<span style='color:red;'>Lỗi: Quốc tịch chỉ chấp nhận chữ và khoảng trắng.</span>";
              $check = 0;
            }
        }
        if (empty($_POST['vitri'])) {
            $error_vitri = "<span style='color:red;'>Lỗi: Vui lòng nhập Vị trí !!!.</span>";
            $check = 0;
        }else{
            if (!preg_match("/^[a-zA-Z ]*$/",$_POST["vitri"])) {
              $error_vitri= "<span style='color:red;'>Lỗi: Vui lòng nhập lại vị trí !!.</span>";
              $check = 0;
            }
        }
        if (empty($_POST['luong'])) {
            $error_luong = "<span style='color:red;'>Lỗi: Vui lòng nhập Lương !!!.</span>";
            $check = 0;
        }else{
            if (!preg_match("/^[0-9]{3,5}$/",$_POST["luong"])) {
              $error_luong = "<span style='color:red;'>Lỗi: Vui lòng nhập lại lương !!.</span>";
              $check = 0;
            }
        }

        if ($check == 1) {

            if (isset($_GET['id'])) {

                $sql = "UPDATE `qlct` SET `name`='".$_POST['name']."',`age`='".$_POST['age']."',`quoctich`='".$_POST['quoctich']."',`vitri`='".$_POST['vitri']."',`avatar`='".$_POST['name']."',`luong`='".$_POST['luong']."' WHERE `id` = ".$_GET['id'];


                if ($result = $con->query($sql)) {
                    echo "<span style='color:red;'>Sửa cầu thủ thành công Click vào <a href='index.php'>đây</a> để về trang danh sách</span>";
                }else{
                    echo "<h1>Có lỗi xảy ra</h1>";
                }
            }else{
                $sql = "INSERT INTO `qlct`
                (`name`, `age`, `quoctich`, `vitri`, `avatar`, `luong`) 
                VALUES 
                ('".$_POST['name']."','".$_POST['age']."','".$_POST['quoctich']."','".$_POST['vitri']."','".$_POST['name']."','".$_POST['luong']."');";

                if ($result = $con->query($sql)) {
                    echo "<h1><span style='color:red;'>Thêm mới cầu thủ thành công Click vào <a href='index.php'>đây</a> để về trang danh sách</span></h1>";
                }else{
                    echo "<h1>Có lỗi xảy ra</h1>";
                }
            }

        }
    }

    

?>