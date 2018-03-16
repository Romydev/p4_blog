<?php
require_once 'views/Vue.php';
class ControleurContact {
    
    public function contact(){
        $vue = new Vue ("Contact");
        $vue->generer(array('contact'));
    }
}
