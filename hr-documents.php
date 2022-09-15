<?php
#------------------------------------------------------------------------------------------------
# - Verifiying Logged User
# - Including conn.inc.php and config.php files
require('includes/head-inc.php'); 						# Header file 
#------------------------------------------------------------------------------------------------
# Parameters
# Layout Parameter values
# - Navbar + News : Both Navigation and News Boxies are displayed
# - Navbar Only   : Only Navigation box is displayed
# - News Only     : Only News box is displayed
# - None          : None of them is displayed
$layout="None";
# Page title
$title="HR Documents";
#------------------------------------------------------------------------------------------------
$searchVal=$_REQUEST['q'];
$searchVal=htmlspecialchars($searchVal);
$downCat=$_REQUEST['cat'];
$downCat=htmlspecialchars($downCat);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title><?=$title?></title>
<head>
<?php 
#------------------------------------------------------------------------------------------------
# All internal or external javascript codes
include("includes/js-inc.php");
# All internal all external css codes
include("includes/css-inc.php");
#------------------------------------------------------------------------------------------------
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body onload="goforit();">
<div id="niksun-global">
  <div id="masterhead">
    <div id="topnavigation">
      <div id="logo"><a href="index.php"><img src="images/niksun-logo.jpg" alt="Niksun" width="104" height="104" border="0" style="margin-left:35px;" /></a></div>
      <div id="navigation">        <div class="float-left" style="width:800px;">
          <div id="search-area"><?php include('includes/form2-inc.php') ?>
          </div>
		</div>
        <!-- ========================================== Horizontal Menu =============================================== -->
		<?php include("includes/horizontal-menu-inc.php") ?>
		<!-- ========================================== Search Box Menu =============================================== -->
		<?php include("includes/search-box-inc.php") ?>
		<!-- ========================================================================================================== -->
      </div>
    </div>	

	<div id="home-cont-area">		  
		  <input type="hidden" id="active_top_link" value="H/R">
		  <table>  
		  	<tr>
				<td><?php include("includes/threadbar-inc.php") ?></td>
			</tr> 
			<tr valign="top">
					  <?php 
					  	$topClass="content-box";
						$middleClass="content-middle-box";
						$bottomClass="content-bottom-box";
						if($layout=="Navbar + News") { ?>
							<td><div class="left_col">
							<!-- News  Box -->
					  		<?php include("includes/news-left-inc.php") ?>	
					  		<div class="left_menu">
							   <!-- Vertical Menu  -->
							   <?php include("includes/vertical-menu-inc.php") ?>		  							   
				  		  	</div>
							</div></td>
					  <?php } else if($layout=="Navbar Only") { 
							  echo "<td><div class='left_col'>";
							  include("includes/vertical-menu-inc.php");
							  echo "</div></td>";
					     } else if($layout=="News Only") {
						 	  echo "<td><div class='left_col'>"; 
						 	  include("includes/news-left-inc.php");
							  echo "</div></td>";
						 } else if($layout=="None") {
						 	  $topClass="content-box-wider";
							  $middleClass="content-middle-box-wider";
							  $bottomClass="content-bottom-box-wider";
						 }
						 ?>
		  			
				
				<td>
				  <!-- ====================== CONTENT BOX ================================== -->
				  <div class="<?=$topClass?>" style="margin:0px;">
						<div class="<?=$middleClass?>">								
						<table>
								<tr>
									<td><img src="images/hr_docs.jpg"></td>
									<td valign="center">&nbsp;&nbsp;<b style="font-size:18px; margin:-16x 0 0 0">HR Documents</b></td>
								</tr>
							</table>	
							<p class="border-line" style="border-top: 1px solid #CCCCCC; margin:10px 0 0 0;">
							<br>	
										
							
							<table width="100%">
							<?php
								
							$query=mysqli_query($conn_link,"SELECT * FROM download_file_catgs WHERE down_catg_status='1' AND down_catg_group='HR'
							 ORDER BY down_catg_order ASC");
							$count=0;
							$colsInRow=4;
							while($result=mysqli_fetch_array($query)) {
								   # Open new row
								   if(($count % $colsInRow) == 0 ) 
									  echo "<tr>";
										
									if($result['down_catg_link']=="")
										echo "<td align='center'>
												 <a href='hrdoc-catg.php?cid=".$result['down_catg_id']."'>
											 		<img src='admin/UploadedFiles/FolderForImages/HRImages/thumbnails/".$result['down_catg_thumbnail']."'>
												 </a>
										  </td>";
									else
										echo "<td align='center'>
												 <a href='".$result['down_catg_link']."'>
													<img src='admin/UploadedFiles/FolderForImages/HRImages/thumbnails/".$result['down_catg_thumbnail']."'>
												  </a>
										 	 </td>";	
									# Close row
									if(($count % $colsInRow) == ($colsInRow-1)) {
									  echo "</tr>";
									  echo "<tr><td colspan='3'>&nbsp;</td></tr>";
									}
								   
								   $count++;
							}#endWhile
						         		
							?>							
							</table> 
							
						 </div>
						 <div class="<?=$bottomClass?>"></div>
				   </div>	   
				   <!-- ===================================================================== --> 
				   <br><br>
				</td>
			</tr>
		  
		   </table>		   
		</div>
<?php include('includes/footer-inc.php')?>
<?php include('includes/copyright-inc.php')?></div>
</div>
</body>
</html>