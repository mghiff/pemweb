<?php
	$file = "data.txt";
		$Name = $_POST['Nama'];
		$Email = $_POST['Email'];
		$Number = $_POST ['Nomor'];
		$Address = $_POST ['Alamat'];
		$edit = $Name  . "|F|" . 
        		$Email . "|F|" . 
        		$Number . "|F|" .
        		$Address . "[R]";
		$result = file_get_contents($file);
		$rowedit = $_POST['row'];
		$baris = explode("[R]", $result);
		$databaru = "";
		for($i = 0; $i < count($baris)-1; $i++) {
    		if($i == $rowedit) {
    			$databaru .= $edit;
    			continue; }
    		$databaru .= $baris[$i] . "[R]"; }
		file_put_contents($file, $databaru);
		header('location:baca.php');