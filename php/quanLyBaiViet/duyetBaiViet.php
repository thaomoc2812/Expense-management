<?php
$nvid = $_GET['sid'];

//ket noi csdl
require_once '../connect.php';




$update_sql = "UPDATE baivietuser SET trangthai = 'Đã phê duyệt' WHERE id = $nvid";



//thuc thi cau lenh them
if(mysqli_query($conn, $update_sql)){
    //in thong bao thanh cong
    header("Location: viewBaiVietUser.php");

};



?>