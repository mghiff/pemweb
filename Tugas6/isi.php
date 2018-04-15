<?php
		$file = "data.txt";
		$Name = $_POST['Nama'];
		$Email = $_POST['Email'];
		$Number = $_POST ['Nomor'];
		$Address = $_POST ['Alamat'];
		$data = $Name  . "|F|" . 
       		 	$Email . "|F|" . 
        		$Number . "|F|".
        		$Address . "[R]";
		$handle = fopen($file, "a+");
			fwrite($handle, $data);
			fclose($handle);
			header('location:page1.php');