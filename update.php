<?php 
	include '../../conf.php';
	include '../../conn.php';

	$id = post('id');
	$judul = post('judul');
	$konten = post('konten');
	$penulis = post('penulis');
	$simpan = $koneksi->prepare("UPDATE artikel set `judul`='".$judul."',`konten`='".$konten."',`penulis`='".$penulis."' WHERE `id` ='".$id."'");
	$simpan->execute();

	header("location:../../index.php?p=blog");
 ?>