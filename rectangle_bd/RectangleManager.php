<?php
require_once("MysqlBd.php");
class RectangleManager extends MysqlBd{
    public function create($data){
        
    }

    public function update($data){
        
    }
    public function delete($id){
        
    }

    public function findAll(){
       $sql="select * from rectangle"; 
    }
    public function findById($id){
        $sql="select * from rectangle where id =$id"; 
    }


}


?>