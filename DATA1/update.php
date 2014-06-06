<meta name="author" content="Paulus Donny Junianto +6289628374964">
<?php 
	$id			=$_REQUEST["code"];
	$name 	 	=$_POST["Name"];
	$gender		=$_POST["Gender"];
	$birth		=$_POST["Birth"];
	$phone	 	=$_POST["Phone"];
	
	//checking for insert record
	$check=mysql_query("select Phone_Number from data1 where Phone_Number='$phone' AND Birth='$birth' AND Gender='$gender' AND Name='$name'");
	if(mysql_num_rows($check)>0){
		echo '<p class="moving-type2">Not Updating...<p>';
		echo "<script>document.location.href='index.php?page=DATA1'; confirm('Existing Record'); </script>";
	}else{
	//update queries
	mysql_query("UPDATE data1 SET Name='$name', Gender='$gender', Birth='$birth', Phone_Number='$phone' WHERE ID='$id'");
	echo '<p class="moving-type2">Updating.........<p>';
	echo "<script>document.location.href='index.php?page=DATA1'; confirm('Record Has Been Updated');</script>";
	}
?>














