<?php
require_once("MysqlBd.php");

class RectangleManager extends MysqlBd{


    public function __construct(){
          $this->classeName="Rectangle";
    }

    public function create($data){
        $sql="insert into rectangle......";
        
    }

    public function update($data){
        $sql="update  rectangle    ......";
        
    }
    public function delete($id){
        $sql="delete rectangle    ......";
    }

    public function findAll(){
       $sql="select * from rectangle";
       $this->ExecuteSelect($sql); 
    }
    public function findById($id){
        $sql="select * from rectangle where id =$id"; 
    }


}


?>