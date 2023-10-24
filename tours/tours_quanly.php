<?php
    require_once '../config.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tours</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
  <body>
    <div class="container">
    <?php //include_once"navbar.php"; ?>
    <div class="card mt-3">
        <div class= "card-header">Tours</div>
        <div class="card-body">
            <?php
                $sql = 'SELECT * FROM sanpham';
                $cmd = $conn->prepare($sql);
                $cmd->execute(); 
                $result = $cmd->fetchAll();
            ?> 
            <p><a href="tours_them.php" class="btn btn-info"><i class="bi bi-plus-lg"></i> Thêm mới</a></p>
            <table class="table table-sm table-hover table-striped table-bordered mb-0">
            <thead>
                <tr>
                    <th width="5%">#</th>
                    <th>Tiêu đề</th>
                    <th>Giá giảm</th>
                    <th>Giá</th>
                    <th>Hình ảnh</th>
                    <th>Nội dung</th>
                    <th>Danh mục</th>
                    <th width="5%">Sửa</th>
                    <th width="5%">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $stt = 1;
                foreach($result as $value)
                {
                    echo '<tr>
                            <td>' .$stt++ . '</td>
                            <td>'.$value['tieude'] . '</td>
                            <td>'.$value['giagiam'] . '</td>
                            <td>'.$value['gia'] . '</td>
                            <td>'.$value['hinhanh'] . '</td>
                            <td>'.$value['noidung'] . '</td>
                            <td>'.$value['danhmuc'] . '</td>
                            <td class="text-center"><a href="chude_sua.php?id=' . $value['id'] . '"><i class="bi bi-pencil-square"></i></a></td>
                            <td class="text-center"><a href="tours_xoa.php?id=' . $value['id'] . '" onclick="return confirm(\'Bạn muốn xóa chủ đề '.$value['tieude'].' không?\')"><i class="bi bi-trash text-danger"></i></a></td>
                        <tr>';
                }
                ?>
            </tbody>
            </table>
        </div>
        
    </div>
    <?php //include_once"footer.php"; ?> 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>