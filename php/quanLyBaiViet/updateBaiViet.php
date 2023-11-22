<?php
//nhan du lieu tu form
$baiviet = $_POST['baiviet'];
$nvid = $_POST['sid'];

//ket noi csdl
require_once '../connect.php';




$update_sql = "UPDATE baivietadmin SET baiviet = '$baiviet' WHERE id = $nvid";



//thuc thi cau lenh them
if(mysqli_query($conn, $update_sql)){
    //in thong bao thanh cong
    header("Location: viewBaiVietAdmin.php");

};



?>