
<!DOCTYPE html>
<html lang="en">
  <head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://localhost/tugasbasdat/development/bootstrap/css/bootstrap.min.css" rel="stylesheet"/> 	
    <script src="https://localhost/tugasbasdat/development/bootstrap/js/bootstrap.min.js"></script>
	<script src="https://localhost/tugasbasdat/development/datepicker.js"></script>
	<link rel="stylesheet" href="https://localhost/tugasbasdat/development/datepicker.css"/>
  </head>
<style>
/*
 * Base structure
 */

/* Move down content because we have a fixed navbar that is 50px tall */
body {
  padding-top: 50px;
}


/*
 * Global add-ons
 */

.sub-header {
  padding-bottom: 10px;
  border-bottom: 1px solid #eee;
}

/*
 * Top navigation
 * Hide default border to remove 1px line.
 */
.navbar-fixed-top {
  border: 0;
}

/*
 * Sidebar
 */

/* Hide for mobile, show later */
.sidebar {
  display: none;
}
@media (min-width: 768px) {
  .sidebar {
    position: fixed;
    top: 51px;
    bottom: 0;
    left: 0;
    z-index: 1000;
    display: block;
    padding: 20px;
    overflow-x: hidden;
    overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
    background-color: #f5f5f5;
    border-right: 1px solid #eee;
  }
}

/* Sidebar navigation */
.nav-sidebar {
  margin-right: -21px; /* 20px padding + 1px border */
  margin-bottom: 20px;
  margin-left: -20px;
}
.nav-sidebar > li > a {
  padding-right: 20px;
  padding-left: 20px;
}
.nav-sidebar > .active > a,
.nav-sidebar > .active > a:hover,
.nav-sidebar > .active > a:focus {
  color: #fff;
  background-color: #428bca;
}


/*
 * Main content
 */

.main {
  padding: 20px;
}
@media (min-width: 768px) {
  .main {
    padding-right: 40px;
    padding-left: 40px;
  }
}
.main .page-header {
  margin-top: 0;
}


/*
 * Placeholder dashboard ideas
 */

.placeholders {
  margin-bottom: 30px;
  text-align: center;
}
.placeholders h4 {
  margin-bottom: 0;
}
.placeholder {
  margin-bottom: 20px;
}
.placeholder img {
  display: inline-block;
  border-radius: 50%;
}
.custom-nav{
  background-color: rgb(0, 33, 71) ! important; 
  height: 150px; 
  position: relative; 
  top: 0px; 
  margin-top: -50px;
}

.fixedTop {
  top: 0;
  margin: 0 !important;
}
</style>
  <body>
  <script>	
	$(document).ready(function(){
		$('#dp2').datepicker();
	});
  </script>
    <div class="navbar navbar-inverse navbar-fixed-top" style="background-color: rgb(0, 33, 71); margin-top: 50px;">
	   <?php include "header.php"; ?>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar"  style="margin-top: 40px;">
          <ul class="nav nav-sidebar">
			<li class="active"><a href="http://localhost/tugasbasdat/development/registration.php">Register</a></li>
            <li class=""><a href="http://localhost/tugasbasdat/development/pemilihan_jenjang_pendaftaran.php">Buat Pendaftaran<span class="sr-only">(current)</span></a></li>
            <li><a href="http://localhost/tugasbasdat/development/pemilihan_jenjang_riwayat.php">Rekap Pendaftaran</a></li>
			<li><a href="http://localhost/tugasbasdat/development/pemilihan_prodi_riwayat.php">Daftar Pelamar Diterima</a></li>
			<li><a href="http://localhost/tugasbasdat/development/lihat_riwayat_pendaftaran.php">Riwayat Pendaftaran</a></li>
            <li><a href="http://localhost/tugasbasdat/development/lihat_kartu_ujian.php">Kartu Ujian</a></li>
            <li><a href="http://localhost/tugasbasdat/development/lihat_seleksi.php" >Hasil Seleksi</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="margin-top: 60px;">
			<form>
				<h3>Form Pendaftaran Pelamar</h3>
			  <div class="form-group">
				<label for="username">Username</label>
				<input type="text" class="form-control" id="email" placeholder="Masukkan username">
			  </div>
			  <div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" id="password" placeholder="Password">
			  </div>
			   <div class="form-group">
				<label for="retype_password">Ulangi Password</label>
				<input type="password" class="form-control" id="retype_password" placeholder="Password">
			  </div>
			  <div class="form-group">
				<label for="nama">Nama Lengkap</label>
				<input type="text" class="form-control" id="nama" placeholder="Nama">
			  </div>
			  <div class="form-group">
				<label for="no_identitas">Nomor Identitas</label>
				<input type="text" class="form-control" id="no_identitas" placeholder="Nomor Identitas">
			  </div>
			  <div class="form-group">
				<label for="jenis_kelamin">Jenis Kelamin</label>
				<select class="form-control" id="jenis_kelamin">
				  <option>Laki-laki</option>
				  <option>Perempuan</option>
				</select>
			  </div>
			  <div class="form-group">
				<label for="exampleSelect2">Tanggal Lahir</label>
				 <div class="well">
					<!--<button id="btn2" style="float: right">manual set to 03/17/12</button>-->
					<input type="text" class="span2" value="02/16/12" data-date-format="mm/dd/yy" id="dp2" >
				  </div>
			  </div>
			  <div class="form-group">
				<label for="alamat">Alamat</label>
				<textarea class="form-control" id="alamat" rows="3"></textarea>
			  </div>
			   <div class="form-group">
				<label for="email">Alamat Email</label>
				<input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Masukkan email" />
			  </div>
			  <div class="form-group">
				<label for="retype_email">Ulangi Email</label>
				<input type="email" class="form-control" id="retype_email" aria-describedby="emailHelp" placeholder="Masukkan email" />
			  </div>
			  <button type="submit" class="btn btn-primary">Daftar</button>
			</form>
        </div>
      </div>
    </div>
  </body>

</html>
