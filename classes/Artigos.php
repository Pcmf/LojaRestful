<?php
require_once 'DB.php';
require_once 'crud.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Artigos
 *
 * @author pedro
 */
class Artigos implements crud {
    private $db;
    
    public function __construct() {
        $this->db = new DB();
    }
    
    /**
     * 
     * @return array
     */
    public function getAll() {
        return $this->db->query("SELECT A.*, C.nome AS catnome, C.descricao AS catdescricao"
                . " FROM artigos A "
                . " INNER JOIN categorias C ON C.id=A.id ");
    }
    /**
     * 
     * @param int
     * @return array
     */
    public function getOne($param) {
        return $this->db->query("SELECT * FROM artigos A "
                . " INNER JOIN categorias C ON C.id=A.id ");
    }
    /**
     * 
     * @param artigo $obj
     * @return result
     */
    public function set($obj) {
        return $this->db->query("INSERT INTO artigos() VALUES(nome,descricao,fotografias, categoria, precocompra, pvp, precorevenda, reffornecedor) "
                . " VALUES(:nome, :descricao, :fotografias, :categoria, :precocompra, :pvp, :precorevenda, :reffornecedor ) "
                , array(':nome'=>$obj->nome, ':descricao'=> $obj->descricao, ':fotografias'=>$obj->fotografias, ':categoria'=>$obj->categoria,
                    ':precocompra'>$obj->precocompra, ':pvp'=>$obj->pvp, ':precorevenda'=>$obj->precorevenda, ':reffornecedor'=>$obj->reffornecedor));
    }

    /**
     * 
     * @param type $param
     */
    public function delete($param) {
        return $this->db->query("DELETE FROM artigos WHERE id=:id ", array(':id'=>$param));
        
    }
    /**
     * 
     * @param int artigo_id
     * @param objJson artigo
     * @return result
     */
    public function edit($param, $obj) {
        return $this->db->query("UPDATE artigos SET nome=:nome, descricao=:descricao, fotografias=:fotografias, categoria=:categoria,"
                . " precocompra=:precocompra, pvp=:pvp, precovenda=:precorevenda, reffornecedor=:reffornecedor "
                . " WHERE id=:id ",
                array(':nome'=>$obj->nome, ':descricao'=> $obj->descricao, ':fotografias'=>$obj->fotografias, ':categoria'=>$obj->categoria,
                    ':precocompra'>$obj->precocompra, ':pvp'=>$obj->pvp, ':precorevenda'=>$obj->precorevenda, ':reffornecedor'=>$obj->reffornecedor
                , ':id'=>$param));
        
    }



}
