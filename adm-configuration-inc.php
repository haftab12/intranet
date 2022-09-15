<?php
	//==========================================  Website Section  ===================================================
	$ERROR_UNKNOWN="Unknown error occured.Please try again!!!";
	$ERROR_FILE_EXISTS="File already uploaded.Please try another file!!!";
	$ERROR_NO_BANNER_TITLE="File can not be uploaded without title";
	$ERROR_DB_INSERT="<font color='red'>Row type does not match with the number you are entering.Please try again</font>";
	$ERROR_DB_DELETE="<font color='red'>Error occured while deleting row from database";
	$MandatorySign="<font color='red'>*</font>";
	//================================================================================================================
	
	
	//================================================  Admin Section  ===========================================================
	$EmailReminder=7;
	# ************************************************** HELP DOCUMENTS **********************************************************
	$Max_Help_Doc_Per_Page=10;
	# ***************************************************** REPORTS **************************************************************
	$Max_Cron_Rows_Per_Page=10;
	# *************************************************** BANNER MANAGER *********************************************************
	$Max_Banner_Rows_Per_Page=10;
	# **************************************************** ROLE MANAGER **********************************************************
	$Max_User_Rows_Per_Page=10;
	$Max_Group_Rows_Per_Page=10;
    # **************************************************** ROLE MANAGER **********************************************************
	$Max_Page_Rows_Per_Page=20;
	# User activate and inactivate email content
	$User_Account_Email_Subject="Eval Tracker Account Activity";
	$User_Account_Email_From="evaltracker@niksun.com";
	# Email content once user account activated
	$Activated_User_Email="Your account has been activated.<br>";	
	# Email content once user account inactivated
	$Inactivated_User_Email="Your account has been inactivated.<br>";
	# *************************************************** LINKS MANAGER *********************************************************
	$Max_Link_Rows_Per_Page=10;
	$Max_NavBar_Rows_Per_Page=10;
	# *************************************************** LINKS MANAGER *********************************************************
	$newsPerPage=10;
	# **************************************************** FAQ MANAGER **********************************************************
	$Max_FAQ_Rows_Per_Page=10;
	# ************************************************** DOWNLOAD MANAGER *******************************************************
	$Max_DownFile_Rows_Per_Page=10;
	$Max_DownFile_Front_Per_Page=10;
	# ************************************************** IT Department **********************************************************
	$ITDownloadCatArray=array("Windows","Linux","Mac","Software","Security","Network","Java","Drivers","Remote","Compression");
	$ITDownloadCatImgArray=array("NIKSUN_winfiles_0210.png","NIKSUN_linuxfiles_0210.png","NIKSUN_macfiles_0210.png",
	"NIKSUN_softwarefiles_0210.png","NIKSUN_securityfiles_0210.png","NIKSUN_networkfiles_0210.png","NIKSUN_javafiles_0210.png",
	"NIKSUN_driverfiles_0210.png","NIKSUN_remotefiles_0210.png","NIKSUN_compfiles_0210.png");
	$ITDownloadCatBannerArray=array("NIKSUN_win_banner_0210.jpg","NIKSUN_linux_banner_0210.jpg","NIKSUN_mac_banner_0210.jpg",
	"NIKSUN_software_banner_0210.jpg","NIKSUN_security_banner_0210.jpg","NIKSUN_network_banner_0210.jpg",
	"NIKSUN_java_banner_0210.jpg","NIKSUN_driver_banner_0210.jpg","NIKSUN_remote_banner_0210.jpg",);

	$ITFaqCatArray=array("Windows","Linux","Installation");
	$ITFaqCatImgArray=array("Windows"=>"windows_logo.png",
							"Linux"=>"linux_logo.png",
							"Installation"=>"installation_logo.png");
	$RSA_Request_To="itfeedback@niksun.com";
	$RSA_Request_Subject="RSA Key Request";
	# ************************************************** HR Department **********************************************************
	$HRDocCatAllArray=array("H/R Forms","Legal Documents","Management Forms","New Hire Forms",
	"Vacation / Time Off Forms","Travel Forms","L1 Visa Documents","Emergency Response","Miscellaneous");
	
	$HRDocCatAllImgArray=array("NIKSUN_hradmin_documents_0210.png","NIKSUN_legaldocuments_0210.png",
	"NIKSUN_managementdocs_0210.png","NIKSUN_newhireforms_0210.png","NIKSUN_vacationforms_0210.png","NIKSUN_travelforms_0210.png",
	"NIKSUN_visaforms_0210.png","NIKSUN_emergency_0210.png","NIKSUN_miscforms_0210.png");
		
	$HRDocCatArray=array("NIKSUN policies", "H/R Forms","Interview Forms","Legal Documents","Management Forms","New Hire Forms",
	"Vacation / Time Off Forms","Travel Forms","L1 Visa Documents","Emergency Response","NIKSUN Handbook","Miscellaneous");
	
	$HRDocCatImgArray=array("NIKSUN_hradmin_documents_0210.png","NIKSUN_interviewforms_0210.png","NIKSUN_legaldocuments_0210.png",
	"NIKSUN_managementdocs_0210.png","NIKSUN_newhireforms_0210.png","NIKSUN_vacationforms_0210.png","NIKSUN_travelforms_0210.png",
	"NIKSUN_visaforms_0210.png","NIKSUN_emergency_0210.png","NIKSUN_miscforms_0210.png");
	
	$HRDocCatBannerArray=array("NIKSUN_hradmin_banner_0210.jpg","NIKSUN_interview_banner_0210.jpg","NIKSUN_legal_banner_0210.jpg",
	"NIKSUN_management_banner_0210.jpg","NIKSUN_newhire_banner_0210.jpg","NIKSUN_vacation_banner_0210.jpg","NIKSUN_travel_banner_0210.jpg",
	"NIKSUN_visa_banner_0210.jpg","NIKSUN_emergency_banner_0210.jpg","NIKSUN_misc_banner_0210.jpg");
	$Int_Assessment_Cust_To="recruit@niksun.com";
	$Int_Assessment_Cust_Subject="Interview Assessment Form - Customer Support";
	$Int_Assessment_Mark_To="recruit@niksun.com";
	$Int_Assessment_Mark_Subject="Interview Assessment Form - Marketing";
	$Int_Assessment_Sales_To="recruit@niksun.com";
	$Int_Assessment_Sales_Subject="Interview Assessment Form - Sales";
	$Int_Assessment_SE_To="recruit@niksun.com";
	$Int_Assessment_SE_Subject="Interview Assessment Form - SE";
	$Int_Assessment_Support_To="recruit@niksun.com";
	$Int_Assessment_Support_Subject="Interview Assessment Form - Support";
	# ****************************************** Sales Operations Department ****************************************************
 	$Non_Standard_Pricing_Request_To="salesops@niksun.com";
	$Non_Standard_Pricing_Request_Subject="Non-Standard Configuration Quote Request";
	# *********************************************** Marketing Department ******************************************************
	$Collateral_Request_To="marketing@niksun.com";
	$Collateral_Request_Subject="Giveaways/Collateral Request";
	$Event_Request_To="marketing@niksun.com";
	$Event_Request_Subject="Event Request";
	$Post_Event_Request_To="marketing@niksun.com";
	$Post_Event_Request_Subject="Post Event Submittal Form";
	$Intranet_Update_Request_To="mspaniol@niksun.com";
	$Intranet_Update_Request_Subject="Intranet Update Request";
	# ************************************************* PM Department ***********************************************************
	$Enhancement_Request_To="pmg@niksun.com";
	$Enhancement_Request_Subject="Enhancement Request";
	$Scan_Request_To="pm@niksun.com";
	$Scan_Request_Subject="Vulnerability Scan Report Form";
	$Beta_Form_To="pm@niksun.com";
	$Beta_Form_Subject="NIKSUN Beta Form";
	# ***************************************************************************************************************************
	$FormResponseArray=array( "Your request could not be submitted.Please try again later.",
							  "Your non-standard configuration Quote Request has been successfully submitted.
							  We will respond you soon.<br>
						      Sales Operations Department.",
							  "Your Collateral/Giveaways Request has been successfully submitted.
							  We will respond you soon.<br>
						      NIKSUN Marketing Team.",
							  "Your event request has been successfully submitted.
							  We will respond to you soon.<br>
						      NIKSUN Marketing Team.",
							  "Your post event Request has been successfully submitted.
							  We will respond to you soon.<br>
						      NIKSUN Marketing Team.",
							  "Your intranet update Request has been successfully submitted.
							  We will respond to you soon.<br>
						      NIKSUN Marketing Team.",
							  "Your enhancement request has been successfully submitted.
							  We will respond to you soon.<br>
						      Product Management.",
							  "Your client scan request has been successfully submitted.
							  We will respond to you soon.<br>
						      Product Management.",
							  "Your RSA key request has been successfully submitted.
							  We will respond to you soon.<br>
						      IT Department.",
							  "Your NIKSUN Beta Form has been successfully submitted.
							  We will respond to you soon.<br>
						      PM Department.",							  
							  "Interview Assessment Form for Technical Support has been successfully submitted.<br>
						       H/R.",
							  "Interview Assessment Form for Sales has been successfully submitted.<br>
						       H/R.",
							  "Interview Assessment Form for SE has been successfully submitted.<br>
						       H/R.",
							  "Interview Assessment Form for Customer Support has been successfully submitted.<br>
						       H/R.",
							  "Interview Assessment Form for Marketing has been successfully submitted.<br>
						       H/R.",
							 "Thank you for your registration.<br> We are looking forward to seeing you at 2011 Sales Kickoff.
							    If you have any question related to your registration, please contact",
							 "Your special patch request has been successfully submitted. We will respond to you soon.<br>
						      Engineering.",
							"Your special patch request has been successfully submitted. We will respond to you soon.<br>
						      PM.",
							"Your Student Internship Program request has been successfully submitted. We will respond to you soon.<br>
						      H/R.",
							 "Your POC/Evalution information request has been successfully submitted. We will respond to you soon.<br>
						      PM Department.",
							  "Your poster request has been successfully submitted.");

										  
	//Forgot password email
	$Forgot_Pwd_Subject	= "Password Request";
	$Forgot_Pwd_From	= "no-reply@niksun.com";
	//----------------------------------------------------
	
	//------------------- Row Title ----------------------
			$A_Email_Addr="Web.Develpoment Email Address";
			$A_Email_Subj="Email Subject";
			$A_Email_Cont="Email Content";
			$A_Email_Temp_Name="Email Template Name";
			$A_Email_Group="Email Group Name";
			$A_Email_Reply="Reply Email ";
	//----------------------------------------------------
	//------------------- Page Titles --------------------
			$A_Index_Title="Admin Section";
			$A_Forgot_Pwd="Forgot Password";
	//----------------------------------------------------
	
	////---------------Page Headers-----------------------
			$A_Index_Right="WELCOME TO ADMIN";
			$A_Index_Left="EVAL TRACKER";
	//----------------------------------------------------
	
	////----------------Horizontal Links------------------
			$A_Cont_Man="Content Manager";
			$A_Email_Man="Email Manager";
			$A_Comm_Man="Communication Manager";
			$A_User_Group="Users / Groups";
			$A_Banners="Banners";
			$A_Edit_Group="Edit Group";
			$A_Edit_Content="Edit Content";
	//----------------------------------------------------
	
	//---------------- Page Footer -----------------------
			$A_Footer="<div align='left' style='margin:5px 0 0 0;'><b>Copyright 2014 NIKSUN Inc.</b></div>
						<div align='right' style='margin:-15px 0 0 0;'> <b>Web Development Team</b></div>";
	//----------------------------------------------------
	
	//------------- Admin Page values---------------------
			/* Drop down menu unselected value */
			$A_Select="-------Select-------";
			/* Fckeditor height */
			$A_ConMan_Fck_Height="500";
			$A_ConMan_Fck_Width="700";
			$A_EmailMan_Fck_Width="300";
			$A_EmailMan_Fck_Height="300";
			$A_Group_Fck_Height="400";
			$A_Group_Fck_Width="800";
			$A_Content_Fck_Height="400";
			$A_Content_Fck_Width="800";
	//----------------------------------------------------
	//================================================= Arrays ======================================================
		//Error Messages Array
	$MESSAGES_ARRAY=array("01" => "<font color='red'><u>ERROR01:</u>&nbsp;Wrong username or password.</font>",
						  "02" => "<font color='red'><u>ERROR02:</u>&nbsp;You are not currently logged in</font>",
						  "03" => "<font color='black' style='font-weight:bold'>You have been successfully logged out</font>",
						  "04" => "<font color='red'><u>ERROR03:</u>&nbsp;Email does not match with our system.</font>",
						  "05" => "<font color='#999999'>Your password has been sent to your email.</font>",
						  "06" => "<font color='red'><u>ERROR06:</u>&nbsp;Email could not be sent".
						  			 "<br>Please notify Web Development about this error.</font>".
									 "<br>Web Development:<a href='mailto:we.development@niksun.com'>web.development@niksun.com</a>",
						  "07" => "<font color='black' style='font-weight:bold'>You have been successfully updated you account.</font>",
						  "08" => "<font color='red'><u>ERROR08:</u>&nbsp;Your account is inactive.</font>",
						  "09" => "<font color='red'><u>ERROR09:</u>&nbsp;Attachment could not be uploaded.</font>",
						  "10" => "<font color='red'><u>ERROR10:</u>&nbsp;File could not be uploaded.</font>",
						  "11" => "<font color='red'><u>ERROR11:</u>&nbsp;No file exists to delete.</font>",
						  "12" => "<font color='black' style='font-weight:bold'><u>Note:</u>&nbsp;Your Evaluation Request has been received.<br>
						  		   Assigned evaluation agreement will be required before evaluation equipment can be shipped.<br>
								   Please <a href='upload_eval_agreement.php'>CLICK HERE</a> to upload evaluation agreement. </font>",
						  "13" => "<font color='red'><u>ERROR13:</u>&nbsp;We could not process your request.<br>
						  			Please try again later.</font>",
						  "14" => "<font color='black' style='font-weight:bold'>Your Request has been received and will be
						  			processed soon. <br> Thank you.</font>",
						  "15" => "<font color='black' style='font-weight:bold'>Permission has been succesfully saved.</font>",
						  "16" => "<font color='red'>No Permission has been saved.</font>",
						  "17" => "<font color='red'><u>ERROR17:</u>&nbsp;Your account is not <br>approved yet.</font>",
						  "18" => "<font color='red'><u>ERROR18:</u>&nbsp;Your account request <br>has been denied.</font>",
						  "19" => "MSG19:Thank you for registering with us. Your account request will be reviewed.Once your account is<br>
							   	   approved you will be notified by email with your credentials.<br><br><br><br><br><br><br><br>",
						  "20" => "<br><br>MSG20:Your request has been sent.You will receive a confirmation email.<br><br><br><br>",
						  "21" => "<br><br><font color='red'><u>ERROR21:</u>&nbsp;File Size is larger then 80 MB.</font><br><br><br><br>",
						  "22" => "<br><br>MSG22:Your request has been sent.You will receive a confirmation email.<br><br><br><br>",
						  "23" => "<br><br><font color='red'><u>ERROR23:</u>&nbsp;We could not receive your request please try again.</font><br><br><br><br>",
						  "24" => "<font color='green'><u>MSG24:</u>&nbsp;Email successfully sent.</font>",
						  "25" => "<font color='red'><u>ERROR25:</u>&nbsp;Could not send email.</font>",
						  "26" => "<font color='red'><u>ERROR26:</u>&nbsp;Code you entered and code on image does not match.</font>",
						  "27" => "<font color='red'><u>ERROR27:</u>&nbsp;File can not be uploaded without title.</font>",
						  "28" => "<font color='red'><u>ERROR28:</u>&nbsp;Unknown error occured.Please try again!!!</font>",	
						  "29" => "<font color='red'><u>ERROR29:</u>&nbsp;File already uploaded.Please try another file!!!.</font>",
						  "30" => "<font color='red'><u>ERROR30:</u>&nbsp;Page can not be deleted.</font>",
						  "31" => "<font color='red'><u>ERROR31:</u>&nbsp;Page you requested is not avaliable.</font>",
						  "32" => "<font color='red'><u>ERROR32:</u>&nbsp;Default department can not be deleted.</font>",
						  "33" => "<font color='red'><u>ERROR33:</u>&nbsp;Default banner can not be deleted.</font>",
						  "34" => "<font color='red'><u>ERROR34:</u>&nbsp;This email adress is already in use.</font>",
						  "35" => "<font color='red'><u>ERROR35:</u>&nbsp;Default file can not be deleted.</font>",
						  "36" => "<font color='red'><u>ERROR36:</u>&nbsp;Your group is inactive.</font>",
						  "37" => "<font color='red'><u>ERROR37:</u>&nbsp;Your could not be updated.</font>",
						  "38" => "<font color='red'><u>ERROR38:</u>&nbsp;There is not enough specified hard drive.</font>",
						  "39" => "<font color='red'><u>ERROR39:</u>&nbsp;Inventory can not be deleted since it is assigned.</font>",
						  "40" => "<font color='red'><u>ERROR40:</u>&nbsp;Another group has View All Flag on.</font>",
						  "41" => "<font color='red'><u>ERROR41:</u>&nbsp;Another group has SE Flag on.</font>",
						  "42" => "<font color='red'><u>ERROR42:</u>&nbsp;Another group has MFG Flag on.</font>",
						  "43" => "<font color='red'><u>ERROR43:</u>&nbsp;Another group has QA Flag on.</font>",
						  "44" => "<font color='green'><u>Note:</u>&nbsp;Your feedback has been successfully submitted.</font>",
						  "45" => "<font color='red'><u>ERROR45:</u>&nbsp;Check report file could not be uploaded.</font>",
						  "46" => "<font color='green'><u>MSG46:</u>&nbsp;Check report file has been successfully uploaded.</font>",
						  "47" => "<font color='red'><u>ERROR47:</u>&nbsp;Default admin user can not be deleted.</font>",
						  "48" => "<font color='red'><u>ERROR48:</u>&nbsp;Part number or bar code already exists.</font>",
						  "49" => "<font color='green'>Your account has been succesfully created.<br>You will receive your password soon.</font>",
						  "50" => "<font color='green'>Changes successfully saved.</font>",
						  "51" => "<font color='green'>New page has been successfully added.</font>",
						  "52" => "<font color='green'>New page has been successfully deleted.</font>",
						  "53" => "<font color='green'>Update has been successfully done.</font>"
						 );
	$MODULE_TITLE = array(   "0" => "Welcome Page",
							 "1" => "Banner Manager",
							 "2" => "Content Management System",
							 "3" => "Phonebook",
							 "4" => "Communication Manager",
							 "6" => "Links Manager",
							 "7" => "Sliding Menu",
							 "12" => "Help Documents",
							 "13" => "Intranet Update Requests",
							 "14" => "FAQ Manager",
							 "15" => "Admin Manager",
							 "16" => "Downloads"							  
						  );
			   $Number_Of_Employees_Array = array(  
			   										
			   										"1" => "1 - 50",
			   										"2" => "51 - 100",
													"3" => "101 - 150",
													"4" => "151 - 500",
													"5" => "501 - 1,000",
													"6" => "1,001 - 5,000 ",
													"7" => "5,001 - 10,000 ",
													"8" => "10,001- 100,000 ",
													"9" => "More than 100,000 ",
													"10" => "Do not know / Not Applicaple"
												);
				$Annual_Revenue_Array = array(  	
													"1" => "Less than $10 M",
			   										"2" => "$10 M - $50 M",
													"3" => "$50 M - 249 M",
													"4" => "$250 M - $999 M",
													"5" => "$1B - $3B",
													"6" => "More then $3B M",
													"7" => "Do not know / Not Applicaple"
												);
				
				$Job_Description_Array = array( 
													
													
                                                                                                        "1" => "Applications Management/Support/Development",
                                                                                                        "2" => "Architect/Engineer/Analyst Management",
                                                                                                        "3" => "Consultant (Independent)",
                                                                                                        "4" => "Corporate Management (CEO,COO,CFO,Pres.,VP,Dir.,Mgr.)",
                                                                                                        "5" => "Data Center Management/Systems Management",
                                                                                                        "6" => "Executive Level IT (CIO/CTO/CSO/VP)",
                                                                                                        "7" => "Industry Analyst",
                                                                                                        "8" => "Internet/Intranet/Web/E-Commerce Management",
                                                                                                        "9" => "IT/IS/MIS Management",
                                                                                                        "10" => "Marketing/Advertising/PR",
                                                                                                        "11" => "Network/Datacom/Telecom/Lan Management",
                                                                                                        "12" => "Research/Education",
                                                                                                        "13" => "Security/Compliance/Management",
                                                                                                        "14" => "VAR",
                                                                                                        "15" => "Other"
												);
				
				$Purchasing_Auth_Array = array( 
													
													"1" => "Approve purchases",
													"2" => "Specify",
													"3" => "Recommend",
													"4" => "Network Design Team",
													"5" => "None",
													"6" => "Other"		
												);
												
				$Country_Array 	= array (	
												  "--select--",
												  "United States",
												  "Albania",
												  "Algeria",
												  "Angola",
												  "Argentina",
												  "Armenia",
												  "Australia",
												  "Austria",
												  "Bahrain",
												  "Bangladesh",
												  "Belarus",
												  "Belgium",
												  "Bhutan",
												  "Bolivia",
												  "Brazil",
												  "Bulgaria",
												  "Cambodia",
												  "Canada",
												  "Chile",
												  "China",
												  "Colombia",
												  "Croatia",
												  "Cyprus",
												  "Czech Republic",
												  "Denmark",
												  "Ecuador",
												  "Egypt",
												  "Estonia",
												  "Finland",
												  "France",
												  "Germany",
												  "Greece",
												  "Hong Kong",
												  "Hungary",
												  "Iceland",
												  "India",
												  "Indonesia",
												  "Ireland",
												  "Israel",
												  "Italy",
												  "Japan",
												  "Jordan",
												  "Korea",
												  "Kuwait",
												  "Laos",
												  "Latvia",
												  "Lebanon",
												  "Libya",
												  "Lithuania",
												  "Luxembourg",
												  "Malaysia",
												  "Mexico",
												  "Monaco",
												  "Mongolia",
												  "Morocco",
												  "Myanmar",
												  "Netherlands",
												  "New Zealand",
												  "Norway",
												  "Oman",
												  "Pakistan",
												  "Peru",
												  "Poland",
												  "Portugal",
												  "Qatar",
												  "Romania",
												  "Russia",
												  "Arabia",
												  "Singapore",
												  "Slovakia",
												  "Spain",
												  "Sri Lanka",
												  "Sudan",
												  "Sweden",
												  "Switzerland",
												  "Syria",
												  "Taiwan",
												  "Thailand",
												  "Turkey",
												  "Ukraine",
												  "United Arab Emirates",
												  "United Kingdom",
												  "Venezuela",
												  "Vietnam",
												  "Yemen"
											   );
												
?>