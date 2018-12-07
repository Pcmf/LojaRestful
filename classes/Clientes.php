<?php
include_once 'DB.php';
include_once 'crud.php';

/**
 * Description of Clientes
 *
 * @author pedro
 */
class Clientes implements crud {
    private $db;

    public function __construct() {
        $this->db = new DB();
    }
    /**
     * 
     * @param int $param
     * @return result
     */
    public function delete($param) {
        return $this->db->query("DELETE FROM clientes WHERE id=:id ", array(':id'=>$param));
    }
    /**
     * 
     * @param int $param
     * @param json $obj
     * @return result
     */
    public function edit($param, $obj) {
        return $this->db->query("UPDATE clientes SET tipo=:tipo, nome=:nome, email=:email, nif=:nif, telefone=:telefone,"
                . " moradarua=:moradarua, moradalocalidade=:moradalocalidade, moradacp=:moradacp, moradapais=:moradapais, "
                . " username=:username, pass=:pass, ativo=1 WHERE id=:id ",
                array(':tipo'=>$obj->tipo, 'nome'=>$obj->nome, ':email'=>$obj->email, ':nif'=>$obj->nif, ':telefone'=>$obj->telefone,
                    ':moradarua'=>$obj->moradarua, ':moradalocalidade'=>$obj->moradalocalidade, ':moradacp'=>$obj->moradacp, 
                    ':moradapais'=>$obj->moradapais, ':username'=>$obj->username, ':pass'=>$obj->pass, ':id'=>$param));
    }
    /**
     * 
     * @return array
     */
    public function getAll() {
        return $this->db->query("SELECT * FROM clientes");
    }
    /**
     * 
     * @param int $param
     * @return array
     */
    public function getOne($param) {
        return $this->db->query("SELECT * FROM clientes WHERE id=:id ", array(':id'=>$param));
    }
    /**
     * 
     * @param json $obj
     * @return result
     */
    public function set($obj) {
        return $this->db->query("INSERT INTO clientes(tipo, nome,email,nif,telefone,moradarua,moradalocalidade,"
                . " moradacp,moradapais, username, pass, ativo, data) VALUES(:tipo, :nome, :email, :nif, :telefone,"
                . " :moradarua, :moradalocalidade, :moradacp, :moradapais, :username, :pass, 1, NOW())" ,
                array(':tipo'=>$obj->tipo, ':nome'=>$obj->nome, ':email'=>$obj->email, ':nif'=>$obj->nif,
                    ':telefone'=>$obj->telefone, ':moradarua'=>$obj->moradarua, ':moradalocalidade'=>$obj->moradalocalidade,
                    ':moradacp'=>$obj->moradacp, ':moradapais'=>$obj->moradapais, ':username'=>$obj->username, ':pass'=>$obj->pass));
    }

}
