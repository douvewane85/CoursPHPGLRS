<?php
require_once("MysqlBd.php");
class CarreManager extends MysqlBd{

    public function __construct(){
        $this->classeName="Carre";
  }
    
    public function create($data){
        $sql="insert into carre (longeur) values (".$data->getLongueur().")";
        //die($sql);
        return $this->ExecuteUpdate($sql)!=0;
    }

    public function update($data){
        
    }
    public function delete($id){
        
    }

    public function findAll(){
       $sql="select * from carre"; 
       return $this->ExecuteSelect($sql);
    }
    public function findById($id){
        $sql="select * from carre where id =$id"; 
    }




}

?>