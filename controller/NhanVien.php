<?php

include "Database.php";

class NhanVien {
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function show_nhanVien(){
        $query = "SELECT * FROM nhanvien";
        $result = $this->db->select($query);
        return $result;
    }
        
    public function insert_nhanVien(){
        $ten = $_POST['ten'];
        $diachi = $_POST['diachi'];
        $sdt = $_POST['sdt'];
        $vitri = $_POST['vitri'];
        $matkhau = $_POST['matkhau'];

        $query = "INSERT INTO nhanvien
        (ten, diachi, sdt,vitri) VALUES ('$ten','$diachi','$sdt','$vitri')";
        $result = $this->db->insert($query);
        
        return $result;
    }

    public function get_nhanVien($id){
        $query = "SELECT * FROM nhanvien WHERE id = $id";
        $result = $this->db->select($query);
        return $result;
    }

    public function update_nhanVien($ten, $diachi, $sdt,$vitri, $key){
        $query = "UPDATE nhanvien SET ten = '$ten', diachi = '$diachi', sdt = '$sdt', vitri = '$vitri'
                    WHERE id = $key";
        $result = $this->db->update($query);

        return $result;
    }

    public function delete_nhanVien($key){
        $query = "DELETE FROM nhanvien WHERE id = $key";
        $result = $this->db->delete($query);
       
        return $result;
    }    

    public function search_nhanvien($key){
        $query = "SELECT * FROM nhanvien WHERE 
        (ten LIKE '%$key%')
        OR (diachi LIKE '%$key%')
        OR (sdt LIKE '%$key%')
        OR (vitri LIKE '%$key%')
        ";
        $result = $this->db->select($query);
       
        return $result;
    }  
}

?>