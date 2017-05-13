
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
	<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
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
			<li class=""><a href="http://localhost/tugasbasdat/development/registration.php">Register</a></li>
            <li class=""><a href="http://localhost/tugasbasdat/development/pemilihan_jenjang_pendaftaran.php">Buat Pendaftaran<span class="sr-only">(current)</span></a></li>
            <li><a href="http://localhost/tugasbasdat/development/pemilihan_jenjang_riwayat.php">Rekap Pendaftaran</a></li>
			<li><a href="http://localhost/tugasbasdat/development/pemilihan_prodi_riwayat.php">Daftar Pelamar Diterima</a></li>
			<li class="active"><a href="http://localhost/tugasbasdat/development/lihat_riwayat_pendaftaran.php">Riwayat Pendaftaran</a></li>
            <li><a href="http://localhost/tugasbasdat/development/lihat_kartu_ujian.php">Kartu Ujian</a></li>
            <li><a href="http://localhost/tugasbasdat/development/lihat_seleksi.php" >Hasil Seleksi</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="margin-top: 60px;">
			<h1 style="text-align: center;">Lihat Riwayat Pendaftar</h1><br>
			<label style="padding-bottom:10px;"><i>Nama Lengkap: Tania Putri</i></label>
				<table class="table table-striped" id="pendaftar" style="margin-top:10px;">
					<thead>
					  <tr>
						<th>Id Pendaftaran</th>
						<th>Nomor Periode</th>
						<th>Tahun Periode</th>
						<th>No Kartu Ujian</th>
						<th>Jalur</th>
						<th>Prodi 1</th>
						<th>Prodi 2</th>
						<th>Prodi 3</th>
					  </tr>
					</thead>
					<tbody>
					  <tr>
						<td><a href = "pendaftaran_uui.php">5193</a></td>
						<td>1</td>
						<td>2017</td>
						<td>9845</td>
						<td>UUI</td>
						<td>S1 Matematika Reguler</td>
						<td>S1 Ilmu Komputer Reguler</td>
						<td></td>
					  </tr>
					   <tr>
						<td><a href = "pendaftaran_semas_sarjana.php">1764</a></td>
						<td>2</td>
						<td>2017</td>
						<td>1234512345</td>
						<td>SEMAS SARJANA</td>
						<td>S1 Ilmu Komputer Reguler </td>
						<td>S1 Biologi Reguler</td>
						<td>S1 Fisika Reguler</td>
					  </tr>
					  <tr>
						<td><a href = "pendaftaran_semas_pascasarjana.php">5634</a></td>
						<td>3</td>
						<td>2017</td>
						<td>123482345</td>
						<td>SEMAS PASCASARJANA</td>
						<td>S1 Ilmu Komputer Reguler </td>
						<td>S1 Biologi Reguler</td>
						<td>S1 Fisika Reguler</td>
					  </tr> 
					</tbody>
			</table>
       
        </div>
      </div>
    </div>
  </body>
<script>
$(document).ready(function() {
    $('#pendaftar').DataTable();
	
});
</script>
</html>
