<?php
/* =========================================================================================================================
* Display elements of array.
*/
function displayArray($array) {		
  for($i=0;$i<sizeof($array);$i++) 
	 echo $array[$i]."<br>";	
}//end function
//==========================================================================================================================
	
	
/*==========================================================================================================================
 * Printing another process inside of column.
 *
 */
function isExistInArray($arrayStr,$target) {
  $array=explode("~",$arrayStr);		
  foreach($array as $value) {
	if($value==$target)
		return true;
  }//end foreach
  return false;
}//end function
//==========================================================================================================================

/* =========================================================================================================================
* Display elements of array.
*/
function checkColumn($col,$grp) {		
 	$result=mysql_fetch_array(mysql_query("SELECT * FROM eval_pro_permissions WHERE perm_col_name='".$col."'"));	
	$none="#".$result['perm_none'];
	if(strpos($none,$grp)>0)
		return "";
	else
		return "<th class='reqtable'>".$result['perm_display_name']."</th>";	
}//end function
//==========================================================================================================================

/* =========================================================================================================================
 * Approval / Denial Type 
 */
function displayType1($col,$id,$content) {		 	
	if($content=="") {
	#==========================================================
		# No Action taken
		echo "<td class='reqtableWhite'>
				<a href='iframe-saveType1.php?act=1&col=".$col."&id=".$id."'>
					<img src='../images/approve_button.jpg'>
				</a>				
				<a href='iframe-saveType1.php?act=0&col=".$col."&id=".$id."'>
					<img src='../images/deny_button.jpg'>
				</a>
			  </td>";
	#==========================================================
	} else if($content=="0000-00-00 00:00:00") {		
	#==========================================================
		# Denied			
			# No Action taken
			echo "<td class='denied'>
						<a href='iframe-saveType1.php?act=1&col=".$col."&id=".$id."'>
							<img src='../images/approve_button.jpg'>
						</a>				
						<a href='iframe-saveType1.php?act=0&col=".$col."&id=".$id."'>
							<img src='../images/deny_button.jpg'>
						</a>
			  	  </td>";
			return true;
	#==========================================================
	 } else
	#==========================================================
	# Approved
		echo "<td class='approved'> Approved on ".$content."</td>";
	#==========================================================
	
}//end function
//==========================================================================================================================

/* =========================================================================================================================
 *  Textbox Type
 */
function displayType2($col,$id,$content) {		
 	if($content=="")
	#==========================================================
	# No action taken
		echo "<td class='reqtableWhite' align='center'>
				<form action='iframe-saveType2.php?col=".$col."&id=".$id."' method='post' name='".$col."_form".$id."'>
					<input type='text' name='textContent' size='30'><br>
					<a href='javascript:document.".$col."_form".$id.".submit()'><img src='../images/save_button.jpg'></a>				
			  </form>
		  </td>";
	#==========================================================
	else 
	#==========================================================
	# Approved
		echo "<td class='approved'>".$content."</td>";
	#==========================================================
}//end function
//==========================================================================================================================


/* =========================================================================================================================
 * Date Type
 */
function displayType3($col,$id,$content) {		
 	if($content=="")
		echo "<td class='reqtableWhite'>
				<a href='iframe-saveType3.php?id=".$id."
				&col=".$col."'>
					<img src='../images/in_out_button.jpg'>
				</a>												
			  </td>";
	else 
		echo "<td class='approved'>".$content."</td>";
}//end function
//==========================================================================================================================


/* =========================================================================================================================
 * Process Type
 */
function displayType4($col,$id,$content) {	
	include('../admin/includes/adm-configuration-inc.php');	
 	#=======================================================================
	if($content=="Failed") {
		echo "<td class='denied' align='center'>
				<form action='iframe-saveType4.php?id=".$id."&col=".$col."'
				 method='post' name='".$col."_form".$id."'>
				 	Last Action : ".$content."
					<select name='process'>";
						foreach($statusArray as $element) {
							if($content!=$element)
								echo "<option>".$element."</option>";
						}
														
		echo "		</select>
					<a href='javascript:document.".$col."_form".$id.".submit()'>
						<img src='../images/save_button.jpg'>
					</a>					
				</form>
				<a href='iframe-view-process.php?col=".$col."&id=".$id."' target='_blank'>View Process</a>
			  </td>";	
		return true;
	#======================================================================
	} else if($content=="Done") {
		echo "<td class='approved'>".$content.
				"Last Action : ".$content.
				"<br><a href='iframe-view-process.php?col=".$col."&id=".$id."' target='_blank'><b>View History</b></a>
			  </td>";
	} else {
		echo "<td class='reqtableWhite' align='center'>
				<form action='iframe-saveType4.php?id=".$id."&col=".$col."'
				 method='post' name='".$col."_form".$id."'>
				 	Last Action : ".$content."
					<select name='process'>";
						foreach($statusArray as $element) {
							if($content!=$element)
								echo "<option>".$element."</option>";
						}
														
		echo "		</select>
					<a href='javascript:document.".$col."_form".$id.".submit()'>
						<img src='../images/save_button.jpg'>
					</a>					
				</form>
				<a href='iframe-view-process.php?col=".$col."&id=".$id."' target='_blank'>View History</a>
			  </td>";
	} 
	#======================================================================
}//end function
//==========================================================================================================================


/* =========================================================================================================================
 * Otherwise Type
 */
function displayType5($col) {		
 	echo "<td class='reqtableWhite'>N/A</td>";
}//end function
//=====================================================================================================================
function getExternalStorage($tid) {
	# Database connection file
	require('admin/includes/adm-connection-inc.php');					
	if($tid!="") {
		# Get appliance information
		$queryApp=mysql_query("SELECT storage_barcode FROM appliance_external_storages WHERE storage_assigned_to='".$tid."'");
		$resultApp=mysql_fetch_array($queryApp);
		return $resultApp['storage_barcode'];
	} else
		return "-";
}
//=====================================================================================================================
?>