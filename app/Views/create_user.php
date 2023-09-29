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
        <div class="col">
            <h2>
                Form Data Mahasiswa
            </h2>
        </div>
        <?php if (session()->getFlashdata('errors')) : ?>
            <div class="col-md-3">
                <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashdata('errors') ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="col-md-3">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= old('nama') ?>" placeholder="masukkan nama Anda">
            </div>
        </div>
        <div class="col-md-3">
            <div class="mb-3">
                <label for="formGroupExampleInput3" class="form-label">Kelas</label>
                <select name="kelas" id="kelas">
                    <?php
                    foreach ($kelas as $item) {
                    ?>
                        <option value="<?= $item['id'] ?>">
                            <?= $item['nama_kelas'] ?>
                        </option>
                    <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="mb-3">
                <label for="formGroupExampleInput3" class="form-label">NPM</label>
                <input type="text" class="form-control" id="npm" name="npm" value="<?= old('npm') ?>" placeholder="masukan npm Anda">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>