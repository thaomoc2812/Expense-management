<?php

include "Database.php";

class TrangThietBi {
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function show_thietBi(){
        $query = "SELECT * FROM trangthietbi";
        $result = $this->db->select($query);
        return $result;
    }
        
    public function insert_thietBi(){
        $maso = $_POST['maso'];
        $tenthietbi = $_POST['tenthietbi'];
        $soluong= $_POST['soluong'];
        $ngaynhapve= $_POST['ngaynhapve'];
        $ngaybaohanh= $_POST['ngaybaohanh'];
        $xuatsu= $_POST['xuatsu'];
        $tinhtrang= $_POST['tinhtrang'];
        
        $query = "INSERT INTO trangthietbi
        (maso,tenthietbi,soluong,ngaynhapve,ngaybaohanh,xuatsu,tinhtrang) VALUES ('$maso','$tenthietbi',$soluong, '$ngaynhapve','$ngaybaohanh','$xuatsu','$tinhtrang')";
        $result = $this->db->insert($query);
        
         return $result;
    }

    public function get_thietBi($maso){
        $query = "SELECT * FROM trangthietbi WHERE maso = '$maso'";
        $result = $this->db->select($query);
        return $result;
    }

    public function update_thietBi($maso, $tenthietbi, $soluong, $ngaynhapve, $ngaybaohanh, $xuatsu, $tinhtrang,$id){
        $query = "UPDATE trangthietbi SET maso = '$maso', tenthietbi = '$tenthietbi', soluong = $soluong,ngaynhapve = '$ngaynhapve', ngaybaohanh = '$ngaybaohanh', xuatsu = '$xuatsu', tinhtrang = '$tinhtrang' WHERE id = $id";
        $result = $this->db->update($query);
        return $result;
    }

    public function delete_thietBi($id){
        $query = "DELETE FROM trangthietbi WHERE id = $id";
        $result = $this->db->delete($query);
         return $result;
    }    

    public function search_thietBi($key){
        $query = "SELECT * FROM trangthietbi WHERE 
        (maso LIKE '%$key%')
        OR (tenthietbi LIKE '%$key%')
        OR (soluong LIKE '%$key%')
        OR (ngaynhapve LIKE '%$key%')
        OR (ngaybaohanh LIKE '%$key%')
        OR (xuatsu LIKE '%$key%')
        OR (tinhtrang LIKE '%$key%')";
        $result = $this->db->select($query);
        return $result;
    }  
}
?>