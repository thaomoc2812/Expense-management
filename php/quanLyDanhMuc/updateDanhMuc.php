<?php
//nhan du lieu tu form
$danhmuc = $_POST['danhmuc'];
$nvid = $_POST['sid'];

//ket noi csdl
require_once '../connect.php';




$update_sql = "UPDATE danhmucgiaodich SET tendanhmuc = '$danhmuc' WHERE id = $nvid";



//thuc thi cau lenh them
if(mysqli_query($conn, $update_sql)){
    //in thong bao thanh cong
    header("Location: viewDanhMuc.php");

};



?>