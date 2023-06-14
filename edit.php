<?php 
include("header.php");
$select = $koneksi->query("select*from tabel_penjualan where id={$_GET['id']}");
$tabel_penjualan = mysqli_fetch_assoc($select);
?>

<form method="POST" action="fungsi.php?update" class='form'>
<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
    <div class="field">
        <span class="label"> Nama Barang </span>
        <input name="nama_barang" value="<?php echo $tabel_penjualan['nama_barang'] ?>">
    </div>
    <div class="field">
        <span class="label"> Harga </span>
        <input name="harga" value="<?php echo $tabel_penjualan['harga'] ?>">
    </div>
    <div class="field">
        <span class="label"> Deskripsi</span>
        <textarea name="deskripsi" rows="10"> <?php echo $tabel_penjualan['deskripsi'] ?></textarea>
</div>
<button>Simpan</button>
</form>
<?php include("footer.php") ?>