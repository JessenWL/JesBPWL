<?php

class database{

	var $host ="localhost";
	var $uname ="root";
	var $pass ="";
	var $db = "pcrpmb";
	var $con;

	function __construct()
	{
		$this->con=mysqli_connect($this->host, $this->uname, $this->pass, $this->db); 
		mysqli_select_db($this->con, $this->db);
	}


	function tampil_data()
	{
		$data = mysqli_query($this->con,"select * from calonmhs");
		while($d = mysqli_fetch_array($data))
		{
			$hasil[] = $d;
		}
		return $hasil;
	}


	function input($nama,$program,$email,$nilsm1,$nilsm2,$nilsm3,$nilsm4)
	{
		mysqli_query($this->con,"insert into calonmhs values('','$nama','$program','$email','$nilsm1','$nilsm2','$nilsm3','$nilsm4')");
	}


	function hapus($id)
	{
		mysqli_query($this->con,"delete from calonmhs where id='$id'");
	}


	function edit($id){
		$data = mysqli_query($this->con,"select * from calonmhs where id='$id'");
		while($d = mysqli_fetch_array($data)){
			$hasil[]=$d;
		}
		return $hasil;
	}

	function update($id,$nama,$program,$email,$nilsm1,$nilsm2,$nilsm3,$nilsm4){
		mysqli_query($this->con,"update calonmhs set nama='$nama',  program='$program', email='$email', nilsm1='$nilsm1', nilsm2='$nilsm2', nilsm3='$nilsm3', nilsm4='$nilsm4' where id='$id'");
	}


}

?>