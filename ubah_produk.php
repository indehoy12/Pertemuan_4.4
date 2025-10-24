<?php
$id = $_GET['id'];

if (isset($_POST['nama_produk'])) {
    $nama = $_POST['nama_produk'];
    $harga = $_POST['harga_produk'];
    $stok = $_POST['stok_produk'];

    // proses ubah data
    $query = mysqli_query($koneksi, "UPDATE tb_produk 
        SET nama_produk='$nama', 
            harga_produk='$harga', 
            stok_produk='$stok' 
        WHERE id_pelanggan='$id'");

    if ($query) {
        echo '<script>alert("Data berhasil diubah"); location.href="?page=produk"</script>';
    } else {
        echo '<script>alert("Data gagal diubah");</script>';
    }
}

// mengambil data pelanggan yang akan diubah
$query = mysqli_query($koneksi, "SELECT * FROM tb_produk WHERE id_produk='$id'");
$data = mysqli_fetch_array($query);
?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Ubah Data Produk</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Ubah Data Produk</li>
    </ol>

    <a href="?page=produk" class="btn btn-warning">Kembali</a>
    <hr>

    <form action="" method="post">
        <table class="table table-bordered">
            <tr>
                <td width="200">Nama Produk</td>
                <td width="1">:</td>
                <td>
                    <input class="form-control" 
                           type="text" 
                           name="nama_produk" 
                           value="<?php echo $data['nama_produk']; ?>">
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td>
                    <input type="number" class="form-control" 
                              name="harga_produk" 
                              value="<?php echo $data['harga_produk']; ?>">
                </td>
            </tr>
            <tr>
                <td>Sto</td>
                <td>:</td>
                <td>
                    <input class="form-control" 
                           type="number" 
                           name="stok_produk" 
                           value="<?php echo $data['stok_produk']; ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                </td>
            </tr>
        </table>
    </form>
</div>
