<?php 
	    $koneksi = mysqli_connect("localhost", "root", "", "babi guling jero", 3306);

		if(!$koneksi) {
			die("connection error".mysqli_connect_error());
		}
		
	?>