<?php

$nvid = $_GET['sid'];

require_once '../connect.php';

$edit_sql = "SELECT * FROM nguoidung WHERE id = $nvid";

$result = mysqli_query($conn, $edit_sql);
$row = mysqli_fetch_assoc($result);

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
            <h1>Sửa thông tin tài khoản</h1>
            <form action="updateTaiKhoan.php" method="post">
                <input type="hidden" name="sid" value="<?php echo $row['id'] ?>" id="">
                <div class="form-group">
                    <label for="hoten">Họ tên</label>
                    <input type="text" id="thotenen" class="form-control" name="hoten" value="<?php echo $row['hoten'] ?>">
                </div>

                <div class="form-group">
                    <label for="ngaysinh">Ngày sinh</label>
                    <input type="date" name="ngaysinh" id="ngaysinh" class="form-control" value="<?php echo $row['ngaysinh'] ?>">
                </div>

                <div class="form-group">
                    <label for="sdt">Số điện thoại</label>
                    <input type="text" id="sdt" name="sdt" class="form-control" value="<?php echo $row['sdt'] ?>">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" class="form-control" value="<?php echo $row['email'] ?>">
                </div>

                <div class="form-group">
                    <label for="matkhau">Mật khẩu</label>
                    <input type="text" id="matkhau" name="matkhau" class="form-control" value="<?php echo $row['matkhau'] ?>">
                </div>

                <div class="form-group">
                    <label for="quyentruycap">Quyền truy cập</label><br>
                    <select id="quyentruycap" name="quyentruycap" >
                <?php //ket noi csdl
                
                require_once '../connect.php';


                $view_sql1="SELECT * FROM nhomquyen";
                $result1 = mysqli_query($conn, $view_sql1);
                while ($r1 = mysqli_fetch_assoc($result1))
                {
                ?>
                <option><?php echo  $r1['tennhomquyen']?> </option><br><?php 
                }?>
                </select><br>
                    
                </div>

        

                <button type="submit" class="btn btn-primary">Lưu thay đổi</button>

            </form>
        </div>

</body>

</html>