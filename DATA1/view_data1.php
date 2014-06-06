<meta name="author" content="Paulus Donny Junianto +6289628374964">
<?php
	$cari = isset($_REQUEST["cari"]) ? $_REQUEST["cari"] : '';
	if($cari=="")
	{
		$query= mysql_query("SELECT * FROM Data1 ORDER BY ID");
	}
	else
	{
		$query= mysql_query("SELECT * FROM Data1 WHERE Name LIKE '%$cari%'");
	}
?>
<form id="form1" name="form1" method="post" action="">
  <table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td colspan="7" align="right"><input name="cari" type="text" size="70" id="cari" />
      <input type="submit" name="Submit" value="Cari" /></td>
    </tr>
    <tr bgcolor="#D7DAFB">
      <td><div align="center"><strong>No</strong></div></td>
      <td><div align="center"><strong>Name</strong></div></td>
      <td><div align="center"><strong>Gender </strong></div></td>
      <td><div align="center"><strong>Birth</strong></div></td>
      <td><div align="center"><strong>Phone Number </strong></div></td>
      <td colspan="2"><div align="center"><strong><a href="index.php?page=input">Entry Data </a></strong></div></td>
    </tr>
	<?php
	$no=0;
	while($data=mysql_fetch_array($query))
	{
		$no++;
		$id				= $data["ID"];
		$name			= $data["Name"];
		$gender			= $data["Gender"];
		$birth			= $data["Birth"];
		$phone			= $data["Phone_Number"];
	?>
    <tr>
      <td align="center"><?php echo  $no;?></td>
      <td align="center"><?php echo  $name;?></td>
      <td align="center"><?php echo  $gender;?></td>
      <td align="center"><?php echo  $birth;?></td>
      <td align="center"><?php echo  $phone;?></td>
      <td align="center"><a href="index.php?page=view_update&kd=<?php echo $id;?>"><img src="images/edit.png" width="20" height="20" border="0" /></a></td>
      <td align="center"><a href="javascript:if(confirm('Are you sure want to delete <?php echo $name; ?> ??')){document.location='index.php?page=delete&kd=<?php echo $id;?>';}"><img src="images/cancel.png" width="20" height="20" border="0" /></a></td>
    </tr>
	<?php
	}
	?>
  </table>

</form>