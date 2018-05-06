<?php
	$name = $_POST['names'];
	$email = $_POST['email'];
	$nisn = $_POST['nisn'];
	$file = $_FILES['fileToUpload']['name'];
	$temp = $_FILES['fileToUpload']['tmp_name'];
	move_uploaded_file($temp, $_SERVER['DOCUMENT_ROOT']."/Pemweb/handler/".$file);
	$prodi = $_POST['prodi'];
?>

<!DOCTYPE html>
<html>
<head>
  		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  		<link rel="stylesheet" type="text/css" href="css/materialize.min.css" media="screen,projection"/>
  		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>

	<div class="row">
	<div class="col1 s12 m24">
		<div class="card cyan darken-3">
			<div class="card-content white-text">
		<span class="card-title">Data Calon Mahasiswa dan Nomor Ujian</span>
	</div>
	</div>
	</div>
	</div>
	<table class="highlight">
		<thead>
		<tr>
			<th>Nama</th>
			<th>Email</th>
			<th>NISN</th>
			<th>File Identitas Diri</th>
			<th>Program Studi</th>
		</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo $name; ?></td>
				<td><?php echo $email; ?></td>
				<td><?php echo $nisn; ?></td>
				<td><img src="<?php echo $file;?>"></td>
				<td><?php echo implode(", ",$prodi) ;?></td>
			</tr>
		</tbody>
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
	</table>
	</section>
	
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