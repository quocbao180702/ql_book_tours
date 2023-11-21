<?php
require_once '../config.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sửa Tours</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
    <div class="container">
        <?php //include_once"navbar.php"; 
        ?>
        <div class="card mt-3">
            <div class="card-header">Sửa Tours</div>
            <div class="card-body">
                <?php
                    $id = $_GET['id'];
                    $sql = 'SELECT * FROM tours WHERE ID = :ID';
                    $cmd = $conn->prepare($sql);
                    $cmd->bindValue(':ID', $id);
                    $cmd->execute();
                    $result = $cmd->fetch();
                ?>
                <form action="tours_sua_xuly.php" method="post" class="needs-validation" novalidate>
                <input type = "hidden" id="ID" name="ID" value="<?php echo $result['ID']; ?>" required />
                    <div class="mb-3">
                        <label for="TieuDe" class="form-label">Tiêu đề tour</label>
                        <input type="text" class="form-control" id="TieuDe" name="TieuDe" value="<?php echo $result['TieuDe']; ?>" required />
                        <div class="invalid-feedback">Tiêu đề tour không được bỏ trống.</div>
                    </div>
                    <div class="mb-3">
                        <label for="GiaGoc" class="form-label">Giá gốc</label>
                        <input type="number" class="form-control" id="GiaGoc" name="GiaGoc" value="<?php echo $result['GiaGoc']; ?>" required />
                        <div class="invalid-feedback">Giá giảm không được bỏ trống.</div>
                    </div>
                    <div class="mb-3">
                        <label for="Gia" class="form-label">Giá</label>
                        <input type="number" class="form-control" id="Gia" name="Gia" value="<?php echo $result['Gia']; ?>" required />
                        <div class="invalid-feedback">Giá không được bỏ trống.</div>
                    </div>
                    <div class="mb-3">
                        <label for="NoiDung" class="form-label">Nội dung</label>
                        <textarea class="form-control" id="NoiDung" name="NoiDung" required><?php echo $result['NoiDung']; ?></textarea>
                        <div class="invalid-feedback">Nội dung không được bỏ trống.</div>
                    </div>
                    <div class="mb-3">
                        <label for="DanhMuc" class="form-label">Danh Mục</label>
                        <input type="number" class="form-control" id="DanhMuc" name="DanhMuc" value="<?php echo $result['DanhMuc']; ?>" required />
                        <div class="invalid-feedback">Danh mục không được bỏ trống.</div>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="bi bi-floppy"></i> Cập nhật</button>
                </form>
            </div>
        </div>
        <?php //include_once"footer.php"; 
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict'
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')
            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
    <script src="../blogs/ckeditor5/ckeditor.js"></script>
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