<?php
function html_email($to,$from,$subj,$mess) {

// $to="vikas1284@gmail.com";
// $subj="sample subject";				 
// $mess="sample email body";
// $from="vikas1284@yahoo.com";	
//$ReplyTo=$from;
$ReplyTo="no-reply@niksun.com";
				 $un_bound = "phpMM".time();
                 $kod 	   = "text/html";
				 $mailer   = "unix";
				 $headers .= "Date: ".date("d.m.y G:i:s")."\n";
                 $headers .= "MIME-Version: 1.0 \n";
                 $headers .= "From: ".$from."\n";				 
                 $headers .= "Subject: ".$subj."\n";
                 $headers .= "Content-Type: multipart/mixed; boundary=".$un_bound."\n";
                 $headers .= "X-Mailer: ". $mailer."\n";
                 $headers .= "X-Originating-Email: ".$from."\n";
                 $headers .=  base64_decode("WC1PcmlnaW5hdGluZy1JUDog").getenv(base64_decode('UkVNT1RFX0FERFI='))."\n";
                 $headers .= "Message-Id: "."phpMM".md5(@uniqid())."\n";
                 $EmailBody  = "--".$un_bound."\n";
                 $EmailBody .="Content-Type: ".$kod.";charset=windows-1251\n";
                 $EmailBody .="Content-Transfer-Encoding: 8bit\n\n";
                 $EmailBody .=$mess;
                 $EmailBody .= "\n--".$un_bound."--\n";
			 	 if(mail($to, $subj, $EmailBody."\n\n", $headers)) {
				   $sent_mails++;
				 }  
				 if($sent_mails) return true; else return false;

}

?>