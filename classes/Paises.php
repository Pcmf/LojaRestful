<?php
require_once 'DB.php';
require_once 'crud.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Paises
 *
 * @author pedro
 */
class Paises implements crud{
    private $db;
    
    public function __construct() {
        $this->db = new DB();
    }
    public function delete($param) {
        return $this->db->query("DELETE FROM paises WHERE id=:id ", array(':id'=>$param));
    }

    public function edit($param, $obj) {
       return $this->db->query("UPDATE paises SET pais=:pais WHERE id=:id ", array(':pais'=>$obj->pais, ':id'=>$param));
    }

    public function getAll() {
        return $this->db->query("SELECT * FROM paises");
    }

    public function getOne($param) {
        return $this->db->query("SELECT * FROM paises WHERE id=:id ", array(':id'=>$param));
        
    }

    public function set($obj) {
        return $this->db->query("INSERT INTO paises(pais) VALUES(:pais) ", array(':pais'=>$obj->pais)); 
    }

}
