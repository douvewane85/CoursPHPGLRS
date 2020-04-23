<?php
 abstract class MysqlBd{

      public   function getConnexion(){

      }

      public   function CloseConnexion(){
          
    }

    public function ExecuteSelect($sql,$objet){

    }
    public function ExecuteUpdate($sql){

    }
 
    public abstract function create($data);
    public abstract function update($data);
    public abstract function delete($id);
    public abstract function findAll();
    public abstract function findById();

  }
?>