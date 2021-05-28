<!--===============================================================================================-->	

	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

<!--===============================================================================================-->

<form action="../controller/proses.php?aksi=tambah" method="post">
<div class="limiter">
	<div class="container-table100">
		<div class="wrap-table50">
			<div class="table100 ver1 m-b-110">
				<table data-vertable="ver1">
                    <!--===============================================================================================-->	
					<thead>
						<tr class="row100 head">
							<th class="column100 column1" data-column="column1"></th>
							<th class="column100 column2" data-column="column2">Isi Dibawah</th>
						</tr>
					</thead>
                    <!--===============================================================================================-->	
                    <tbody>
						<tr class="row100">
							<td class="column100 column1" data-column="column1">Program</td>
							<td>
							<select name="program">  
							<option value="Empty">Select</option>}  
							<option value="Teknik Informatika">Teknik Informatika</option>  
							<option value="Sistem Informasi">Sistem Informasi</option>  
							<option value="Arsitektur">Arsitektur</option>  
							<option value="Mekatronika">Mekatronika</option>
							<option value="Teknik Elektronika">Teknik Elektronika</option>
							<option value="Akuntansi">Akuntansi</option>
							</select>  
							</td>
						</tr>
						<tr class="row100">
							<td class="column100 column1" data-column="column1">Nama Lengkap</td>
							<td><input type="text" name="nama"></td>
						</tr>
						<tr class="row100">
							<td class="column100 column1" data-column="column1">Email</td>
							<td><input type="text" name="email"></td>
						</tr>
						<tr class="row100">
							<td class="column100 column1" data-column="column1">Nilai Semester 1</td>
							<td><input type="number" name="nilsm1"></td>
						</tr>
						<tr class="row100">
							<td class="column100 column1" data-column="column1">Nilai Semester 2</td>
							<td><input type="number" name="nilsm2"></td>
						</tr>
						<tr class="row100">
							<td class="column100 column1" data-column="column1">Nilai Semester 3</td>
							<td><input type="number" name="nilsm3"></td>
						</tr>
						<tr class="row100">
							<td class="column100 column1" data-column="column1">Nilai Semester 4</td>
							<td><input type="number" name="nilsm4"></td>
						</tr>
						<tr class="row100">
							<td class="column100 column1" data-column="column1"></td>
							<td><input type="submit" value="Simpan"></td>
						</tr>
					</tbody>
                    <!--===============================================================================================-->	
				</table>
			</div>
        </div>
	</div>
</div>
</form>
<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/select2/select2.min.js"></script>
<script src="js/main.js"></script>
<!--===============================================================================================-->

