<?php
if (isset($_POST['nama_produk'])) {
    $nama = $_POST['nama_produk'];
    $harga = $_POST['harga_produk'];
    $stok = $_POST['stok_produk'];

    $query = mysqli_query($koneksi, "INSERT INTO tb_produk(nama_produk, harga_produk, stok_produk) values('$nama', '$harga', '$stok')");

    if ($query) {
        echo '<script>alert("Data berhasil disimpan"); location.href="?page=produk"</script>';
    } else {
        echo '<script>alert("Data gagal disimpan");</script>';
    }
}
?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Tambah Produk</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Tambah Produk</li>
    </ol>

    <a href="?page=produk" class="btn btn-warning">Kembali</a>
    <hr>

    <form action="" method="post">
        <table class="table table-bordered">
            <tr>
                <td width="200">Nama Produk</td>
                <td width="1">:</td>
                <td><input class="form-control" type="text" name="nama_produk"></td>
            </tr>
            <tr>
                <td>Harga Produk</td>
                <td>:</td>
                <td><input class="form-control" type="number" name="harga_produk"></input></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td>:</td>
                <td><input class="form-control" type="text" name="stok_produk"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                </td>
            </tr>
        </table>
    </form>
</div>
