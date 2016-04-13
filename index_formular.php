<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
	function afisare(){
		window.location = "index_formular.php?a=1";
		}
</script>
</head>

<body>
<?php
require_once("header.php");
require_once("meniu.php");

?>
<form action = "procesare.php" method = "post">
  <table id= "tabel">
  	<tr>
     <td>Nume</td>
     <td><input type = "text" name = "nume"/></td>
    </tr>
    <tr>
     <td>Prenume</td>
     <td><input type = "text" name = "prenume"/></td>
    </tr>
    <tr>
     <td>CNP</td>
     <td><input type = "text" name = "cnp"/></td>
    </tr>
    <tr>
     <td>Data sosirii</td>
     <td><input type = "date" name = "dataSos"/></td>
    </tr>
    <tr>
     <td>Data plecarii</td>
     <td><input type = "date" name = "dataP"/></td>
    </tr>
    <tr>
     <td>Numar persoane</td>
     <td><input type = "text" name = "nrPers"/></td>
    </tr>
    <tr>
     <td>Tip de camera</td>
     <td><input type = "text" name = "camera"/></td>
    </tr>
     <tr>
       <td><input class = "buton" type = "button" value = "Calculeaza" onclick = "afisare()"/></td>
            <td><input class = "buton" type = "submit" value = "OK"/></td>
    </tr>
    
  </table>
   </form>
   <?php
  if(isset($_GET['a'])){
	require_once("persoane.php");
	$f = fopen("persoane.txt", "r");
	echo "<table id='tabel2'>";
	while(!feof($f)){
		$linie = fgets($f);
		if($linie != ""){
			echo "<tr>";
		$a = explode(",", $linie);
		$per = new Persoane($a[0], $a[1], $a[2], $a[3], $a[4], $a[5], $a[6]);
		for($i=0; $i < sizeof($a); $i++){
			echo "<td>".$a[$i]."</td>";
			}
		echo "<td>".$per -> calculNrZile()."</td>";
		echo "<td>".$per -> calculCamere()."</td>";
		echo "</tr>";
	      }
	}
		 echo "</table>";
		 fclose($f); 
} 
   
   ?>
<!--<img class = "col-md-4" src = "./img/large1.png" /> -->

</body>
</html>