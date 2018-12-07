<?php

include_once 'DB.php';
include_once 'crud.php';

/**
 * Description of Cores
 *
 * @author pedro
 */
class Cores implements crud{
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
        return $this->db->query("DELETE FROM cores WHERE id=:id ", array(':id'=>$param));
    }
    /**
     * 
     * @param type $param
     * @param type $obj
     * @return type
     */
    public function edit($param, $obj) {
        return $this->db->query("UPDATE cores SET nomecor=:nomecor WHERE id=:id ", array(':nomecor'=>$obj->nomecor, ':id'=>$param));
    }
    /**
     * 
     * @return type
     */
    public function getAll() {
        return $this->db->query("SELECT * FROM cores");
    }
    /**
     * 
     * @param type $param
     * @return type
     */
    public function getOne($param) {
        return $this->db->query("SELECT * FROM cores WHERE id=:id ", array(':id'=>$param));
    }
    /**
     * 
     * @param type $obj
     * @return type
     */
    public function set($obj) {
        return $this->db->query("INSERT INTO cores(nomecor) VALUES(:nomecor) ", array(':nomecor'=>$obj->nomecor));
    }

}
