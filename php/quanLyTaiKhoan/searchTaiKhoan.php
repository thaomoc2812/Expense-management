<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width= device-width,initial-scale=1.0">
  <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <script src="../../js/script_admin.js"></script>
  <link rel="stylesheet" href="../../css/dashMain.css">
  <link rel="stylesheet" href="../../css/style2.css">
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
              <a href="../../html/admin/quanLyTaiKhoan/addTaiKhoan.html"><span>Thêm tài khoản</span></a>
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

        <li class="" id="roomhassubopen"><a href="#" onclick="memberExpand(3)"><i class="entypo-quote"></i><span>Quản lý bài viết</span></a>

      

        <li class="" id="devicehassubopen"><a href="#" onclick="memberExpand(4)"><i class="entypo-box"></i><span>Quản lý danh mục giao dịch</span></a>

      

        <li class="" id="packagehassubopen"><a href="#" onclick="memberExpand(5)"><i class="entypo-alert"></i><span>Quản lý báo cáo thống kê</span></a>

        

        </li>


        <!-- <li id="adminprofile"><a href="more-userprofile.php"><i class="entypo-folder"></i><span>Xem báo báo thống kê</span></a></li> -->

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

            <!-- <li>Welcome <?php echo $_SESSION['full_name']; ?>
                        </li> -->

            <li>
              <a href="logout.php">
                Log Out <i class="entypo-logout right"></i>
              </a>
            </li>
          </ul>

        </div>

      </div>


      <hr>

    </div>

    <div class="container">
      <h1>Tìm kiếm tài khoản</h1>
      <form action="../../../php/quanLyHoiVien/searchHoiVien.php" method="post">
        <div class="form-group">
          <input type="text" placeholder="Nhập tên hoặc địa chỉ, số điện thoại, nghề nghiệp, mã vân tay, loại thành viên, ngày sinh,..." id="key" class="form-control" name="key">
        </div>

        <button type="submit" class="btn btn-primary">Tìm</button>
      </form>
      <table class="table table-striped">
        <thead class="thead-style">
          <tr>
            <th>Họ và tên</th>
            <th>Ngày sinh</th>
            <th>Số điện thoại</th>
            <th>Email</th>
            <th>Mật khẩu</th>
            <th>Quyền truy cập</th>
            <th>Thao tác</th>
          </tr>
        </thead>
        <tbody>
          <?php
          //nhan du lieu tu form
          $key = $_POST['key'];


          //ket noi csdl
          require_once '../connect.php';



          $search_sql = "SELECT * FROM nguoidung WHERE 
                        (hoten LIKE '%$key%')
                        OR (sdt LIKE '%$key%')
                        OR (email LIKE '%$key%')
                        ";



          $result = mysqli_query($conn, $search_sql);

          while ($r = mysqli_fetch_assoc($result)) {
          ?>
            <tr>
              <td><?php echo $r['hoten'] ?></td>
              <td><?php echo $r['ngaysinh'] ?></td>
              <td><?php echo $r['sdt'] ?></td>
              <td><?php echo $r['email'] ?></td>
              <td><?php echo $r['matkhau'] ?></td>
              <td><?php $vt = $r['idquyentruycap'];
                            $search_sql = "SELECT * FROM nhomquyen WHERE id = $vt";
                            $result2 = mysqli_query($conn, $search_sql);
                            $r2 = mysqli_fetch_assoc($result2);
                             echo $r2['tennhomquyen'];?></td>
              <td><a href="editTaiKhoan.php?sid=<?php echo $r['id'] ?>" class="btn btn-info">Sửa</a>
                <a onclick="return confirm('Bạn có muốn xóa tài khoản này không?')" href="deleteTaiKhoan.php?sid=<?php echo $r['id'] ?>" class="btn btn-danger">Xóa</a>
              </td>
            </tr>
          <?php
          }
          ?>

        </tbody>
      </table>

</body>

</html>