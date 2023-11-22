<?php
//nhan du lieu tu form
$baiviet = $_POST['baiviet'];

//ket noi csdl
require_once '../connect.php';
if (!$baiviet )
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }




$addsql = "INSERT INTO baivietadmin
(baiviet) VALUES ('$baiviet')";




    if(mysqli_query($conn, $addsql)){
        //in thong bao thanh cong
        header("Location: viewBaiVietAdmin.php");
    
    };



?>
