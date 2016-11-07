<?php

include_once "../Model/Contact.php";

//Get POST form variables
$contactID = trim($_POST["id"]);
$fName = trim($_POST["txtFname"]);
$lName = trim($_POST["txtLname"]);
$telephoneH = trim($_POST["txtTelH"]);
$telephoneW = trim($_POST["txtTelW"]);
$cellphone = trim($_POST["txtCellphone"]);
$email = trim($_POST["txtEmail"]);

//Input Validations : check if atleast the contact names are entered
if (empty($_POST["txtFname"]) or empty($_POST["txtLname"])) {
    include "../views/header.php";
    echo '<div class="menu" align="left">
                <br>
                <li  ><a href="../views/newEntry.php"> < back</a></li>
                <br>
            </div>';
    echo 'Please fill in full names & details of contact <br>';
    include "../views/footer.php";
} else {

    //Input Validations : check if atleast one of contact tel/cell/email is entered
    if (empty($_POST["txtTelH"]) && empty($_POST["txtTelW"]) && empty($_POST["txtCellphone"]) && empty($_POST["txtEmail"])) {
        include "../views/header.php";
        echo '<div class="menu" align="left">
                <br>
                <li  ><a href="../views/newEntry.php"> < back</a></li>
                <br>
            </div>';
        echo 'Please enter atleast one contact attribute (Telephone , Cellphone or Email ) <br>';
        include "../views/footer.php";
    } else {
        //Declare object and call method to edit / save changes to contact data
        $entry = new Contact();
        if ($entry->editContact($contactID, strtoupper($fName), strtoupper($lName), $telephoneH, $telephoneW, $cellphone, $email) === TRUE) {
            include '../views/header.php';
            
            echo '<div class="menu" align="left">
                       <br>
                       <li><a href="../views/viewAllContacts.php"> < back</a></li>
                       <br>
                      </div>';
            
            echo 'Contact successfully edited! <br>';
            
            include '../views/footer.php';
        } else {
            echo "customer not added";
        }
    }
}
