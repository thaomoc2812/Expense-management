<?php

include "Database.php";

class GoiTap {
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function show_goiTap(){
        $query = "SELECT * FROM goitap";
        $result = $this->db->select($query);
        return $result;
    }
        
    public function insert_goiTap(){
        $tengoitap = $_POST['tengoitap'];
        $thoigian = $_POST['thoigian'];
        $donvi= $_POST['donvi'];
        $gia= $_POST['gia'];

        $query = "INSERT INTO goitap
        (tengoitap,thoigian,donvi,gia) VALUES ('$tengoitap',$thoigian,'$donvi',$gia)";
        $result = $this->db->insert($query);
        
        return $result;
    }

    public function get_goiTap($id){
        $query = "SELECT * FROM goitap WHERE id = $id";
        $result = $this->db->select($query);
        return $result;
    }

    public function update_goiTap($tengoitap, $thoigian, $donvi, $gia,$id){
        $query = "UPDATE goitap SET tengoitap = '$tengoitap', thoigian = $thoigian, donvi = '$donvi',gia = $gia WHERE id = $id";
        $result = $this->db->update($query);
         return $result;
    }

    public function delete_goiTap($id){
        $query = "DELETE FROM goitap WHERE id = $id";
        $result = $this->db->delete($query);
        return $result;
    }    

    public function search_goiTap($key){
        $query = "SELECT * FROM goitap WHERE 
        (tengoitap LIKE '%$key%')
        OR (thoigian LIKE '%$key%')
        OR (donvi LIKE '%$key%')
        OR (gia LIKE '%$key%')";
        $result = $this->db->select($query);
        return $result;
    }  
}
?>