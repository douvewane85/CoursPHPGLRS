<?php
class Errors extends Controller{

    public function showError($smsError){
           die($smsError);
    }

}