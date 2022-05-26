<?php
if (empty($_GET['id'])) :
    echo "<h3>Error 404</h3><h5>Page Not Found</h5>";
else :

if(isset($_POST['simpan'])){
    $query = mysqli_query($connection, "UPDATE `buku` SET `judul` = '{$_POST['judul']}', `penulis` = '{$_POST['penulis']}', `penerbit` = '{$_POST['penerbit']}', `tahun_terbit` = '{$_POST['tahun_terbit']}', `isbn` = '{$_POST['isbn']}' WHERE `id` = '{$_GET['id']}'");
    if($query){
        echo '<div class="alert alert-success" role="alert">Edit data berhasil !</div>';
    }else{
        echo '<div class="alert alert-danger" role="alert">Edit data gagal !</div>';
    }
}

$query = mysqli_query($connection, "SELECT * FROM `buku` WHERE `id` = '{$_GET['id']}'");
$model = mysqli_fetch_object($query);

?>
<form action="" method="post">
    <div class="row">
        <div class="col-6">
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" name="judul" id="judul" value="<?= $model->judul ?>" />
            </div>
            <div class="mb-3">
                <label for="penulis" class="form-label">Penulis</label>
                <input type="text" class="form-control" name="penulis" id="penulis" value="<?= $model->penulis ?>" />
            </div>
            <div class="mb-3">
                <label for="isbn" class="form-label">ISBN</label>
                <input type="text" class="form-control" name="isbn" id="isbn" value="<?= $model->isbn ?>" />
            </div>
        </div>
        <div class="col-6">
            <div class="mb-3">
                <label for="penerbit" class="form-label">Penerbit</label>
                <input type="text" class="form-control" name="penerbit" id="penerbit" value="<?= $model->penerbit ?>" />
            </div>
            <div class="mb-3">
                <label for="tahun_terbit" class="form-label">Tahun terbit</label>
                <input type="text" class="form-control" name="tahun_terbit" id="tahun_terbit" value="<?= $model->tahun_terbit ?>" />
            </div>
        </div>
        <div class="col-12">
            <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
        </div>
    </div>
</form>
<?php endif; ?>