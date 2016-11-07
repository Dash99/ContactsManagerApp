<?php

include_once "database.php";

class Contact {
    private $dbName = "contacts_db";
    
    //Class Members / Variables
    private $fName;
    private $lName;
    private $telephoneH;
    private $telephoneW;
    private $cellphone;
    private $email;

    public function _contact() {
        $this->fName = '';
        $this->lName = '';
        $this->telephoneH = '';
        $this->telephoneW = '';
        $this->$cellphone = '';
        $this->$email = '';
    }

    function setFname($fName) {
        $this->fName = $fName;
    }

    function setLname($lName) {
        $this->lName = $lName;
    }

    function setTelephoneH($telephoneH) {
        $this->telephoneH = $telephoneH;
    }

    function setTelephoneW($telephoneW) {
        $this->telephoneW = $telephoneW;
    }

    function setCellphone($cellphone) {
        $this->$cellphone = $cellphone;
    }

    function setEmail($email) {
        $this->$email = $email;
    }


    function getName() {
        return $this->fName;
    }
    
     function getSurname() {
        return $this->lName;
    }

    function getGender() {
        return $this->telephoneH;
    }

    function getDob() {
        return $this->telephoneW;
    }

   
    function getCellNo() {
        return $this->$cellphone;
    }

    function getPassword() {
        return $this->$email;
    }

    // Add New Contact Record
    public function addContact($fName, $lName, $telephoneH, $telephoneW, $cellphone, $email) {
        $db = new database();
        $sql = "INSERT INTO Contact(firstName, lastName, telephoneHome, telephoneWork, cellphoneNo, email) "
                . "VALUES('" . $fName . "' , '" . $lName . "' , '" . $telephoneH . "' , '" . $telephoneW . "' , '" . $cellphone . "' , '" . $email . "')";
        $db->connect($this->dbName);
        $result = mysql_query($sql, $db->getConnection());

        if ($result === FALSE) {
            echo mysql_error($db->getConnection());
        } else {
            return TRUE;
        }
        $db->disconnect();
    }
    
     // Edit Existing Contact Record
    public function editContact($contactID,$fName, $lName, $telephoneH, $telephoneW, $cellphone, $email) {
        $db = new database();
        $sql = "UPDATE `contact` SET `firstName`='".$fName."',`lastName`='".$lName."',`telephoneHome`='".$telephoneH."',`telephoneWork`='".$telephoneW."',`cellphoneNo`='".$cellphone."',`email`='".$email."' WHERE contactID =".$contactID;
        $db->connect($this->dbName);
        $result = mysql_query($sql, $db->getConnection());

        if ($result === FALSE) {
            echo mysql_error($db->getConnection());
        } else {
            return TRUE;
        }
        $db->disconnect();
    }

     // Get All Contact Records
      public function getAllContacts(){
         $db = new database();
        $sql = "SELECT * FROM contact";
        $db->connect($this->dbName);
        $results = mysql_query($sql, $db->getConnection());
        return $results;
    }
   
    // Get Contact Information by ID
      public function getContactInfo($contactID){
         $db = new database();
        $sql = "SELECT * FROM contact WHERE contactID='".$contactID."'";
        $db->connect($this->dbName);
        $results = mysql_query($sql, $db->getConnection());
        return $results;
    }
    
    // Delete Contact by ID
      public function delContact($contactID){
         $db = new database();
        $sql = "DELETE  FROM contact WHERE contactID='".$contactID."'";
        $db->connect($this->dbName);
        if( $results = mysql_query($sql, $db->getConnection())){
             return TRUE;
        }else{
            return FALSE;
        }
       
       
    }
    
}
