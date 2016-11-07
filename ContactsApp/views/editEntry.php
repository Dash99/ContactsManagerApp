<?php 

include_once "../Model/Contact.php";

if(isset($_GET["id"])){
$contactID = $_GET["id"];
}else{
    $contactID = 0;
}

$contact = new Contact();

$result = $contact->getContactInfo($contactID);

$row = mysql_fetch_assoc($result);

include 'header.php';
echo '<div class="menu" align="left">
                <br>
                <li  ><a href="viewContact.php?id='.$row["contactID"].'"> < back</a></li>
                <br>
                <li  ><a href="viewAllContacts.php"> < back</a></li>
                <br>
            </div>
            
            <div class="display"><form class="form" method="POST" action="../controller/editContact.php">
                    <br><strong>NEW CONTACT DETAILS</strong <br><br>
                    Name <br> <input type="text" name="txtFname" value="'.$row["firstName"].'"> <br>
                    Surname <br> <input type="text" name="txtLname" value="'.$row["lastName"].'"> <br>
                    Tel (H) <br> <input type="text" name="txtTelH" value="'.$row["telephoneHome"].'"> <br>
                    Tel (W) <br> <input type="text" name="txtTelW" value="'.$row["telephoneWork"].'"> <br>
                    Cellphone <br> <input type="text" name="txtCellphone" value="'.$row["cellphoneNo"].'"> <br>
                    Email Address <br> <input type="text" name="txtEmail" value="'.$row["email"].'"> <br><br>
                        <input type="hidden" name="id" value="'.$row["contactID"].'">
                    <input type="submit" value="SAVE CHANGES"><br><br>
                </form>
           </div>';
include 'footer.php';