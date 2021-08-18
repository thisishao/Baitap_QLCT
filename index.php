<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">

</head>
<body>
    <?php 
        include 'connect.php';

        $sql = "SELECT * FROM `qlct` ORDER BY `id`";

        $result = $con->query($sql);

        $val = [];

        if ($result->num_rows >0) {
            while ($row = $result->fetch_assoc()) {
                $val[] = $row;
            }
        }
    ?>
    <div class="table is-striped">
        <table class="table">
        <div class="content">
            <h1 style="color: red;">Quản lý cầu thủ</h1>
        </div>
            <a href="Thêm"></a>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên cầu thủ</th>
                    <th>Tuổi</th>
                    <th>Quốc tịch</th>
                    <th>Vị trí</th>
                    <th>Lương</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($val as $va) { ?>
                    <tr>
                        <td><?php echo $va['id'] ?></td>
                        <td><?php echo $va['name'] ?></td>
                        <td><?php echo $va['age'] ?></td>
                        <td><?php echo $va['quoctich'] ?></td>
                        <td><?php echo $va['vitri'] ?></td>
                        <td><?php echo $va['luong'] ?></td>
                        <td><a href="edit.php?id=<?php echo $va['id'] ?>">Edit</a></td>
                        <td><a href="delete.php?id=<?php echo $va['id']?>"><button class="delete is-medium"></button></a></td>
                    </tr>

                <?php }; ?>
            </tbody>
                <tr>
                    <td><a href="add.php"><button class="button is-info">Thêm mới</button></a></td>

                </tr>
        </table>
    </div>
</body>
</html>