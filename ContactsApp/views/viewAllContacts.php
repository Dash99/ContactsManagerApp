<?php 

include_once "../Model/Contact.php";

$contact = new Contact();

$results = $contact->getAllContacts();

include 'header.php';
echo '<div class="menu" align="left"><br>
                <li  ><a href="../index.php"> < back</a></li>
                 <br>
                <li  ><a href="newEntry.php"> + Add Contact ></a></li>
                <br>
           </div>
           <div class="display" align="right">';
echo '<br><h2>CONTACT NAME LIST</h2>';

while($row = mysql_fetch_assoc($results)){
    echo $row["firstName"]." ".$row["lastName"]."&nbsp; &nbsp; &nbsp; &nbsp; ". '<a href="viewContact.php?id='.$row["contactID"].'"> view contact > </a>'.'&nbsp; &nbsp; &nbsp; &nbsp; <br>';
}

echo '<br><br></div>';
include 'footer.php';