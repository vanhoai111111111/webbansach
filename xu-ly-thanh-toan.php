<?php 
require('./database/connect.php'); 
require('./database/query.php');



if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$sanpham = $_POST['sanpham'];
	$diachi = $_POST['diachi'];
	$makhachhang = $_POST['makhachhang'];
	$tongtien = $_POST['tongtien'] * 1000;


	$sql_insert = "INSERT INTO `donhang`(`makhachhang`, `tongtien`, `diachi`) VALUES ('".$makhachhang."','".$tongtien."','".$diachi."')";
	$insert = queryExecute($conn,$sql_insert);

	$madonhang = $conn->insert_id;


	// echo count($sanpham);

	for ($i=0; $i < count($sanpham); $i++) { 
		$masanpham = $sanpham[$i]['masanpham'];
		$giatien = str_replace(',','.',$sanpham[$i]['giaban']) * 1000;
		$sql_insert_ct = "INSERT INTO `chitietdonhang`(`madonhang`, `masanpham`, `giatien`) VALUES (".$madonhang.",".$masanpham.",".$giatien.")";
		$insert_ct = queryExecute($conn,$sql_insert_ct);
	}

	echo $madonhang;
}
 ?>