<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description
 *
 * @author 
 */

class database {
    private $host = "localhost";
    private $username = "root";
    
    function connect($dbName){
        $conn = $this->getConnection();
        if($conn===FALSE){
            echo mysql_error();
        }else{
            mysql_select_db($dbName, $conn);
        }
    }
    
    public function  getConnection(){
         return mysql_connect($this->host, $this->username);
    }
    
    function disconnect(){
        mysql_close();
    }
}
