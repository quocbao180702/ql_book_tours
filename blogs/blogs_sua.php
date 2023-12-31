<?php
require_once '../config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sửa bài viết - iNews</title />
    <link rel="shortcut icon" href="images/premium.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
    <div class="container">
        <?php include_once "../navbar.php"; ?>

        <div class="card mt-3">
            <h5 class="card-header">Sửa bài viết</h5>
            <div class="card-body">
                <?php
                

                $id = $_GET['id'];

                $sql = 'SELECT * FROM noidungtin WHERE MaBaiViet = :ID';
                $cmd = $conn->prepare($sql);
                $cmd->bindValue(':ID', $id);
                $cmd->execute();
                $result = $cmd->fetch();
                ?>
                <form action="blogs_sua_xuly.php" method="post" class="needs-validation" novalidate>
                    <input type="text" id="MaBaiViet" name="MaBaiViet" value="<?php echo $result['MaBaiViet']; ?>" hidden />

                    
                    <div class="mb-3">
                        <label for="TieuDe" class="form-label">Tiêu đề bài viết</label>
                        <input type="text" class="form-control" id="TieuDe" name="TD" value="<?php echo $result['TieuDe']; ?>" required />
                        <div class="invalid-feedback">Tiêu đề bài viết không được bỏ trống.</div>
                    </div>

                    <div class="mb-3">
                        <label for="TomTat" class="form-label">Tóm tắt</label>
                        <textarea class="form-control" id="TomTat" name="TT" required><?php echo $result['TomTat']; ?></textarea>
                        <div class="invalid-feedback">Tóm tắt không được bỏ trống.</div>
                    </div>

                    <div class="mb-3">
                        <label for="NoiDung" class="form-label">Nội dung bài viết</label>
                        <textarea class="form-control" id="NoiDung" name="ND" required><?php echo $result['NoiDung']; ?></textarea>
                        <div class="invalid-feedback">Nội dung bài viết không được bỏ trống.</div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary"><i class="bi bi-floppy"></i> Cập nhật</button>
                </form>
            </div>
        </div>
        <hr>
    </div>
    <?php include_once "../footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        (() => {
            'use strict';
            const forms = document.querySelectorAll('.needs-validation');
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        })();
    </script>
    <script src="js/ckeditor5/ckeditor.js"></script>
    <script>
        ClassicEditor.create(document.querySelector('#NoiDung'), {
            licenseKey: '',
        }).then(editor => {
            window.editor = editor;
        }).catch(error => {
            console.error(error);
        });
    </script>
</body>

</html>