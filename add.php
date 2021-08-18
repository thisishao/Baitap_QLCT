<?php
    //Kết nối databse
    include 'connect.php';
    include 'demo.php';
    // include 'config.php';
    //get id tren url
    // $id = $_GET['id'];




    

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style type="text/css">

        form{

            text-align: center;
            margin: 0 auto;
        }
        td{
            padding: 5px;
        }
    </style>
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>
<body>
    <div class="media-content">
        <p class="title is-4" style="color: red; padding-left: 50px; margin-bottom: 10px;">Thêm cầu thủ</p>
    </div>
    <form method="POST" action="">
        <table>
            <tr>
                <td><p class="title is-5">Tên cầu thủ:</p></td>
                <td><input class="input" type="text" name="name"><?php echo $error_name; ?></td>
            </tr>
            <tr>
                <td><p class="title is-5">Tuổi:</p></td>
                <td><input class="input" type="text" name="age"><?php echo $error_age; ?></td>
            </tr>
            <tr>
                <td><p class="title is-5">Quốc tịch:</p></td>
                <td><input class="input" type="text" name="quoctich"><?php echo $error_quoctich; ?></td>
            </tr>
            <tr>
                <td><p class="title is-5">Vị trí:</p></td>
                <td><input class="input" type="text" name="vitri"><?php echo $error_vitri; ?></td>
            </tr>
            <tr>
                <td><p class="title is-5">Lương:</p></td>
                <td><input class="input" type="text" name="luong"><?php echo $error_luong; ?></td>
            </tr>
            <tr>
                <td></td>
                <td><button class="button is-primary" name="sub">Thêm cầu thủ</button></td>
            </tr>
        </table>
    </form>

</body>
</html>