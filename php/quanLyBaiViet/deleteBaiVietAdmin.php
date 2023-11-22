<?php

$idBaiViet = $_GET['sid'];

require_once '../connect.php';

$delete_sql1 = "DELETE FROM baivietadmin WHERE id = $idBaiViet";


if ($r1 = mysqli_query($conn, $delete_sql1))
{
    header("Location: viewBaiVietAdmin.php");
};
?>