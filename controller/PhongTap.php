<?php

include "Database.php";

class PhongTap {
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function show_phongTap(){
        $query = "SELECT * FROM phongtap";
        $result = $this->db->select($query);
        return $result;
    }
        
    public function insert_phongTap(){
        $tenphong = $_POST['tenphong'];
        $maphong = $_POST['maphong'];
        $soluong = $_POST['soluong'];

        $query = "INSERT INTO phongtap
            (
                maphong, 
                tenphong,
                soluong
            )
            VALUES 
            (
                '$maphong', 
                '$tenphong',
                '$soluong'
            )";
        $result = $this->db->insert($query);
        
        return $result;
    }

    public function get_phongTap($id){
        $query = "SELECT * FROM phongtap WHERE id = $id";
        $result = $this->db->select($query);
        return $result;
    }

    public function update_phongTap($maphong, $tenphong, $soluong, $key){
        $query = "UPDATE phongtap
                    SET tenphong = '$tenphong', 
                        maphong = '$maphong', 
                        soluong = '$soluong'
                    WHERE id = $key";
        $result = $this->db->update($query);

        return $result;
    }

    public function delete_phongTap($key){
        $query = "DELETE FROM phongtap WHERE id = $key";
        $result = $this->db->delete($query);
       
        return $result;
    }    

    public function search_phongTap($key){
        $query = "SELECT * FROM phongtap WHERE (maphong LIKE '%$key%')
        OR (tenphong LIKE '%$key%')
        OR (soluong LIKE '%$key%')
        ";
        $result = $this->db->select($query);
       
        return $result;
    }  
}

?>