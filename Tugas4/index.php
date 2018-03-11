<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pendaftaran Calon Mahasiswa Baru</title>
	<h2><center>Formulir Pendaftaran</center></h2>
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
		.button {
    	background-color: teal;
    	border: none;
    	color: white;
    	padding: 10px 20px;
    	text-align: center;
    	text-decoration: none;
    	display: inline-block;
    	font-size: 12px;
    	margin: 4px 2px;
    	cursor: pointer;
		}
		textarea {
			resize: none;
		}
	</style>
</head>
<body>
<div class="container">
	<form action="formUI2.php" method="POST" enctype="multipart/form-data" id="usrform">
		<label>Nama Depan : </label>
		<input type="text" name="FirstName" value="" ><br><br>
		<label>Nama Belakang  : </label>
		<input type="text" name="LastName" value="" ><br><br>
		<label>Nama Keluarga  : </label>
		<input type="text" name="Surname" value="" ><br><br>
		<label>Tempat/Tanggal Lahir : </label>
		<input type="text" name="Surname1" value="" placeholder="Kota, dd/mm/yyyy"><br><br>
		<label>Alamat Asal : </label><br>
	<textarea rows="4" cols="50" name="comment" form="usrform" ></textarea><br><br>
		<label>Alamat di Bandung : </label><br>
	<textarea rows="4" cols="50" name="comment1" form="usrform" ></textarea><br><br>
		<label>Nomor Telepon : </label>
		<input id="phone" type="tel" name="tlp1" value="" ><br><br>
	    <label>Nomor Handphone : </label>
	    <input id="phone" type="tel" name="hp1" value="" ><br><br>
		Agama : 
		<input type="radio" name="relg" value="Islam"> Islam
  		<input type="radio" name="relg" value="Kristen"> Kristen
  		<input type="radio" name="relg" value="Katolik"> Katolik<br>
  		<input type="radio" name="relg" value="Hindu"> Hindu
  		<input type="radio" name="relg" value="Buddha"> Buddha<br>
  		<input type="radio" name="relg" value="Kong Hu Chu"> Kong Hu Chu <br><br>
  		<label>NISN : </label>
  		<input type="text" name="numb1" value="" ><br><br>
  		<label>Asal Sekolah : </label>
  		<input type="text" name="progsc" value="" ><br><br>
  		<label>Alamat Sekolah : </label><br>
	<textarea rows="4" cols="50" name="comment2" form="usrform" ></textarea><br><br>
  		Program : <select>
  		<option value="Cour1" name="orse">IPA</option>
  		<option value="Cour2" name="orse">IPS</option>
  		<option value="Cour3" name="orse">IBB</option>
  		<option value="Cour4" name="orse">Lain-Lain</option>
	</select>
	<br><br>
		<label>Tahun Kelulusan : </label>
		<input type="text" name="numb2" value="" ><br><br>
  		<label>E-mail: </label>
  		<input type="email" name= "email" id="email" value="" placeholder="example@domain.com"><br><br>
  		<label>Nama Orangtua (Ayah) : </label>
  		<input type="text" name="Ay" value=""><br><br>
		<label>Nama Orangtua (Ibu) : </label>
		<input type="text" name="Ibu" value=""><br><br>
		Pekerjaan Orangtua : <br> 
		<input type="radio" name="job" value="PNS"> PNS
  		<input type="radio" name="job" value="ABRI"> ABRI
  		<input type="radio" name="job" value="BUMN"> BUMN
  		<input type="radio" name="job" value="Swasta"> Swasta
  		<input type="radio" name="job" value="Buruh"> Buruh
  		<input type="radio" name="job" value="Wirausaha / Niaga"> Wirausaha / Niaga
  		<input type="radio" name="job" value="other"> Lain - Lain <br><br>
  		<label>Alamat Orangtua : </label><br>
	<textarea rows="4" cols="50" name="comment3" form="usrform"></textarea><br><br>
		<label>Nomor Telepon : </label>
		<input id="phone" type="tel" name="tlp2" value=""><br><br>
    	<label>Pilih File untuk Menunjukkan Kartu Identitas Anda (KTP/SIM/PASPOR) <br>
    	Select image to Upload : </label>
    <img id="uploadPreview" style="width : 400px; height: 400px;">
    <input id="uploadImage" type="file" name="fileToUpload" onchange="PreviewImage();" placeholder="fileToUpload">
    	<script type="text/javascript">
    		function PreviewImage() {
    			var oFReader = new FileReader();
    			oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
    			oFReader.onload = function (oFREvent) {
    			document.getElementById("uploadPreview").src = oFREvent.target.result;
    			};
    		};
    	</script>
    	<br><br>
        <label>Pilih untuk Kesanggupan Biaya UKT </label><br>
		<input type="radio" name="ukt" value="">Rp. 6.500.000 - Rp. 7.500.000<br>
		<input type="radio" name="ukt" value="">Rp. 7.500.001 - Rp. 10.000.000<br>
		<input type="radio" name="ukt" value="">Rp. 10.000.001 - Rp. 12.000.000<br>
		<input type="radio" name="ukt" value="">Rp. 12.000.001 =<<br>
		<input type="radio" name="ukt" value="">Lain - Lain<br>
	<br>
	<label>Program Studi yang ingin dituju </label><br>
	
  		<input type="radio" name="prods">Sistem Teknologi Informasi
  		<input type="radio" name="prods">Teknik Elektro
  		<input type="radio" name="prods">Manajemen Rekayasa Industri
  		<input type="radio" name="prods">Teknik Informatika
  		<input type="radio" name="prods">Teknik Biomedis
  		<input type="radio" name="prods">Teknik Tenaga Listrik
	
	<br>
		<a href="https://stei.itb.ac.id/id/pendidikan/program-studi/" class="button">Link Penjelasan Program Studi</a><br><br>    
	<input type="submit" name="UploadForm" onclick="alert('Apa Anda Yakin dengan Isi Formulir Anda ?')">
	</form>
	</div>
	</body>
</html>
