<?php
include('config.php');

$login_button="";
if(isset($_GET["code"])){
    $token = $google_client->fetchAccessTokenWithAuthCode ($_GET["code"]);
    if(!isset($token['error'])){
        $google_client->setAccessToken($token['access_token']);
        $_SESSION['access_token'] = $token['access_token'];
        $google_service = new Google_Service_Oauth2($google_client);
        $data = $google_service->userinfo->get();
        //print_r ($data);
        if(!empty($data['name'])){
            $_SESSION['name'] = $data['name'];
        }
        if(!empty($data['family_name'])){
            $_SESSION['user_last_name'] = $data['family_name'];
        }
        if(!empty($data['email'])){
            $_SESSION['user_email_address'] = $data['email'];
        }
        if(!empty($data['gender'])){
            $_SESSION['user_gender'] = $data['gender'];
        }else{
            $_SESSION['user_gender']="-";
        }
        if(!empty($data['picture'])){
            $_SESSION['user_image'] = $data['picture'];
        }
    }
}
if(!isset($_SESSION['access_token'])){
        $login_button = '<a href="'.$google_client->createAuthUrl().'"><img
            src="../resource/img/login.png" max width=30 /></a>';
}

?>
<!--===============================================================================================-->
<?php
	include '../model/database.php';
	$db = new database();
?>
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
<div class="limiter">
	<div class="container-table100">		
		<div class="wrap-table100">
			<h3>____________</h3>
			<h2>Data Pelajar</h2>
			<h3>‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾</h3>
			<div class="table100 ver1 m-b-110">
				<table data-vertable="ver1">
<!--===============================================================================================-->
					<thead>
						<tr class="row100 head">
							<th class="column100 column2" data-column="column2"></th>
							<th class="column100 column2" data-column="column2">NIP</th>
							<th class="column100 column3" data-column="column3">Program Studi</th>
							<th class="column100 column4" data-column="column4">Nama</th>
							<th class="column100 column5" data-column="column5">Email</th>
							<th class="column100 column6" data-column="column6">Rata Rata Semester 1</th>
							<th class="column100 column7" data-column="column7">Rata Rata Semester 2</th>
							<th class="column100 column8" data-column="column8">Rata Rata Semester 3</th>
							<th class="column100 column9" data-column="column9">Rata Rata Semester 4</th>
						</tr>
					</thead>
<!--===============================================================================================-->
					<?php
						$no = 1;
						foreach($db->tampil_data() as $x){
					?>
						<tbody>
							<tr class="row100">
								<td class="column100 column2" data-column="column2"><?php echo $no++; ?></td>
								<td class="column100 column2" data-column="column2"><?php echo $x['id']; ?></td>
								<td class="column100 column3" data-column="column3"><?php echo $x['program']; ?></td>
								<td class="column100 column4" data-column="column4"><?php echo $x['nama']; ?></td>
								<td class="column100 column5" data-column="column5"><?php echo $x['email']; ?></td>
								<td class="column100 column6" data-column="column6"><?php echo $x['nilsm1']; ?></td>
								<td class="column100 column7" data-column="column7"><?php echo $x['nilsm2']; ?></td>
								<td class="column100 column8" data-column="column8"><?php echo $x['nilsm3']; ?></td>
								<td class="column100 column9" data-column="column9"><?php echo $x['nilsm4']; ?></td>
							</tr>
						</tbody>
					<?php
						}
					?>
<!--===============================================================================================-->
				</table>
			</div>
        </div>
	</div>
</div>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="js/main.js"></script>
<!--===============================================================================================-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='
        viewport'/>
        <script src="https://ajax.googleapis.com/ajax/libs/
        jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/
        bootstrap.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/
        bootstrap.min.css" rel="stylesheet" />
    </head>
<!--===============================================================================================-->
    <body>
        <div class="table100 ver2 m-b-110">
			<table data-vertable="ver2">
				<thead>
					<tr class="row100 head">
						<th class="column100 column1" data-column="column1">
							<div class="panel panel-default">
<!--===============================================================================================-->
								<?php
									if($login_button =='')
										{
										echo '<h3><b>Username : </b>'.$_SESSION['name'].'</h3><br></br>';
										echo '<div><a href="\BPWL\UTS\view\logout.php" class="btn btn-primary">Logout</a></div> ';
										echo '<br></br>';
										echo '<div><a href="\BPWL\UTS\view\admin.php" class="btn btn-primary">Settings</a></div>';
										}
									else
										{
										echo '<div align="left">' .$login_button.'</div>';
										}
								?>
<!--===============================================================================================-->
							</div>
						</th>
						<th class="column100 column2" data-column="column2"></th>
						<th class="column100 column3" data-column="column3"></th>
						<th class="column100 column4" data-column="column4"></th>
						<th class="column100 column5" data-column="column5"></th>
						<th class="column100 column12" data-column="column12">Made By Jessen Wind Lim - 1TIE</th>
<!--===============================================================================================-->
					</tr>
				</thead>
			</table>
        </div>
    </body>

</html>

