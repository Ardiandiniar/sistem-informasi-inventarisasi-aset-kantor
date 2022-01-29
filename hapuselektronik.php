<?php 

	require_once 'oop/koneksi.php';

	$no_brg = $_GET['id'];

	$delete = $con->prepare('DELETE FROM crudelektronik where id ='. $no_brg);
	// $delete->bindParam(':id', $no_brg);
	$delete->execute();

	header("location:tampilelektronik.php");
 ?>