<?php
   #---------------------------------------------------------------------------------------------------
   # Making sure whether user is logged in.
   session_start();
   ob_start();
   #---------------------------------------------------------------------------------------------------
   # Inlcude files
   include('admin/includes/adm-configuration-inc.php'); 	# Global variable configuration file
   require('admin/includes/adm-connection-inc.php');		# Database connection file
   include('includes/phpfunctions-inc.php'); 	# Global variable configuration file
   include('includes/mailer.php'); 	# Global variable configuration file

   #---------------------------------------------------------------------------------------------------
   # Local Variables
   $msgId=isset($_REQUEST['msg']) ? $_REQUEST['msg'] : null; 				# Message code
   $id=isset($_REQUEST['id']) ? $_REQUEST['id'] : null; 					# Content Id
   #---------------------------------------------------------------------------------------------------
   
?>