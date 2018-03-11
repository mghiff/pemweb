<?php

	$FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
	$Surnamefam = $_POST['Surname'];
	$ttl = $_POST['Surname1'];
	$alamatasal = $_POST['comment'];
	$alamatbdg = $_POST['comment1'];
	$notelp = $_POST['tlp1'];
	$nohp = $_POST['hp1'];
	$Agama = $_POST['relg'];
	$Nisn = $_POST['numb1'];
	$asalsekolah = $_POST['progsc'];
	$alamatsekolah = $_POST['comment2'];
	$tahunlulus = $_POST['numb2'];
	$email = $_POST['email'];
	$ortuay = $_POST['Ay'];
	$ortuib = $_POST['Ibu'];
	$pekerjaan = $_POST['job'];
	$alamatortu = $_POST['comment3'];
	$notelp2 = $_POST['tlp2'];
	$ukt = $_POST['ukt'];

	$fileToUpload = $_FILES['fileToUpload']['name'];
	$temp = $_FILES['fileToUpload']['temp_name'];
	move_uploaded_file($temp, $_SERVER['DOCUMENT_ROOT']."/Pemweb/formUI/".$fileToUpload);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pendaftaran</title>
	<style>
		body {
			background-color: dodgerblue;
			color: black;		
		}
		.container {
			width: 750px;
			clear: both;
			margin: auto;
			background-color: deepskyblue;
			border: white;
			border-style: solid;
			
		}
		.container input {
			width: 100%;
			clear: both;
			margin: auto;
		}
		textarea {
			resize: none;
		}
	</style>
</head>
<body>
	<div class="container">
	<center><h2>Formulir Pendaftaran</h2></center>
	<label>Nama Depan</label><br>
	<input type="text" name="FirstName" value="<?php echo $_POST["FirstName"] ?>" disabled><br>
	<label>Nama Belakang</label><br>
	<input type="text" name="LastName" value="<?php echo $_POST["LastName"]; ?>" 
	disabled><br>
	<label>Nama Keluarga</label><br>
	<input type="text" name="Surname" value="<?php echo $_POST["Surname"]; ?>" 
	disabled><br>
	<label>Tempat/Tanggal Lahir</label><br>
	<input type="text" name="Surname1" value="<?php echo $_POST["Surname1"]; ?>" 
	disabled><br>
	<label>Alamat Asal</label><br>
	<textarea rows="4" cols="50" readonly name="comment" form="usrform"><?php echo $_POST["comment"]; ?></textarea><br>
	<label>Alamat di Bandung</label><br>
	<textarea rows="4" cols="50" readonly name="comment1" form="usrform"><?php echo $_POST["comment1"]; ?></textarea><br>
	<label>Nomor Telepon</label><br>
	<input id="phone" type="tel" name="tlp1" value="<?php echo $_POST["tlp1"]; ?>" disabled><br>
	<label>Nomor Handphone</label><br>
	<input id="phone" type="tel" name="hp1" value="<?php echo $_POST["hp1"]; ?>" 
	disabled><br>
	<label>Agama</label><br>
	<?php echo $_POST["relg"]; ?><br>
	<label>NISN</label><br>
	<input type="text" name="numb1" value="<?php echo $_POST["numb1"]; ?>" 
	disabled><br>
	<label>Asal Sekolah</label><br>
	<input type="text" name="progsc" value="<?php echo $_POST["progsc"]; ?>" 
	disabled><br>
	<label>Alamat Sekolah</label><br>
	<textarea rows="4" cols="50" readonly name="comment2" form="usrform" ><?php echo $_POST["comment2"]; ?></textarea><br>
	<label>Program</label><br>
	<select>
	<option>IPA</option>
	<option>IPS</option>	
	<option>IBB</option>	
	<option>Lain-Lain</option>
	</select><br>
	<label>Tahun Kelulusan</label><br>
	<input type="text" name="numb2" value="<?php echo $_POST["numb2"]; ?>" 
	disabled><br>
	<label>Email</label><br>
	<input type="email" name= "email" id="email" value="<?php echo $_POST["email"]; ?>" disabled><br>
	<label>Nama Orangtua (Ayah)</label><br>
	<input type="text" name="Ay" value="<?php echo $_POST["Ay"]; ?>" 
	disabled><br>
	<label>Nama Orangtua (Ibu)</label><br>
	<input type="text" name="Ibu" value="<?php echo $_POST["Ibu"]; ?>"
	disabled><br>
	<label>Pekerjaan Orangtua</label><br>
	<?php echo $_POST["job"]; ?><br>
	<label>Alamat Orangtua</label><br>
	<textarea rows="4" cols="50" readonly name="comment3" form="usrform"><?php echo $_POST["comment3"]; ?></textarea><br>
	<label>Nomor Telepon</label><br>
	<input id="phone" type="tel" name="tlp2" value="<?php echo $_POST["tlp2"]; ?>"
	disabled><br>
	<label>Identitas</label><br>
	<?php echo '<img src="" width="300" height="300" />'; ?><br>
	<label>Kesanggupan UKT</label><br>
	<?php echo $_POST["ukt"]; ?><br>
	<label>Program Studi Tujuan</label><br>
	<?php echo $_POST["prods"]; ?><br>
	<img src="<?php echo $fileToUpload; ?>">
	</div>
</body>
</html>
<!-- Bolo Kidul RT/RW 006/004 Kelurahan Taji Kecamatan Juwiring Kabupaten Klaten
	 Jl. Cipaku Indah I RT/RW 012/003 Kel. Hegarmenah Kec. Setiabudi Kota Bandung
	 Jl. Merbabu No.13, Gayamprit, Klaten Sel., Kabupaten Klaten, Jawa Tengah 57423
	 sahidraharjo2@gmail.com
	 Sutrisno 00Raharjo
	 Kania Dwi Putri
	 <label>Kesanggupan UKT</label><br>
	<?php #echo $_POST["ukt"]; ?><br>
	<label>Program Studi Tujuan</label><br>
	<?php #echo $_POST["prods"]; ?><br>