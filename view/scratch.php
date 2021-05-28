<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<div class="limiter">
	<div class="container-table100">
		<div class="wrap-table100">
			<div class="table100 ver1 m-b-110">
				<table data-vertable="ver1">
                    <!--===============================================================================================-->	
					<thead>
						<tr class="row100 head">
							<th class="column100 column1" data-column="column1"></th>
							<th class="column100 column2" data-column="column2">Sunday</th>
							<th class="column100 column3" data-column="column3">Monday</th>
							<th class="column100 column4" data-column="column4">Tuesday</th>
							<th class="column100 column5" data-column="column5">Wednesday</th>
							<th class="column100 column6" data-column="column6">Thursday</th>
							<th class="column100 column7" data-column="column7">Friday</th>
							<th class="column100 column8" data-column="column8">Saturday</th>
						</tr>
					</thead>
                    <!--===============================================================================================-->	
                    <tbody>
						<tr class="row100">
							<td class="column100 column1" data-column="column1">Lawrence Scott</td>
							<td class="column100 column2" data-column="column2">8:00 AM</td>
							<td class="column100 column3" data-column="column3">--</td>
							<td class="column100 column4" data-column="column4">--</td>
							<td class="column100 column5" data-column="column5">8:00 AM</td>
							<td class="column100 column6" data-column="column6">--</td>
							<td class="column100 column7" data-column="column7">5:00 PM</td>
							<td class="column100 column8" data-column="column8">8:00 AM</td>
						</tr>
					</tbody>
                    <!--===============================================================================================-->	
				</table>
			</div>
        </div>
	</div>
</div>
<!--===============================================================================================-->	
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
<div class="table100 ver2 m-b-110">
	<table data-vertable="ver2">
		<thead>
			<tr class="row100 head">
				<th class="column100 column1" data-column="column1"><a href="input.php">Admin Login</a></th>
				<th class="column100 column2" data-column="column2"></th>
				<th class="column100 column3" data-column="column3"></th>
				<th class="column100 column4" data-column="column4"></th>
				<th class="column100 column5" data-column="column5"></th>
				<th class="column100 column12" data-column="column12">Made By Jessen Wind Lim - 1TIE</th>
			</tr>
		</thead>
	</table>
</div>

<!--===============================================================================================-->

<table>
	<tr>
		<td>Program</td>
		<td>
		<select name="program">  
  		<option value="Empty">Select</option>}  
  		<option value="PROGRAM REGULER D3 DAN D4">PROGRAM REGULER D3 DAN D4</option>  
  		<option value="PROGRAM MAGISTER">PROGRAM MAGISTER</option>  
  		<option value="PROGRAM NON REGULER SLTA KE D3">PROGRAM NON REGULER SLTA KE D3</option>  
		<option value="PROGRAM ALIH JENJANG D3 KE D4">PROGRAM ALIH JENJANG D3 KE D4</option>
		</select>  
		</td>
	</tr>
	<tr>
		<td>Nama Lengkap</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name="email"></td>
	</tr>
	<tr>
		<td>Nilai Semester 1</td>
		<td><input type="number" name="nilsm1"></td>
	</tr>
	<tr>
		<td>Nilai Semester 2</td>
		<td><input type="number" name="nilsm2"></td>
	</tr>
	<tr>
		<td>Nilai Semester 3</td>
		<td><input type="number" name="nilsm3"></td>
	</tr>
	<tr>
		<td>Nilai Semester 4</td>
		<td><input type="number" name="nilsm4"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>

<!--===============================================================================================-->

<table>
	<tr>
		<td>Nama</td>
		<td>
			<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
			<input type="text" name="nama" value="<?php echo $d['nama'] ?>">
		</td>
	</tr>
	<tr>
		<td>Program</td>
		<td>
		<select>  
  		<option value="Empty">Select</option>}  
  		<option value="PROGRAM REGULER D3 DAN D4">PROGRAM REGULER D3 DAN D4</option>  
  		<option value="PROGRAM MAGISTER">PROGRAM MAGISTER</option>  
  		<option value="PROGRAM NON REGULER SLTA KE D3">PROGRAM NON REGULER SLTA KE D3</option>  
		<option value="PROGRAM ALIH JENJANG D3 KE D4">PROGRAM ALIH JENJANG D3 KE D4</option>
		</select>  
		</td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name="email" value="<?php echo $d['email'] ?>">
	</tr>
	<tr>
		<td>Nilai Semester 1</td>
		<td><input type="number" name="nilsm1" value="<?php echo $d['nilsm1'] ?>">
	</tr>
	<tr>
		<td>Nilai Semester 2</td>
		<td><input type="number" name="nilsm2" value="<?php echo $d['nilsm2'] ?>">
	</tr>
	<tr>
		<td>Nilai Semester 3</td>
		<td><input type="number" name="nilsm3" value="<?php echo $d['nilsm3'] ?>">
	</tr>
	<tr>
		<td>Nilai Semester 4</td>
		<td><input type="number" name="nilsm4" value="<?php echo $d['nilsm4'] ?>">
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan">
	</tr>
</table>