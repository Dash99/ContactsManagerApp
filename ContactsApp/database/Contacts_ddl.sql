/* 	
	R E A D   I N S T R U C T I O N S
	1 - Open myPhpAdmin
	2 - Select SQL tab
	3 - Copy entire script from this file onto the sql command
	4 - Paste & RUN the script to create DATABASE, TABLE & ATTRIBUTES NEEDED
*/

Create database contacts_db; 
use contacts_db; 
Create table contact(contactID int NOT NULL PRIMARY KEY AUTO_INCREMENT, firstName varchar(20) NOT NULL, lastName varchar(20) NOT NULL, telephoneHome varchar(15), telephoneWork varchar(15), cellphoneNo varchar(15), email varchar(50));