<?php

$nvid = $_GET['sid'];

require_once '../connect.php';

$delete_sql = "UPDATE nguoidung SET trangthai = 1 WHERE  id = $nvid";


if (mysqli_query($conn, $delete_sql))
{
    header("Location: viewTaiKhoan.php");
};
?>