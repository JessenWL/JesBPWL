<?php
include '../model/database.php';

$db = new database();

$aksi = $_GET['aksi'];
 if ($aksi == "tambah"){
 	$db->input($_POST['program'],$_POST['nama'],$_POST['email'],$_POST['nilsm1'],$_POST['nilsm2'],$_POST['nilsm3'],$_POST['nilsm4']);
 	header("location:/BPWL/UTS/view/admin.php");
 }elseif ($aksi == "hapus") {
 	$db->hapus($_GET['id']);
 	header("location:/BPWL/UTS/view/admin.php");
 }elseif ($aksi ==  "update") {
 	$db->update($_POST['id'],$_POST['nama'],$_POST['program'],$_POST['email'],$_POST['nilsm1'],$_POST['nilsm2'],$_POST['nilsm3'],$_POST['nilsm4']);
 	header("location:/BPWL/UTS/view/admin.php");
 }
 ?>
