<?php
//nhan du lieu tu form
$danhmuc = $_POST['danhmuc'];

//ket noi csdl
require_once '../connect.php';
if (!$danhmuc )
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }




$addsql = "INSERT INTO danhmucgiaodich
(tendanhmuc) VALUES ('$danhmuc')";




    if(mysqli_query($conn, $addsql)){
        //in thong bao thanh cong
        header("Location: viewDanhMuc.php");
    
    };



?>
