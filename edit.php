<?php 
    include 'connect.php';
    include 'demo.php';
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
    <?php 

            $id = $_GET['id'];
            //Viết câu SQL lấy tất cả dữ liệu trong bảng players
            $sql="SELECT * FROM `qlct` WHERE `id`= ".$id;
            //Chạy câu SQL
            $result = $con->query($sql);
            // var_dump($result);
            
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $data = $row;
                }
            }
            // echo $id;

    ?>
    <div class="media-content">
        <p class="title is-4" style="color: red; padding-left: 50px; margin-bottom: 10px;">Sửa cầu thủ</p>
    </div>
    <form method="POST" action="">
        <table>
            <tr>
                <td><p class="title is-5">Tên cầu thủ:</p></td>
                <td><input class="input" type="text" name="name" value="<?php echo $data['name'] ?>"><?php echo $error_name; ?></td>
            </tr>
            <tr>
                <td><p class="title is-5">Tuổi:</p></td>
                <td><input class="input" type="text" name="age" value="<?php echo $data['age'] ?>"><?php echo $error_age; ?></td>
            </tr>
            <tr>
                <td><p class="title is-5">Quốc tịch:</p></td>
                <td><input class="input" type="text" name="quoctich" value="<?php echo $data['quoctich'] ?>"><?php echo $error_quoctich; ?></td>
            </tr>
            <tr>
                <td><p class="title is-5">Vị trí:</p></td>
                <td><input class="input" type="text" name="vitri" value="<?php echo $data['vitri'] ?>"><?php echo $error_vitri; ?></td>
            </tr>
            <tr>
                <td><p class="title is-5">Lương:</p></td>
                <td><input class="input" type="text" name="luong" value="<?php echo $data['luong'] ?>"><?php echo $error_luong; ?></td>
            </tr>
            <tr>
                <td></td>
                <td><button class="button is-primary" name="sub">Sửa cầu thủ</button></td>
            </tr>
        </table>
    </form>

</body>
</html>