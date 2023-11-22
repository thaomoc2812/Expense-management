<?php


$tenNhomQuyen = $_POST['tenNhomQuyen'];

$quanLyTaiKhoan = isset($_POST['boxQuanLyTaiKhoan']) ? 1 : 0;
$quanLyBaiViet = isset($_POST['boxQuanLyBaiViet']) ? 1 : 0;
$quanLyDanhMucGiaoDich = isset($_POST['boxQuanLyDanhMucGiaoDich']) ? 1 : 0;
$baoCaoThongKe = isset($_POST['boxBaoCaoThongKe']) ? 1 : 0;
$chiGomCacChucNangCuaNguoiDung = isset($_POST['boxChiGomCacChucNangCuaNguoiDung']) ? 1 : 0;


//ket noi csdl
require_once '../connect.php';
if (!$tenNhomQuyen || !$quanLyTaiKhoan && !$quanLyBaiViet && !$quanLyDanhMucGiaoDich && !$baoCaoThongKe && !$chiGomCacChucNangCuaNguoiDung )
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }


$search_sql = "SELECT * FROM nhomquyen WHERE 
(tennhomquyen LIKE '%$tenNhomQuyen%')
";
$result = mysqli_query($conn, $search_sql);
$q=0;
    
    
    while ($r = mysqli_fetch_assoc($result))
    {
        $key = $r['tennhomquyen'] ;
        if  ($tenNhomQuyen == $key)
        {
            $q++;
        }
    
    
    };
    
    if($q > 0)
    {
        echo "Đã có nhóm quyền này trong danh sách.Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
    }

else
{
    $addsql = "INSERT INTO nhomquyen (tennhomquyen) VALUES ('$tenNhomQuyen')";
    mysqli_query($conn, $addsql);


    $search_sqlNhomQuyen = "SELECT * FROM nhomquyen WHERE (tennhomquyen LIKE '$tenNhomQuyen')";
    $resultNhomQuyen = mysqli_query($conn, $search_sqlNhomQuyen);
    $rnhomquyen = mysqli_fetch_assoc($resultNhomQuyen);
    $idnhomquyen = $rnhomquyen['id'];




    if($quanLyTaiKhoan == 1)
    {
        $search_sqlQuyenTruyCap = "SELECT * FROM quyentruycap WHERE (tenquyentruycap LIKE 'Quản lý tài khoản')";
        $resultQuyenTruyCap = mysqli_query($conn, $search_sqlQuyenTruyCap);
        $rQuyenTruyCap = mysqli_fetch_assoc($resultQuyenTruyCap);
        $idquyentruycap = $rQuyenTruyCap['id'];
        $addsql = "INSERT INTO phanquyen (idnhomquyen,idquyentruycap) VALUES ('$idnhomquyen','$idquyentruycap')";
        mysqli_query($conn, $addsql);
    }

    if($quanLyBaiViet == 1)
    {
        $search_sqlQuyenTruyCap = "SELECT * FROM quyentruycap WHERE (tenquyentruycap LIKE 'Quản lý bài viết')";
        $resultQuyenTruyCap = mysqli_query($conn, $search_sqlQuyenTruyCap);
        $rQuyenTruyCap = mysqli_fetch_assoc($resultQuyenTruyCap);
        $idquyentruycap = $rQuyenTruyCap['id'];
        $addsql= "INSERT INTO phanquyen (idnhomquyen,idquyentruycap) VALUES ('$idnhomquyen','$idquyentruycap')";
        mysqli_query($conn, $addsql);
    }

    if($quanLyDanhMucGiaoDich == 1)
    {
        $search_sqlQuyenTruyCap = "SELECT * FROM quyentruycap WHERE (tenquyentruycap LIKE 'Quản lý danh mục giao dịch')";
        $resultQuyenTruyCap = mysqli_query($conn, $search_sqlQuyenTruyCap);
        $rQuyenTruyCap = mysqli_fetch_assoc($resultQuyenTruyCap);
        $idquyentruycap = $rQuyenTruyCap['id'];
        $addsql= "INSERT INTO phanquyen (idnhomquyen,idquyentruycap) VALUES ('$idnhomquyen','$idquyentruycap')";
        mysqli_query($conn, $addsql);
    }

    if($baoCaoThongKe == 1)
    {
        $search_sqlQuyenTruyCap = "SELECT * FROM quyentruycap WHERE (tenquyentruycap LIKE 'Báo cáo thống kê')";
        $resultQuyenTruyCap = mysqli_query($conn, $search_sqlQuyenTruyCap);
        $rQuyenTruyCap = mysqli_fetch_assoc($resultQuyenTruyCap);
        $idquyentruycap = $rQuyenTruyCap['id'];
        $addsql= "INSERT INTO phanquyen (idnhomquyen,idquyentruycap) VALUES ('$idnhomquyen','$idquyentruycap')";
        mysqli_query($conn, $addsql);
    }

    if($chiGomCacChucNangCuaNguoiDung == 1)
    {
        $search_sqlQuyenTruyCap = "SELECT * FROM quyentruycap WHERE (tenquyentruycap LIKE 'Chỉ gồm các chức năng của người dùng')";
        $resultQuyenTruyCap = mysqli_query($conn, $search_sqlQuyenTruyCap);
        $rQuyenTruyCap = mysqli_fetch_assoc($resultQuyenTruyCap);
        $idquyentruycap = $rQuyenTruyCap['id'];
        $addsql= "INSERT INTO phanquyen (idnhomquyen,idquyentruycap) VALUES ('$idnhomquyen','$idquyentruycap')";
        mysqli_query($conn, $addsql);
    }


   

    header("Location: viewNhomQuyen.php");


}

?>