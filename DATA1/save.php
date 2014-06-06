<meta name="author" content="Paulus Donny Junianto +6289628374964">
<?php 
	$Name 		= $_POST["Name"];
	$Gender 	= $_POST["Gender"];
	$Birth		= $_POST["Birth"];
	$Phone		= $_POST["Phone"];
	
	//checking for insert record
	$check=mysql_query("select Phone_Number from data1 where Phone_Number='$Phone'");
	if(mysql_num_rows($check)>0){
		echo '<p class="moving-type2">Not Saving...<p>';
		echo "<script>document.location.href='index.php?page=input'; confirm('Existing Record'); </script>";
	}else{
		//insert queries
		mysql_query("Insert into data1( Name, Gender, Birth, Phone_Number) values( '$Name', '$Gender', '$Birth', '$Phone' )");
		echo '<p class="moving-type2">Saving.........<p>';
		echo "<script>document.location.href='index.php?page=input'; confirm('Record Has Been Saved'); </script>";
	}
?>

