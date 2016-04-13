<?php
	require_once("persoane.php");
	
	$n = $_POST['nume'];
	$p = $_POST['prenume'];
	$c = $_POST['cnp'];
	$ds = $_POST['dataSos'];
	$dp = $_POST['dataP'];
	$np = $_POST['nrPers'];
	$cam = $_POST['camera'];
	
	$f = fopen("persoane.txt", "a");
	fwrite($f, "$n, $p, $c, $ds, $dp, $np, $cam\n");
	fclose($f);
	
	header("location:index_formular.php");

?>