<?php 
$addonq = ''; 
if(get("q")!=""){ $addonq = " WHERE judul LIKE '%".get('q')."%'"; } 
$hasil = $koneksi->prepare("SELECT * FROM artikel ".$addonq. " ORDER BY id DESC"); 
$hasil->execute(); 
$data = $hasil->fetchAll(); 
?> 
<a class="btn pull-right" href="index.php?p=blog&m=add">Tambah Baru</a> <h2>Data Blog</h2>

<table class="data"> 
	<thead> 
		<tr> 
			<th>No</th> 
			<th>Judul</th> 
			<th>Konten</th> 
			<th>Penulis</th> 
			<th colspan="2">Action</th> 
		</tr> 
	</thead> 
	<tbody> 
		<?php 
		$i = 1; 
		foreach ($data as $key) { 
		?> 
		<tr> 
			<td><?php echo $i;?></td> 
			<td><?php echo $key['judul'];?></td> 
			<td><?php echo $key['konten'];?></td> 
			<td><?php echo $key['penulis'];?></td> 
			<td><a href="index.php?p=blog&m=edit&id= <?php echo $key['id'];?>">Ubah</a></td> <td><a onclick="return confirm('Hapus Data <?php echo $key['nama'];?>')" href="proses/crud/hapus.php?id= <?php echo $key['id'];?>">Hapus</a></td> 
		</tr>
		<?php
		$i++; }
		?>
	</tbody>
</table>