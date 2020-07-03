<table>
	<tr>
		<td>No</td>
		<td>NPM</td>
		<td>Nama</td>
		<td>Jenis Kelamin</td>
		<td>Program Studi</td>
	</tr>	
	<?php 
		$no=1;
		foreach ($mahasiswa as $mhs):
	?>
	<tr>
		<td><?php echo $no++ ?></td>
		<td><?php echo $mhs->npm ?></td>
		<td><?php echo $mhs->nama ?></td>
		<td><?php echo $mhs->jk ?></td>
		<td><?php echo $mhs->prodi ?></td>
	</tr>
<?php endforeach; ?>
</table>