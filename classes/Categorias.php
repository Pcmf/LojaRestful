<?php
include_once 'DB.php';
include_once 'crud.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ctegorias
 *
 * @author pedro
 */
class Categorias implements crud {
    private $db;
    
    public function __construct(){
        $this->db = new DB();
    }
    /**
     * 
     * @param int $param
     * @return result
     */
    public function delete($param) {
        return $this->db->query("DELETE FROM categorias WHERE id=:id ", array(':id'=>$param));
    }
    /**
     * 
     * @param int $param
     * @param json $obj
     * @return result
     */
    public function edit($param, $obj) {
        return $this->db->query("UPDATE categorias SET nome=:nome, descricao=:descricao WHERE id=:id ", 
                array(':nome'=>$obj->nome, ':descricao'=>$obj->descricao, ':id'=>$param));
    }
    /**
     * 
     * @return array
     */
    public function getAll() {
        return $this->db->query("SELECT * FROM categorias");
    }
    /**
     * 
     * @param int $param
     * @return array
     */
    public function getOne($param) {
        return $this->db->query("SELECT * FROM categorias WHERE id=:id ", array(':id'=>$param));
    }
    /**
     * 
     * @param json $obj
     * @return result
     */
    public function set($obj) {
        return $this->db->query("INSERT INTO categorias(nome,descricao) VALUES(:nome, :descricao) " 
                , array(':nome'=>$obj->nome, ':descricao'=>$obj->descricao));
    }

}
