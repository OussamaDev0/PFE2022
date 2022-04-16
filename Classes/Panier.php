<?php

class Panier
{
    public $id_user;
    public static $nbPaniers = 0;
    public function Panier($id_user){
        $this->id_user = $id_user;
    }
    public function set($key, $value){
        $_SESSION['paniers'][$this->id_user][$key] = $value;
    }
    public function get($key){
        if(isset($_SESSION['paniers'][$this->id_user][$key]))
            return $_SESSION['paniers'][$this->id_user][$key];
        return null;
    }
    public function delete($key){
        if(isset($_SESSION['paniers'][$this->id_user][$key]))
            unset($_SESSION['paniers'][$this->id_user][$key]);
    }
    public function getPanier(){
        if(isset($_SESSION['paniers'][$this->id_user]))
            return $_SESSION['paniers'][$this->id_user];
        return array();
    }
    public function clear(){
        if(isset($_SESSION['paniers'][$this->id_user]))
            unset($_SESSION['paniers'][$this->id_user]);
    }
}
?>