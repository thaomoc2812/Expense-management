<?php

$idnhomquyen = $_GET['idnhomquyen'];

require_once '../connect.php';

$edit_sql = "SELECT * FROM nhomquyen WHERE id = $idnhomquyen";

$result1 = mysqli_query($conn, $edit_sql);
$r1 = mysqli_fetch_assoc($result1);

$idNQ = $r1['id'];
$view_sql2 = "SELECT * FROM phanquyen
JOIN quyentruycap ON quyentruycap.id = phanquyen.idquyentruycap
WHERE phanquyen.idnhomquyen = $idNQ ";
$result2 = mysqli_query($conn, $view_sql2);
$tapQuyenTruyCap = [];
$i = 0;

while ($r2 = mysqli_fetch_assoc($result2))
{
                           
$tapQuyenTruyCap[$i] = $r2['idquyentruycap'];
$i ++;
}
                                
function check($idcheck,$tapQuyenTruyCap,$i)
{
    for($t = 0; $t < $i; $t++)
    {
        if($idcheck == $tapQuyenTruyCap[$t])
        {
            return 1;
        }
        
    }
    return 0;
};

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width= device-width,initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="../../js/script_admin.js"></script>
  <link rel="stylesheet" href="../../css/style2.css">
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../css/dashMain.css">
  <link rel="stylesheet" href="../../css/entypo.css">
</head>

