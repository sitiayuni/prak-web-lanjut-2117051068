<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $i = 1;
        foreach ($users as $user) {
        ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $user['nama'] ?></td>
                <td><?= $user['npm'] ?></td>
                <td><?= $user['nama_kelas'] ?></td>
                <td>
                    <a href="#">Detail</a>
                    <a href="#">Edit</a>
                    <a href="#">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<?= $this->endSection() ?>