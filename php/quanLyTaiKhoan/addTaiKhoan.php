<?php
//nhan du lieu tu form
$hoten = $_POST['hoten'];
$ngaysinh = $_POST['ngaysinh'];
$sdt= $_POST['sdt'];
$email= $_POST['email'];
$quyentruycap= $_POST['quyentruycap'];
$matkhau= $_POST['matkhau'];


//ket noi csdl
require_once '../connect.php';
if (!$hoten || !$ngaysinh || !$sdt || !$email|| !$matkhau )
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

$search_khach = "SELECT * FROM nguoidung WHERE (sdt = '$sdt')";

$query = mysqli_query($conn, $search_khach);
$q=0;
while ($r0 = mysqli_fetch_assoc($query))
{
    $q=1;
    echo "<h1>Số điện thoại đã tồn tại</h1>";
    
};



    $search_sql = "SELECT * FROM nhomquyen WHERE tennhomquyen = '$quyentruycap'";
    $result = mysqli_query($conn, $search_sql);
    if($r = mysqli_fetch_assoc($result))
    $vt = $r['id'];
    



$addsql = "INSERT INTO nguoidung
(hoten,ngaysinh,sdt,email,idquyentruycap,matkhau) VALUES ('$hoten','$ngaysinh','$sdt', '$email',$vt,'$matkhau')";



if($q==0)
{
    if(mysqli_query($conn, $addsql)){
        //in thong bao thanh cong
        header("Location: viewTaiKhoan.php");
    
    };
}


?>
