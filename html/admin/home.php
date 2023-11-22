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
  <title>HBET88</title>
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
              <a href="quanLyTaiKhoan/addTaiKhoan.php"><span>Thêm tài khoản</span></a>
            </li>
            <li>
              <a href="../../php/quanLyTaiKhoan/viewTaiKhoan.php"><span>Xem danh sách tài khoản</span></a>
            </li>
            <li >
              <a href="./quanLyTaiKhoan/searchTaiKhoan.html"><span>Tìm kiếm tài khoản</span></a>
            </li>
          </ul>
        </li>

        <li class="" id="roomhassubopen"><a href="#" onclick="memberExpand(2)"><i class="entypo-star"></i><span>Quản lý phân quyền</span></a>
          <ul id="roomExpand">
          <li >
              <a href="quanLyPhanQuyen/addNhomQuyen.html"><span>Thêm nhóm quyền</span></a>
            </li>
            <li>
              <a href="../../php/quanLyPhanQuyen/viewNhomQuyen.php"><span>Xem danh sách nhóm quyền</span></a>
            </li>
          </ul>
        </li>
        

        <!-- <li id="health_status"><a href="new_health_status.php"><i class="entypo-user-add"></i><span>Health Status</span></a> -->

        <li class="" id="devicehassubopen"><a href="#" onclick="memberExpand(3)"><i class="entypo-box"></i><span>Quản lý bài viết</span></a>

        <ul id="deviceExpand">
          <li class="active">
            <a href="../admin/quanLyBaiViet/addBaiViet.html"><span>Thêm bài viết</span></a>
          </li>

          <li>
            <a href="../../php/quanLyBaiViet/viewBaiVietAdmin.php"><span>Xem danh sách bài viết của admin</span></a>
          </li>

          <li>
            <a href="../../php/quanLyBaiViet/viewBaiVietUser.php"><span>Xem danh sách bài viết của người dùng</span></a>
          </li>

        </ul>
        </li>        
          

        <li class="" id="packagehassubopen"><a href="#" onclick="memberExpand(4)"><i class="entypo-alert"></i><span>Quản lý danh mục giao dịch</span></a>

          <ul id="packageExpand">
            <li class="active">
              <a href="quanLyDanhMuc/addDanhMuc.html"><span>Thêm danh mục</span></a>
            </li>

            <li>
              <a href="../../php/quanLyDanhMuc/viewDanhMuc.php"><span>Xem danh sách danh mục giao dịch</span></a>
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

      <h2>Admin Home</h2>

      <hr>

      <div class="col-sm-3"><a href="">
          <div class="tile-stats tile-red">

            <div class="num" data-postfix="" data-duration="1500" data-delay="0">
              <img class="image_change" src="../../images/income.jpg" alt="">
              <h2 hr>Đánh giá tiêu dùng</h2>
              <?php
              /*
              // ket noi csdl
              require_once '../../php/connect.php';

              $view_dangky = "SELECT * FROM dangkygoitap";

              $result1 = mysqli_query($conn, $view_dangky);

              // Khởi tạo biến tổng doanh thu
              $totalDoanhThu = 0;

              while ($r1 = mysqli_fetch_assoc($result1)) {
                $idhoivien = $r1['idhoivien'];
                $idgoitap = $r1['idgoitap'];

                $view_hoivien = "SELECT * FROM hoivien WHERE id = $idhoivien ";
                $result2 = mysqli_query($conn, $view_hoivien);
                $r2 = mysqli_fetch_assoc($result2);

                $view_goitap = "SELECT * FROM goitap WHERE id = $idgoitap";
                $result3 = mysqli_query($conn, $view_goitap);
                $r3 = mysqli_fetch_assoc($result3);

                if ($r1['trangthai'] == 'Đã xác nhận') {
                  $totalDoanhThu += $r3['gia'];
              ?>

              <?php
                }
              }

              // In ra tổng doanh thu
              echo $totalDoanhThu;
              */
              ?>

            </div>
          </div>
        </a>
      </div>


      <div class="col-sm-3"><a href="">
          <div class="tile-stats tile-green">

            <div class="num" data-postfix="" data-duration="1500" data-delay="0">
              <img class="image_change" src="../../images/member.jpg" alt="">
              <h2>Số lượng người dùng</h2>
              <?php
              
              // ket noi csdl
              require_once '../../php/connect.php';

              $view_sql = "SELECT * FROM nguoidung";

              $result = mysqli_query($conn, $view_sql);

              // Khởi tạo biến đếm số thành viên
              $totalThanhVien = 0;

              while ($r = mysqli_fetch_assoc($result)) {
                $totalThanhVien++; // Tăng giá trị biến đếm lên 1

              ?>

              <?php
              }

              // In ra tổng số thành viên
              echo $totalThanhVien;
              
              ?>

            </div>
          </div>
        </a>
      </div>

      <div class="col-sm-3"><a href="">
          <div class="tile-stats tile-aqua">

            <div class="num" data-postfix="" data-duration="1500" data-delay="0">
              <img class="image_change" src="../../images/baiviet.webp" alt="">
              <h2>Số lượng bài viết</h2>
              
              <?php
              /*
              // Ket noi csdl
              require_once '../../php/connect.php';

              // Cau truy van dem so luong trang thiet bi
              $count_sql = "SELECT COUNT(*) AS total FROM trangthietbi";
              $result = mysqli_query($conn, $count_sql);
              $row = mysqli_fetch_assoc($result);
              $totalTrangThietBi = $row['total'];

              // Hiển thị tổng số trang thiết bị
              echo $totalTrangThietBi;
              */

              // ket noi csdl
              require_once '../../php/connect.php';

              $view_sql2 = "SELECT * FROM baivietuser";

              $result2 = mysqli_query($conn, $view_sql2);

              // Khởi tạo biến đếm số thành viên
              $totalBaiViet = 0;

              while ($r = mysqli_fetch_assoc($result2)) {
                $totalBaiViet++; // Tăng giá trị biến đếm lên 1

              ?>

              <?php
              }

              // In ra tổng số thành viên
              echo $totalBaiViet;
              
              ?>


          

            </div>
          </div>
        </a>
      </div>

      <div class="col-sm-3"><a href="">
          <div class="tile-stats tile-blue">

            <div class="num" data-postfix="" data-duration="1500" data-delay="0">
              <img class="image_change" src="../../images/danhmuc.jpg" alt="">
              <h2>Số lượng danh mục</h2>
              <?php
              
              // ket noi csdl
              require_once '../../php/connect.php';

              $view_sql3 = "SELECT * FROM danhmucgiaodich";

              $result3 = mysqli_query($conn, $view_sql3);

              // Khởi tạo biến đếm số thành viên
              $totalDanhMuc = 0;

              while ($r = mysqli_fetch_assoc($result3)) {
                $totalDanhMuc++; // Tăng giá trị biến đếm lên 1

              ?>

              <?php
              }

              // In ra tổng số thành viên
              echo $totalDanhMuc;
              
              ?>

            </div>
          </div>
        </a>
      </div>
    </div>


</body>

</html>