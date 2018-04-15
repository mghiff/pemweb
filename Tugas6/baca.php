<?php
	$file = "data.txt";
	$result = file_get_contents($file);
	$baris = explode("[R]", $result);
		echo "<div class= 'table100 ver3 m-b-110'>";
		echo "<div class= 'table100-head'>";
		echo "<table>";
		echo "<thead>";
		echo "<tr class='row100 head'>";
		echo "  <th class='cell100 column1'>Nama</th>";
		echo "  <th class='cell100 column2'>Email</th>";
		echo "	<th class='cell100 column3'>Nomor HP</th>";
		echo "  <th class='cell100 column4'>Alamat</th>";
		echo "	<th class='cell100 column5'>Delete</th>";
		echo "	<th class='cell100 column6'>Edit</th>";
		echo "</tr>";
		echo "</thead>";
		echo "</table>";
		echo "</div>";
	for($i =0; $i<count($baris)-1; $i++) {
    	//echo $b . "<br>";
    	$col = explode("|F|", $baris[$i]);
    	echo "<div class='table100-body js-pscroll'>";
    	echo "<table>";
    	echo "<tbody>";
    	echo "<tr class='row100 body'>";
    	echo "  <td class='cell100 column1'>" . $col[0] . "</td>";
    	echo "  <td class='cell100 column2'>" . $col[1] . "</td>";
    	echo "  <td class='cell100 column3'>" . $col[2] . "</td>";
    	echo "	<td class='cell100 column4'>" . $col[3] . "</td>";
    	echo '  <td class=\"cell100\ column5"> <a href="delete.php?row='.$i.'">Delete</a> </td>';
    	echo '  <td class=\"cell100\ column6"> <a href="edit.php?row='.$i.'">Edit</a> </td>';
    	echo "</tr>";
    	echo "</tbody>";
    	echo "</table>";
    	echo "</div>"; }
    	echo "</div>";
		 ?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Data</title>
		<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
		<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
		<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
		<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
		<link rel="stylesheet" type="text/css" href="main.css">
		<link rel="stylesheet" type="text/css" href="util.css">
	</head>
	</html>
