<!DOCTYPE html>
<html>
<head>
	
	<meta charset="UTF-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="generator" content="Mobirise v4.6.6, mobirise.com">
  	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  	<link rel="shortcut icon" href="assets/images/logo4.png" type="image/x-icon">
  	<meta name="description" content="Web Creator Description">
  	<title>Index</title>
  	<link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  	<link rel="stylesheet" href="assets/tether/tether.min.css">
  	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  	<link rel="stylesheet" href="assets/theme/css/style.css">
  	<link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  	
</head>
<body>
<section class="cid-qRfM8Fch35 mbr-fullscreen mbr-parallax-background" id="header15-s">
<div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(35, 35, 35);"></div>

<div class="container align-right">
<div class="row">
    <div class="mbr-white col-lg-8 col-md-7 content-container">
        <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
            Selamat Datang</h1>
        <p class="mbr-text pb-3 mbr-fonts-style display-5">
            Silahkan isi form berikut untuk mendapatkan Nomor Ujian Anda</p>
    </div>
    <div class="col-lg-4 col-md-5">
    <div class="form-container">
     <div class="media-container-column" data-form-type="formoid">
		<form class="mbr-from" action="formUI2.php" method="POST" enctype="multipart/form-data" id="usrform">
				<div data-for="name">
                    <div class="form-group">
                        <input type="text" class="form-control px-3" name="names" data-form-field="Name" placeholder="Name" required="" id="name-header15-s">
                    </div>
                </div>
				<div data-for="email">
                    <div class="form-group">
                        <input type="email" class="form-control px-3" name="email" data-form-field="Email" placeholder="Email" required="" id="email-header15-s">
                    </div>
                </div>
                <div data-for="phone">
                    <div class="form-group">
                        <input type="tel" class="form-control px-3" name="nisn" data-form-field="Phone" placeholder="NISN" id="phone-header15-s">
                    </div>
                </div>
  		
    	<label style="color: white;">Pilih File untuk Menunjukkan Kartu Identitas Anda (KTP/SIM/PASPOR) <br>
    	Select image to Upload : </label>
    <img id="uploadPreview" style="width : 250px; height: 250px;"><br><br>
    <input id="uploadImage" type="file" name="fileToUpload" onchange="PreviewImage();" placeholder="fileToUpload" style="color: white;">
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
	<br>
	<label style="color: white;">Program Studi yang ingin dituju </label><br><br>
	
  		<input type="radio" class="filled-in" id="STI" name="prodi[]" value="Sistem Teknologi Informasi"/><label for="STI" style="color: white;">Sistem Teknologi Informasi</label><br>
  		<input type="radio" class="filled-in" id="TE" name="prodi[]" value="Teknik Elektro"/><label for="TE" style="color: white;">Teknik Elektro</label><br>
  		<input type="radio" class="filled-in" id="MRI" name="prodi[]" value="Manajemen Rekayasa Industri"/><label for="MRI" style="color: white;">Manajemen Rekayasa Industri</label><br>
  		<input type="radio" class="filled-in" id="TIF" name="prodi[]" value="Teknik Informatika"/><label for="TIF" style="color: white;">Teknik Informatika</label><br>
  		<input type="radio" class="filled-in" id="TBO" name="prodi[]" value="Teknik Biomedis"/><label for="TBO" style="color: white;">Teknik Biomedis</label><br>
  		<input type="radio" class="filled-in" id="TKL" name="prodi[]" value="Teknik Tenaga Listrik"/><label for="TKL" style="color: white;">Teknik Tenaga Listrik</label><br>
	<br>
		<a href="https://stei.itb.ac.id/id/pendidikan/program-studi/" class="button">Link Penjelasan Program Studi</a><br><br>    
	<span class="input-group-btn"><button href="" type="submit" class="btn btn-form btn-primary display-4" name="UploadForm" 
	onclick="alert('Apa Anda Yakin dengan Isi Formulir Anda ?')">SEND FORM</button></span>
		</form>
	</div>
	</div>
	</div>
	</div>
	</section>
	<section class="engine"><a href="https://mobirise.ws/m"></a></section><script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
	</body>
</html>