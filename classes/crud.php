<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author pedro
 */
interface crud {
    /**
     * @return array artigos
     */
    public function getAll();
    /**
     * 
     * @param int artigo_id
     * @return array artigo
     */
    public function getOne($param);
    /**
     * 
     * @param objJson artigo
     * @return result
     */
    public function set($obj);
    /**
     * 
     * @param int artigo_id
     * @param objJson artigo
     * @return result
     */
    public function edit($param,$obj);
    /**
     * 
     * @param int artigo_id
     */
    public function delete($param);
}
