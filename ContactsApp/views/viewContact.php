<?php

include_once "../Model/Contact.php";

if (isset($_GET["id"])) {
    $contactID = $_GET["id"];
} else {
    $contactID = 0;
}

$contact = new Contact();

$results = $contact->getContactInfo($contactID);

include 'header.php';
echo '<div class="menu" align="left">
               <br>
                <li  ><a href="viewAllContacts.php"> < back</a></li>
                <br>
                <li  ><a href="newEntry.php"> + Add Contact ></a></li>
                <br>
           </div>';

echo '<div class="column" align="right">
           <h2>CONTACT </h2>
           Full Names : <br>
           Cellphone No : <br>
           Tel (H) : <br>
           Tel (W) : <br>
           Email : <br>
           </div>';

echo '<div class="column">
           <h2>DETAILS</h2> ';

while ($row = mysql_fetch_assoc($results)) {
    echo $row["firstName"] . " " . $row["lastName"] . '<br>';
    echo $row["cellphoneNo"] . '<br>';
    echo $row["telephoneHome"] . '<br>';
    echo $row["telephoneWork"] . '<br>';
    echo $row["email"] . '<br><br><br>';
    echo '<a href="editEntry.php?id=' . $row["contactID"] . '"> edit ^ </a> &nbsp; &nbsp; &nbsp; &nbsp;';
    echo '<a href="../Controller/delContact.php?id=' . $row["contactID"] . '"> delete x </a> <br>';
}

echo '</div>';

include 'footer.php';
