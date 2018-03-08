<?php
	$total2 = 0; 
	if (isset($_POST["submit"])) {
	$a = $_POST['Panjang'];
	$b = $_POST['Lebar'];
	$c = $_POST['Tinggi'];
		
		function Resulting($a, $b, $c){
			$total = (($a * $b) * $c)/3;
			return $total;
		} 
		$total2 = Resulting($a, $b, $c);
	}
?>

<form method="post" action="">    
    Ketik Panjang : <input type="text" name="Panjang"><br><br>
    Ketik Lebar : <input type="text" name="Lebar"><br><br>
    Ketik Tinggi : <input type="text" name="Tinggi"><br><br>
    <input type="submit" value="Upload" name="submit"><br><br>
   	Volume Limas Segiempat : <input type="text" name="Volume" value="<?php echo $total2 ?>">
</form>