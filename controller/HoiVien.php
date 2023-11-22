<?php

include "Database.php";

class HoiVien {
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function show_hoiVien(){
        $query = "SELECT * FROM hoivien";
        $result = $this->db->select($query);
        return $result;
    }
        
    public function insert_hoiVien(){
        $hoten = $_POST['hoten'];
        $ngaysinh = $_POST['ngaysinh'];
        $sdt= $_POST['sdt'];
        $diachi= $_POST['diachi'];
        $nghenghiep= $_POST['nghenghiep'];
        $matkhau= $_POST['matkhau'];


        $query = "INSERT INTO hoivien
        (hoten,ngaysinh,sdt,diachi,nghenghiep,matkhau) VALUES ('$hoten','$ngaysinh','$sdt', '$diachi','$nghenghiep','$matkhau')";
        $result = $this->db->insert($query);
        
        return $result;
    }

    public function get_hoiVien($id){
        $query = "SELECT * FROM hoivien WHERE id = $id";
        $result = $this->db->select($query);
        return $result;
    }

    public function update_hoiVien($hoten, $ngaysinh,$sdt,$diachi, $nghenghiep,$mavantay, $loaithanhvien,$id){
        $query = "UPDATE hoivien SET hoten = '$hoten', ngaysinh = '$ngaysinh', sdt = '$sdt', diachi = '$diachi',nghenghiep = '$nghenghiep',mavantay = '$mavantay',loaithanhvien = '$loaithanhvien' WHERE id = $id";
        $result = $this->db->update($query);
        return $result;
    }

    public function delete_hoiVien($key){
        $query = "DELETE FROM hoivien WHERE id =$key";
        $result = $this->db->delete($query);
       
        return $result;
    }    

    public function search_hoivien($key){
        $query = "SELECT * FROM hoivien WHERE 
        (hoten LIKE '%$key%')
        OR (ngaysinh LIKE '%$key%')
        OR (sdt LIKE '%$key%')
        OR (diachi LIKE '%$key%')
        OR (mavantay LIKE '%$key%')
        OR (loaithanhvien LIKE '%$key%')
        OR (nghenghiep LIKE '%$key%')
        ";
        $result = $this->db->select($query);
       
        return $result;
    }  
}

?>