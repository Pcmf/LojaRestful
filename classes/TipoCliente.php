<?php
require_once 'DB.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TipoCliente
 *
 * @author pedro
 */
class TipoCliente {
    private $db;
    
    public function __construct() {
        $this->db = new DB();
    }
    /**
     * 
     * @return type
     */
    public function getAll() {
        return $this->db->query("SELECT * FROM tipocliente");
    }
    /**
     * 
     * @param type $param
     * @return type
     */
    public function getOne($param) {
        return $this->db->query("SELECT * FROM tipocliente WHERE id=:id", array(':id'=>$param));
    }    
}
