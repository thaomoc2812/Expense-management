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
              <a href="../../php/quanLyTaiKhoan/viewTaiKhoan.php"><span>Xem danh sách tài khoản</span></a>
            </li>
            <li >
              <a href="./quanLyNhanVien/searchNhanVien.html"><span>Tìm kiếm tài khoản</span></a>
            </li>
          </ul>
        </li>

        <!-- <li id="health_status"><a href="new_health_status.php"><i class="entypo-user-add"></i><span>Health Status</span></a> -->

        <li class="" id="roomhassubopen"><a href="#" onclick="memberExpand(2)"><i class="entypo-quote"></i><span>Quản lý bài viết</span></a>

          <ul id="roomExpand">
            <li class="active">
              <a href="../admin/quanLyPhongTap/addPhongTap.html"><span>Thêm bài viết</span></a>
            </li>

            <li><a href="../../php/quanLyPhongTap/viewPhongTap.php"><span>Xem danh sách bài viết</span></a></li>
            <li><a href="../admin/quanLyPhongTap/searchPhongTap.html"><span>Tìm kiếm bài viết</span></a></li>

          </ul>


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

      <h1>Welcome to HBET88</h1>


</body>

</html>