<?= $this->extend('layouts/app') ?>
<?= $this->section('content')?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <b><a class="navbar-brand" href="#">Profile</a></b>
        </div>
    </nav>
    <!-- <div class="container">
        <div class="row">
            <div class="col-md-3 text-center align-self-center">
                <div class="alert alert-success" role="alert">
                    Data Berhasil Ditambahkan
                </div>
            </div>
        </div>
    </div> -->
    <div style="text-align:center;">
        <img src="<?php echo base_url('img\foto_Siti Ayuni.jpg'); ?>" alt="fotoroy" style="height: 200px; width: 200px; border-radius: 50%; object-fit: cover; object-position: 0 -8px;" border="2px"><br>
        <b>
            <p>
            <h3>Hi</h3>
            </p>
        </b>
        <button type="button" class="btn btn-primary" style="width: 300px;"><?= $nama ?></button><br><br>
        <button type="button" class="btn btn-primary" style="width: 300px;"><?= $kelas ?></button><br><br>
        <button type="button" class="btn btn-primary" style="width: 300px;"><?= $npm ?></button><br><br>
    </div>
<?= $this->endSection() ?>