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
                <a href="viewBaiVietAdmin.php"><span>Xem danh sách bài viết của admin</span></a>
            </li>

            <li>
                <a href="viewBaiVietUser.php"><span>Xem danh sách bài viết của người dùng</span></a>
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
      

        <li class="" id="packagehassubopen"><a href="#" onclick="memberExpand(5)"><i class="entypo-alert"></i><span>Quản lý báo cáo thống kê</span></a>

        

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


      <hr>

    </div>

    <div class="container">
      <h1>Chưa phê duyệt </h1>
      <table class="table table-striped">
        <thead class="thead-style">
          <tr>
            <th>Bài viết</th>
            <th></th>
            <th>Thao tác</th>
          </tr>
        </thead>
        <tbody>

          <?php

          //ket noi csdl
          require_once '../connect.php';


          $view_sql1 = "SELECT * FROM baivietuser WHERE trangthai = 'Chưa phê duyệt'";

          $result1 = mysqli_query($conn, $view_sql1);

          while ($r1 = mysqli_fetch_assoc($result1)) {
          ?>

            <tr>
              <td><?php echo $r1['baiviet'] ?></td>
              <td><a href="viewChiTiet.php?sid=<?php echo $r1['id'] ?>">Chi tiết</a></td>
             
              <td><a href="duyetBaiViet.php?sid=<?php echo $r1['id'] ?>" class="btn btn-info">Phê duyệt</a>
                <a onclick="return confirm('Bạn có muốn xóa bài viết này không?')" href="deleteBaiViet.php?sid=<?php echo $r1['id'] ?>" class="btn btn-danger">Xóa</a>
              </td>
            </tr>
          <?php
          }
          ?>

        </tbody>
      </table>


    </div>



    <div class="container">
      <h1>Đã phê duyệt </h1>
      <table class="table table-striped">
        <thead class="thead-style">
          <tr>
            <th>Bài viết</th>
            <th></th>
            <th>Thao tác</th>
          </tr>
        </thead>
        <tbody>

          <?php

          //ket noi csdl
          require_once '../connect.php';


          $view_sql2 = "SELECT * FROM baivietuser WHERE trangthai = 'Đã phê duyệt'";

          $result2 = mysqli_query($conn, $view_sql2);

          while ($r2 = mysqli_fetch_assoc($result2)) {
          ?>

            <tr>
              <td><?php echo $r2['baiviet'] ?></td>
              <td><a href="viewChiTiet.php?sid=<?php echo $r2['id'] ?>">Chi tiết</a></td>
             <td>
                <a onclick="return confirm('Bạn có muốn xóa bài viết này không?')" href="deleteBaiViet.php?sid=<?php echo $r2['id'] ?>" class="btn btn-danger">Xóa</a>
              </td>
            </tr>
          <?php
          }
          ?>

        </tbody>
      </table>


    </div>
    <style>
      .thead-style {
        background-color: black;
        color: white;
      }
    </style>

</body>

</html>