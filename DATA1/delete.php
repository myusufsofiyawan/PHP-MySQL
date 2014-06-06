<meta name="author" content="Paulus Donny Junianto +6289628374964">
<?php
	$id =$_GET["kd"];
	mysql_query("delete from data1 where ID='$id'");
	echo "<script>document.location.href='index.php?page=DATA1'</script>";
?>