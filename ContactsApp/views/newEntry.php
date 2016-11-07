<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 

include 'header.php';

echo '<div class="menu" align="left">
                <br>
                <li  ><a href="../index.php"> < back</a></li>
                <br>
                <li  ><a href="viewAllContacts.php"> @ View Contacts > </a></li>
                <br>
            </div>
            
            <div class="display"><form class="form" method="POST" action="../controller/addContact.php">
                    <br><strong>NEW CONTACT DETAILS</strong <br><br>
                    Name <br> <input type="text" name="txtFname"> <br>
                    Surname <br> <input type="text" name="txtLname"> <br>
                    Tel (H) <br> <input type="text" name="txtTelH" "> <br>
                    Tel (W) <br> <input type="text" name="txtTelW" > <br>
                    Cellphone <br> <input type="text" name="txtCellphone"> <br>
                    Email Address <br> <input type="text" name="txtEmail"> <br><br>
                    <input type="submit" value="ADD CONTACT"><br><br>
                </form>
           </div>';

include 'footer.php';