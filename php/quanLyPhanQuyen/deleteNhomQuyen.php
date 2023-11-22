<?php

$idNhomQuyen = $_GET['idnhomquyen'];

require_once '../connect.php';

$delete_sql1 = "DELETE FROM phanquyen WHERE idnhomquyen = $idNhomQuyen";
$r1 = mysqli_query($conn, $delete_sql1);

$delete_sql2 = "DELETE FROM nhomquyen WHERE id = $idNhomQuyen";
$r2 = mysqli_query($conn, $delete_sql2);


if ($r1 == 1 && $r2 == 1)
{
    header("Location: viewNhomQuyen.php");
};
?>