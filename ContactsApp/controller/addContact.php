<?php

include_once "../Model/Contact.php";

// POST VARIABLES
$fName = trim($_POST["txtFname"]);
$lName = trim($_POST["txtLname"]);
$telephoneH = trim($_POST["txtTelH"]);
$telephoneW = trim($_POST["txtTelW"]);
$cellphone = trim($_POST["txtCellphone"]);
$email = trim($_POST["txtEmail"]);

//VALIDATE INPUT DATA 
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
        //Validation : check if the contact numbers are the correct length
        if((!empty($telephoneH) && strlen($telephoneH) < 10) or (!empty($telephoneW) && strlen($telephoneW) < 10) or (!empty($cellphone) && strlen($cellphone) < 10) ) {
             include "../views/header.php";
        echo '<div class="menu" align="left">
                <br>
                <li  ><a href="../views/newEntry.php"> < back</a></li>
                <br>
            </div>';
        echo 'Invalid telephone format<br>';
        include "../views/footer.php";
        } else {
            $entry = new Contact();

            if ($entry->addContact(strtoupper($fName), strtoupper($lName), $telephoneH, $telephoneW, $cellphone, $email) === TRUE) {
                include '../views/header.php';

                echo '<div class="menu" align="left">
                       <br>
                       <li><a href="../views/viewAllContacts.php"> < back</a></li>
                       <br>
                      </div>';

                echo 'Created contact successfully! <br>';

                include '../views/footer.php';
            } else {
                echo "customer not added";
            }
        }
    }
}
