<?php

include_once "../Model/Contact.php";

$contactID = $_GET["id"];

$delete = new Contact();

if ($delete->delContact($contactID) === TRUE) {
    include "../views/header.php";
    echo '<div class="menu" align="left">
                <br>
                <li  ><a href="../views/viewAllContacts.php"> < back</a></li>
            </div>';
    echo 'Contact deleted successfully! ';
    include '../views/footer.php';
} else {
    echo "customer not deleted";
}
