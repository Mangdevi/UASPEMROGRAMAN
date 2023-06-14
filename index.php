<?php include("header.php") ?>
		<a href="insert.php" class="btn btn-green">Add</a>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Nama Barang</th>
				<th>Harga</th>
				<th>Deskripsi</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$results = $koneksi->query("select*from tabel_penjualan");
			foreach ($results as  $value) {
				
			?>
			<tr>
				<td><?php echo $value["id"] ?></td>
				<td><?php echo $value["nama_barang"] ?></td>
				<td><?php echo $value["harga"] ?></td>
				<td><?php echo $value["deskripsi"] ?></td>
				<td>
					<a href="edit.php?id=<?php echo $value["id"] ?>" class="btn btn-blue">Edit</a>
					<a href="fungsi.php?delete&id=<?php echo $value["id"] ?>" class="btn btn-red">Delete</a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	<?php include("footer.php") ?>