<body class="page-body  page-fade" onload="collapseSidebar()">

  <div class="page-container sidebar-collapsed" id="navbarcollapse">

    <div class="sidebar-menu">

      <header class="logo-env">

        <!-- logo -->


        <!-- logo collapse icon -->
        <div class="sidebar-collapse" onclick="collapseSidebar()">
          <a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
            <i class="entypo-menu"></i>
          </a>
        </div>
      </header>
      <ul id="main-menu" class="">

        <li id="dash"><a href="../../html/admin/home.php"><i class="entypo-gauge"></i><span>Home</span></a></li>

        <!-- <li id="regis"><a href="new_entry.php"><i class="entypo-user-add"></i><span>New Registration</span></a> -->

        <!-- <li id="paymnt"><a href="payments.php"><i class="entypo-star"></i><span>Payments</span></a></li> -->

        <li class="" id="staffhassubopen"><a href="#" onclick="memberExpand(1)"><i class="entypo-users"></i><span>Quản lý account</span></a>
          <ul id="staffExpand">
          <li>
              <a href="../../html/admin/quanLyTaiKhoan/addTaiKhoan.php"><span>Thêm tài khoản</span></a>
            </li>
            <li>
              <a href="viewTaiKhoan.php"><span>Xem danh sách tài khoản</span></a>
            </li>
            <li >
              <a href="../../html/admin/quanLyTaiKhoan/searchTaiKhoan.html"><span>Tìm kiếm tài khoản</span></a>
            </li>
          </ul>
        </li>

        <!-- <li id="health_status"><a href="new_health_status.php"><i class="entypo-user-add"></i><span>Health Status</span></a> -->

        
        <li class="" id="roomhassubopen"><a href="#" onclick="memberExpand(2)"><i class="entypo-star"></i><span>Quản lý phân quyền</span></a>
          <ul id="roomExpand">
          <li >
              <a href="../../html/admin/quanLyPhanQuyen/addNhomQuyen.html"><span>Thêm nhóm quyền</span></a>
            </li>
            <li>
              <a href="../quanLyPhanQuyen/viewNhomQuyen.php"><span>Xem danh sách nhóm quyền</span></a>
            </li>
          </ul>
        </li>

        <!-- <li id="health_status"><a href="new_health_status.php"><i class="entypo-user-add"></i><span>Health Status</span></a> -->

        <li class="" id="devicehassubopen"><a href="#" onclick="memberExpand(3)"><i class="entypo-box"></i><span>Quản lý bài viết</span></a>

          <ul id="deviceExpand">
            <li class="active">
              <a href="../../html/admin/quanLyBaiViet/addBaiViet.html"><span>Thêm bài viết</span></a>
            </li>

            <li>
              <a href="../../php/quanLyBaiViet/viewBaiVietAdmin.php"><span>Xem danh sách bài viết của admin</span></a>
            </li>

            <li>
              <a href="../admin/quanLyBaiViet/viewBaiVietUser.php"><span>Xem danh sách bài viết của người dùng</span></a>
            </li>

          </ul>
          </li>        
      

          <li class="" id="packagehassubopen"><a href="#" onclick="memberExpand(4)"><i class="entypo-alert"></i><span>Quản lý danh mục giao dịch</span></a>

              <ul id="packageExpand">
              <li class="active">
                  <a href="../../html/admin/quanLyDanhMuc/addDanhMuc.html"><span>Thêm danh mục</span></a>
              </li>

              <li>
                  <a href="../quanLyDanhMuc/viewDanhMuc.php"><span>Xem danh sách danh mục giao dịch</span></a>
              </li>

              </ul>

              </li>
      

        <li class="" id=""><a href="#" onclick="memberExpand(5)"><i class="entypo-alert"></i><span>Quản lý báo cáo thống kê</span></a>

        

        </li>

        

        <li><a href="../../html/dangNhap.html"><i class="entypo-logout"></i><span>Đăng xuất</span></a></li>

      </ul>
    </div>

    <div class="main-content">

      <div class="row">

        <!-- Profile Info and Notifications -->
        <div class="col-md-6 col-sm-8 clearfix">

        </div>


        <!-- Raw Links -->
        <div class="col-md-6 col-sm-4 clearfix hidden-xs">

          <ul class="list-inline links-list pull-right">

            <li>
              <a href="../../html/dangNhap.html">
                Log Out <i class="entypo-logout right"></i>
              </a>
            </li>
          </ul>

        </div>

      </div>
          
                </div>
                
                <div class="container">
                  <h1>Sửa nhóm quyền</h1>

            
                  <form action="updateNhomQuyen.php" method="post">
          
                   
                      <div class="form-group">
                      <input type="hidden" name="idnhomquyen" value="<?php echo $r1['id']?>" id ="">
                          <label for = "tennhomquyen">Tên nhóm quyền</label>
                          <input type="text" id ="tennhomquyen" class="form-control" name="tennhomquyen" value="<?php echo $r1['tennhomquyen']?>">
                      </div>
                      <div class="form-group">
                        <label>Các chức năng</label><br>
                        <?php
                        $view_sql4 = "SELECT * FROM quyentruycap WHERE tenquyentruycap = 'Quản lý tài khoản' ";
                        $result4 = mysqli_query($conn, $view_sql4);
                        $r4 = mysqli_fetch_assoc($result4);
                        ?>
                        <input type="checkbox" id="boxQuanLyTaiKhoan" name="boxQuanLyTaiKhoan"<?php if(check($r4['id'],$tapQuyenTruyCap,$i)){?>checked<?php }?>> Quản lý tài khoản <br>
                        <?php
                        $view_sql4 = "SELECT * FROM quyentruycap WHERE tenquyentruycap = 'Quản lý bài viết' ";
                        $result4 = mysqli_query($conn, $view_sql4);
                        $r4 = mysqli_fetch_assoc($result4);
                        ?>
                        <input type="checkbox" id="boxQuanLyBaiViet" name="boxQuanLyBaiViet"<?php if(check($r4['id'],$tapQuyenTruyCap,$i)){?>checked<?php }?>> Quản lý bài viết <br>

                        <?php
                        $view_sql4 = "SELECT * FROM quyentruycap WHERE tenquyentruycap = 'Quản lý danh mục giao dịch' ";
                        $result4 = mysqli_query($conn, $view_sql4);
                        $r4 = mysqli_fetch_assoc($result4);
                        ?>
                        <input type="checkbox" id="boxQuanLyDanhMucGiaoDich" name="boxQuanLyDanhMucGiaoDich"<?php if(check($r4['id'],$tapQuyenTruyCap,$i)){?>checked<?php }?>> Quản lý danh mục giao dịch <br>

                        <?php
                        $view_sql4 = "SELECT * FROM quyentruycap WHERE tenquyentruycap = 'Báo cáo thống kê' ";
                        $result4 = mysqli_query($conn, $view_sql4);
                        $r4 = mysqli_fetch_assoc($result4);
                        ?>
                        <input type="checkbox" id="boxBaoCaoThongKe" name="boxBaoCaoThongKe"<?php if(check($r4['id'],$tapQuyenTruyCap,$i)){?>checked<?php }?>> Báo cáo thống kê <br>


                        <?php
                        $view_sql4 = "SELECT * FROM quyentruycap WHERE tenquyentruycap = 'Chỉ gồm các chức năng của người dùng' ";
                        $result4 = mysqli_query($conn, $view_sql4);
                        $r4 = mysqli_fetch_assoc($result4);
                        ?>
                        <input type="checkbox" id="boxChiGomCacChucNangCuaNguoiDung" name="boxChiGomCacChucNangCuaNguoiDung"<?php if(check($r4['id'],$tapQuyenTruyCap,$i)){?>checked<?php }?>> Chỉ gồm các chức năng của người dùng <br>

                    

                    </div>
                  
          
                      <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
          
                  </form>
              </div>
          


</body>
</html>
