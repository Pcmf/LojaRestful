<?php

include_once 'DB.php';
include_once 'crud.php';

/**
 * Description of Fornecedores
 *
 * @author pedro
 */
class Fornecedores  implements crud{
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
        return $this->db->query("DELETE FROM fornecedores WHERE id=:id ", array(':id'=>$param)); 
    }
    /**
     * 
     * @param type $param
     * @param type $obj
     * @return type
     */
    public function edit($param, $obj) {
        return $this->db->query("UPDATE fornecedores SET empresa=:empresa, telefone=:telefone, email=:email,"
                . " responsavel=:responsavel, morada=:morada, nif=:nif WHERE id=:id ", 
                array(':empresa'=>$obj->empresa, ':telefone'=>$obj->telefone, ':emai'=>$obj->email, 'responsavel'=>$obj->responsavel, 
                    ':morada'=>$obj->morada, ':nif'=>$obj->nif, ':id'=>$param));
    }
    /**
     * 
     * @return type
     */
    public function getAll() {
       return $this->db->query("SELECT * FROM fornecedores"); 
    }
    /**
     * 
     * @param type $param
     * @return type
     */
    public function getOne($param) {
       return $this->db->query("SELECT * FROM fornecedores WHERE id=:id ", array(':id'=>$param)); 
        
    }
    /**
     * 
     * @param type $obj
     * @return type
     */
    public function set($obj) {
        return $this->db->query("INSERT INTO fornecedores(empresa, telefone, email, responsavel, morada, nif) "
                . " VALUES(:empresa, :telefone, :email, :responsavel, :morada, :nif) ", 
                array(':empresa'=>$obj->empresa, ':telefone'=>$obj->telefone, ':emai'=>$obj->email, 'responsavel'=>$obj->responsavel, 
                    ':morada'=>$obj->morada, ':nif'=>$obj->nif));
    }

}
