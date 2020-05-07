<?php
class Controller {
    
     protected $dirname;
     protected $views;
     protected $layout="layout_admin";

    public function render(){
        ob_start();
        require_once("views/".$this->dirname."/".$this->views.".php");
        $content_for_layout= ob_get_clean();
        require_once("views/layout/".$this->layout.".php");
    }
}
