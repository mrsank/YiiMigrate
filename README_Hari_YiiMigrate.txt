/************************************************

Author : Harisankar.M.R
Date : 02/09/2015
Project : YII 2 Application
Tasks : 1. add an Avatar to Users
	2. add a mobile number to Users
	3. build a profile for registered Users (including regular show, editing and canceling the account)
Version : 1.0

***********************************************/

Database dump
==============
Fresh dump can be found in the below location of file. 
/YiiMigrate/database/yiimigrate.sql

Please make sure you use the same names or else you can use the above dump and make neccessery name changes in below location and also make sure to change the database credentials as well from same location below:
/YiiMigrate/common/config/main-local.php


Project location
=================
The project can be start from the below location. 
http://localhost/YiiMigrate/frontend/web/index.php

The project part can be initialised from the Home button which is on the top right panel.  In case if you find any issue you can also start the page from below location:
http://localhost/YiiMigrate/frontend/web/index.php?r=customer


Additional Image file
=====================
PLEASE DO NOT DELETE THE BELOW FILE. AS IT IS BEING USED AS DEFAULT AVATAR FOR USERS
/YiiMigrate/frontend/web/uploads/default.jpg

All the images being uploaded will be stored to the above location. So if you are using a linux machine please make sure to give full permission to the above folder location.


Note for linux user
====================
Please make the neccesery changes in '/' (backslash) if you are working in a linux machine. As my machine was windows I made it accordingly in the below files:
/YiiMigrate/frontend/controllers/CustomerController.php
/YiiMigrate/frontend/views/customer/view.php


User Credentials ( If needed)
===============================
Username : testuser
Password : test@test