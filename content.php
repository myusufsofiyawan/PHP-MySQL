<meta name="author" content="Paulus Donny Junianto +6289628374964">
<?php
	if(isset($_REQUEST["page"])){
		$page= $_REQUEST["page"];


		// YOUR DATA
		if($page=="DATA1"){	
			include "DATA1/view_data1.php";}
		else if($page=="input"){
			include "DATA1/input_data1.php";}
		else if ($page=="save"){
			include "DATA1/save.php";}
		else if ($page=="delete"){
			include "DATA1/delete.php";}
		else if ($page=="view_update"){
			include "DATA1/form_update.php";}
		else if ($page=="update"){
			include "DATA1/update.php";}
		
		// YOU CAN ADD ANOTHER DATA BELOW HERE IF YOU WANT
			/* YOUR DATA GOES HERE*/
	}
	else
	echo '<p class="moving-type2">Welcome.........<p>';
?>
