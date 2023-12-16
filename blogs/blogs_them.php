<?php
    require_once '../config.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thêm Chủ Đề - News</title>
    <link rel="shortcut icon" href="images/premium.png" type="images/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  </head>
  <body>
    <div class="container">
    <?php include_once '../navbar.php'; ?>
        <div class="card my-5">
          <div class="card-header">
            Thêm Bài viết
          </div>
          <div class="card-body">
          <form action="blogs_them_xuly.php" method="post" class="g-3 needs-validation" novalidate>

              <div class="mb-3">
                    <label for="TieuDe" class="form-label">Tiêu đề bài viết</label>
                    <input type="text" class="form-control" id="TieuDe" name="TieuDe" required />
                    <div class="invalid-feedback">Tiêu đề bài viết không được bỏ trống.</div>
                </div>

                <div class="mb-3">
                    <label for="TomTat" class="form-label">Tóm tắt</label>
                    <textarea class="form-control" id="TomTat" name="TomTat" required></textarea>
                    <div class="invalid-feedback">Tóm tắt không được bỏ trống.</div>
                </div>

                <div class="mb-3">
                    <label for="NoiDung" class="form-label">Nội dung bài viết</label>
                    <textarea class="form-control" id="NoiDung" name="NoiDung" required></textarea>
                    <div class="invalid-feedback">Nội dung bài viết không được bỏ trống.</div>
                </div>
                
              <div class="text-center w-100">
                <button type="submit" class="btn btn-primary text-center">Thêm chủ đề</button>
              </div>
            </form>
          </div>
        </div>
        <?php include_once "../footer.php"; ?>
    </div>
    <script src="ckeditor5/ckeditor.js"></script>
    <script>
        ClassicEditor.create(document.querySelector('#NoiDung'), {
        licenseKey: '',
        }).then(editor => {
        window.editor = editor;
        }).catch(error => {
        console.error(error);
        });
        </script>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>