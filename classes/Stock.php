<?php
require_once 'DB.php';
require_once 'crud.php';

/**
 * Description of Stock
 *
 * @author pedro
 */
class Stock implements crud{
    private $db;
    
    public function __construct() {
        $this->db = new DB();
    }
    /**
     * 
     * @param type $artigo
     * @param type $cor
     * @param type $tamanho
     * @return type
     */
    public function deleten($artigo, $cor, $tamanho) {
        return $this->db->query("DELETE FROM stock WHERE cod_art=:id AND cor=:cor AND tamanho=:tamanho ", 
                array(':id'=>$artigo, ':cor'=>$cor, ':tamanho'=>$tamanho));
    }
    /**
     * 
     * @param type $artigo
     * @param type $cor
     * @param type $tamanho
     * @param type $qty
     * @return type
     */
    public function editn($artigo, $cor, $tamanho, $qty) {
        return $this->db->query("UPDATE stock SET qty=:qty WHERE cod_art=:id AND cor=:cor AND tamanho=:tamanho ",
                    array(':qty'=>$qty, ':id'=>$artigo, ':cor'=>$cor, ':tamanho'=>$tamanho));
    }
    /**
     * 
     * @param type $artigo
     * @return type
     */
    
    public function getAlln($artigo) {
        return $this->db->query("SELECT * FROM stock WHERE cod_art=:id ", array(':id'=>$artigo));
    }
    /**
     * 
     * @param type $artigo
     * @param type $cor
     * @param type $tamanho
     * @return type
     */
    public function getOnen($artigo, $cor, $tamanho) {
        return $this->db->query("SELECT * FROM stock WHERE cod_art=:id AND cor=:cor AND tamanho=:tamanho ",
                array(':id'=>$artigo, ':cor'=>$cor, ':tamanho'=>$tamanho));
    }
    /**
     * 
     * @param type $artigo
     * @param type $cor
     * @param type $tamanho
     * @param type $qty
     */
    public function setn($artigo, $cor, $tamanho, $qty) {
       return  $this->db->query("INSERT INTO stock(cod_art, cor, tamanho, qty) VALUES(:cod_art, :cor, :tamanho, :qty)" ,
                array(':qty'=>$qty, ':id'=>$artigo, ':cor'=>$cor, ':tamanho'=>$tamanho));
    }

    public function delete($param) {
        
    }
    /**
     * 
     * @param type $param
     * @param type $obj
     * @return result
     */
    public function edit($param, $obj) {
        return $this->db->query("UPDATE stock SET qty=:qty WHERE cod_art=:id AND cor=:cor AND tamanho=:tamanho ",
                    array(':qty'=>$obj->qty, ':id'=>$param, ':cor'=>$obj->cor, ':tamanho'=>$obj->tamanho));        
    }

    public function getAll() {
        
    }

    public function getOne($param) {
        
    }
    /**
     * 
     * @param type $obj
     * @return result
     */
    public function set($obj) {
        return $this->db->query("INSERT INTO stock(cod_art, cor, tamanho, qty) VALUES(:cod_art, :cor, :tamanho, :qty)" ,
                array(':qty'=>$obj->qty, ':id'=>$obj->artigo, ':cor'=>$obj->cor, ':tamanho'=>$obj->tamanho));    
    }

}
