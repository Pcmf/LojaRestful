<?php
require_once 'DB.php';
require_once 'crud.php';

/**
 * Description of Tamanhos
 *
 * @author pedro
 */
class Tamanhos implements crud{
    private $db;
    
    public function __construct() {
        $this->db = new DB();
    }
    /**
     * 
     * @param type $param
     * @return type
     */
    public function delete($param) {
        return $this->db->query("DELETE FROM tamanhos WHERE id=:id ", array(':id'=>$param));
    }
    /**
     * 
     * @param type $param
     * @param type $tamanho
     * @param type $escala
     * @return type
     */
    public function editn($param, $tamanho, $escala) {
        return $this->db->query("UPDATE tamanhos SET tamanho=:tamanho, escala=:escala WHERE id=:id ",
                array(':tamanho'=>$tamanho, ':escala'=>$escala , ':id'=>$param));
    }
    /**
     * 
     * @return type
     */
    public function getAll() {
        return $this->db->query("SELECT * FROM tamanhos");
    }
    /**
     * 
     * @param type $param
     * @return type
     */
    public function getOne($param) {
        return $this->db->query("SELECT * FROM tamanhos WHERE id=:id ", array(':id'=>$param) );
        
    }
    /**
     * 
     * @param type $tamanho
     * @param type $escala
     * @return type
     */
    public function setn($tamanho, $escala) {
        return $this->db->query("INSERT INTO tamanhos(tamanho,escala) VALUES(:tamanho, :escala)",
                array(':tamanho'=>$tamanho, ':escala'=>$escala ));
    }
    /**
     * 
     * @param type $param
     * @param type $obj
     * @return type
     */
    public function edit($param, $obj) {
            return $this->db->query("UPDATE tamanhos SET tamanho=:tamanho, escala=:escala WHERE id=:id ",
                array(':tamanho'=>$obj->tamanho, ':escala'=>$obj->escala , ':id'=>$param));    
    }
    /**
     * 
     * @param type $obj
     * @return result
     */
    public function set($obj) {
        return $this->db->query("INSERT INTO tamanhos(tamanho,escala) VALUES(:tamanho, :escala)",
                array(':tamanho'=>$obj->tamanho, ':escala'=>$obj->escala ));        
    }

}
