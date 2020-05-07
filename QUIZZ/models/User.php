<?php
class User implements IManager{
    private $id;
    private $fullName;
    private $login;
    private $pwd;
    private $profil;
    private $avatar;

    public function __construct($row=null){
        if($row!=null){
            $this->hydrate($row);
        }
    }

    public function hydrate($row){
       $this->id=$row['id'];
       $this->fullName=$row['fullName'];
    }
}