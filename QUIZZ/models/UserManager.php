<?php

class UserManager extends Manager{
   
    function __construct(){
        $this->className="User";
    }



    public function create($objet){
       

    }
    public function update($objet){

    }
    public  function delete($id){
      
    }
    public function findAll(){
      
    }
    public function findById($id){

    }  

    public function getUserByLoginAndPwd($login,$pwd){
       $sql="select * from user where login='$login' and pwd='$pwd'";
       return $this-> ExecuteSelect($sql);
    } 
}