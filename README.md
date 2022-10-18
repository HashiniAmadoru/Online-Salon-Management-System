# Online-Salon-Management-System
The salon management system is a web-based application which helps people to maintaining their beauty treatment. 


There are three types of users in the system, the system admin, salon owners and customers. 


That was developed in PHP Laravel framework with Bootstrap, jQuery and JavaScript. MySQL was selected for the database of the system.


**Scope of the project** :- That is developing for general purpose and to customer appointments of a salon in an effective way with the use of online system. Also, people can find out good cosmetic things. Because system explain details about good and new cosmetic things. There are three types of users in the system, the system admin, salon owners and customers.


		• Provide the facility to registration salon owners and maintaining their details.

		• Provide the facility to registration customers.

		• Customers can make appointments and salon owners can handle appointment effective way.

		• Facility panels for admin and salon owners.

		• Handling advertisement part

		• Customers can give ideas on the services they receive from the salon.

		• Handling salon products and salon services.

		• The system sends a notification to the customers regarding their appointments.

		• Handling the opening time and closing time of salons.

		• Salon owners can contact their customers through email.





>Customer Functions : -


		• Registration to the system

		• Make an appointment

		• Give their valuable comments for salon owners

		• Contact salon owner and Admin

		• Sale or Rent their beauty products

		• View the details of the Services and Products

		• View the details about available salons

		• View the other customer comments

		• View the details about advertisement parts 





>Salon Owners Functions :- 



		• Registration to the system

		• Login in to the system

		• Handle their profile page

		• Handle their appointments

		• Maintain resources (Accept / Delete) at the salon appointment.

		• Handle their products

		• Handle their services

		• Manage opening time and closing time

		• Contact customers and salon owners




>Admin Functions :- 


		• Manage the all details of the system

		• Handle Customers membership

		• Handle Salon owner membership

		• Handle Advertisement part

		• Contact Customers and Salon owners

		• Create and maintain Service part

		• View the details of the Appointment

		• View the details of the Customers comments
		
		

**Prerequisites**

	The Following are the prerequisites for Installation of online salon management system project on
	localhost.

	Web Server: XAMPP
	Composer : 

	Composer is the PHP Dependency Manager. For managing dependencies, Laravel uses composer.

	Make sure you have a Composer installed on your system.
		

**How to Install**

	Individual modules can be started or stopped on the XAMPP Control Panel through the corresponding buttons 
	under ‘Actions’(Apache, MySQL).

	Goes to “htdocs” folder in “C:\xampp” path and paste zipped source code file named as Salon.zip 
	and Extract that zip file.

	Go inside extracted folder. There include these file and folder list. 
	Then open command prompt or PowerShell command

	Then execute the command “composer install” 

	This process can take several minutes and install dependencies to the project.

	After successfully execute the command create new folder named 
	as “vendor” and create new file “composer.lock” in the source code folder

	Then need to configure database of the project. 
	As a first step for its open browser and navigate to http://localhost/phpmyadmin/ link.

	To create new database, need to go “Database” tab and give name(salon) 
	for database space where in under “Create Database” space. 
	Then click button “Create”. Then create database with that name(salon).

	Then go inside of the database by clicking left menu list database name which created.

	Then go to import tab and open file explorer to take SQL file (Click “Choose File”).
	Navigate files inside source code select file with extension .sql and 
	then go bottom-right of the page and click “go” button to import all data to your database.

	As a first step open .env file and set database configuration details. 

	Database Configuration

	DB_DATABASE - name of the database which created on XAMPP phpMyAdmin
	DB_USERNAME – get user name from XAMPP user account details
	DB_PASSWORD - get password from XAMPP user account details related to taken username

	Email Configuration (optional)

	Can use here included mail credentials or create new credentials for user their own.
	There needs secure app access on email address (Google not recommend it).

	MAIL_USERNAME – email address
	MAIL_PASSWORD – password of mail account
	MAIL_FROM_ADDRESS – email address

	Then File Explorer of opened folder. → File tab → Click on “Open Windows PowerShell” or “Open Command Prompt” and open.
	Then execute the command “php artisan storage:link” to get storage file

	After you can see “Storage” file in public folder.

	Then File Explorer of opened folder. → File tab → Click on “Open Windows PowerShell” or “Command Prompt” and open.
	Then execute the command “php artisan config:clear” to reset configuration details

	As a final step need to execute command “php artisan serve” to run the service of the project.
	There Laravel development server started host and port given as http://127.0.0.1:8000




