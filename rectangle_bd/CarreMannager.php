<?php
require_once("MysqlBd.php");
class CarreManager extends MysqlBd{
    
    public function create($data){
        
    }

    public function update($data){
        
    }
    public function delete($id){
        
    }

    public function findAll(){
       $sql="select * from carre"; 
    }
    public function findById($id){
        $sql="select * from carre where id =$id"; 
    }




}

?>