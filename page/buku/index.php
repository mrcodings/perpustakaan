<h1>Halaman Buku</h1>
<a href="index.php?page=buku/tambah.php" class="btn btn-sm btn-primary float-end">Tambah</a>
<table class="table">
    <tr>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Tahun Terbit</th>
        <th width="200">ISBN</th>
        <th width="150">Action</th>
    </tr>
<?php
    $query = mysqli_query($connection, "SELECT * FROM `buku` LIMIT 0,20");
    while($model=mysqli_fetch_object($query)):
?>
    <tr>
        <td><?= $model->judul ?></td>
        <td><?= $model->penulis ?></td>
        <td><?= $model->penerbit ?></td>
        <td><?= $model->tahun_terbit ?></td>
        <td><?= $model->isbn ?></td>
        <td>
            <a href="index.php?page=buku/edit.php&id=<?= $model->id ?>" class="btn btn-sm btn-primary">Edit</a>
            <a href="index.php?page=buku/hapus.php&id=<?= $model->id ?>" class="btn btn-sm btn-primary">Hapus</a>
        </td>
    </tr>
<?php endwhile; ?>
</table>