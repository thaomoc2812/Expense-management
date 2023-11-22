<?php
//nhan du lieu tu form
$hoten = $_POST['hoten'];
$ngaysinh = $_POST['ngaysinh'];
$sdt = $_POST['sdt'];
$email = $_POST['email'];
$matkhau = $_POST['matkhau'];
$quyentruycap = $_POST['quyentruycap'];
$nvid = $_POST['sid'];

//ket noi csdl
require_once '../connect.php';


$search_sql = "SELECT * FROM nhomquyen WHERE tennhomquyen = '$quyentruycap'";
$result = mysqli_query($conn, $search_sql);
if($r = mysqli_fetch_assoc($result))
$vt = $r['id'];



$update_sql = "UPDATE nguoidung SET hoten = '$hoten', ngaysinh = '$ngaysinh', sdt = '$sdt', email = '$email',idquyentruycap = $vt,matkhau = '$matkhau' WHERE id = $nvid";



//thuc thi cau lenh them
if(mysqli_query($conn, $update_sql)){
    //in thong bao thanh cong
    header("Location: viewTaiKhoan.php");

};



?>