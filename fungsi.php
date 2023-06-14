<?php
    if(isset($_GET["insert"])) {
        insert();
    } else if(isset($_GET["update"])){
        update();
    } else if(isset($_GET["delete"])){
        delete();
    }


    function insert() {
        require("connection.php");
        $insert = $koneksi->query("insert into tabel_penjualan set nama_barang='{$_POST['nama_barang']}', harga='{$_POST['harga']}', deskripsi='{$_POST['deskripsi']}'");
        if($insert === true){
            echo "insert berhasil";
        } else {
            echo "insert gagal";
        }

        header("location: index.php");

    }

    function update() {
        require("connection.php");
        $insert = $koneksi->query("update tabel_penjualan set nama_barang='{$_POST['nama_barang']}', harga='{$_POST['harga']}', deskripsi='{$_POST['deskripsi']}' where id={$_POST['id']}");
        if($insert === true){
            echo "insert berhasil";
        } else {
            echo "insert gagal";
        }
        
        header("location: index.php"); 
    }

    function delete() {
        require("connection.php");
        $insert = $koneksi->query("delete from tabel_penjualan where id={$_GET['id']}");
        if($insert === true){
            echo "insert berhasil";
        } else {
            echo "insert gagal";
        }
        
        header("location: index.php");     
    }
?>