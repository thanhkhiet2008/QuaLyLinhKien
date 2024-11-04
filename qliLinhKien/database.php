<?php
include 'config.php';
class Database{
    var $sql;
    var $conn;
    var $st; 
    function __construct()
    {
        try{
            $this ->conn= new PDO(
                'mysql:host=' . DB_HOST . ';charset=utf8;dbname='  . DB_NAME,
                DB_USER,
                DB_PASS
            );
            $this ->conn->setattribute(3, 2);
        }catch (Exception $e) {
            echo $e ->getMessage();
        }
    
    }
    function setSql($sql)
    {
        $this ->sql = $sql;
    }

    function layDanhSach($params=[])
    {
        try{
            $this->st = $this->conn->prepare($this->sql);
            $this->st->execute($params);
            return $this->st->fetchAll(pdo::FETCH_OBJ);
        } catch (PDOException $e){
            echo $e->getMessage();
        }
    }
    

function executeSql($params=[])
{
    try{
        $this->st = $this->conn->prepare($this->sql);
        return $this->st->execute($params);
    }catch (PDOException $e) {
echo $e->getMessage();
    }
}
function xoa($params =[])
{
    $sql = "DELETE FROM `linhkien` WHERE `MaSP`=''";
    $this->db->setSql($sql);
    return $this->db->executeSql($params);
}
function xoa2($params =[])
{
    $sql = "DELETE FROM `nguoidung` WHERE `Ho`=''";
    $this->db->setSql($sql);
    return $this->db->executeSql($params);
}
}









