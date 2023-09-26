<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <form action="<?= base_url('/user/store') ?>" method="POST">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="masukkan nama Anda">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Kelas</label>
            <input type="text" class="form-control" id="kelas" name="kelas" placeholder="masukan kelas Anda">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput3" class="form-label">NPM</label>
            <input type="text" class="form-control" id="npm" name="npm" placeholder="masukan npm Anda">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>