<?php include("header.php") ?>

<form method="POST" action="fungsi.php?insert" class='form'>
    <div class="field">
        <span class="label"> Nama Barang </span>
        <input name="nama_barang">
    </div>
    <div class="field">
        <span class="label"> Harga </span>
        <input name="harga">
    </div>
    <div class="field">
        <span class="label"> Deskripsi</span>
        <textarea name="deskripsi" rows="10"></textarea>
</div>
<button>Simpan</button>
</form>
<?php include("footer.php") ?>