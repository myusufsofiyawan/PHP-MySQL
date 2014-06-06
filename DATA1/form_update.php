<meta name="author" content="Paulus Donny Junianto +6289628374964">
<?php
	$id 	= $_GET["kd"];
	$query 	= mysql_query("SELECT * FROM data1 WHERE ID='$id'");
	while($data=mysql_fetch_array($query))
	{
		$id		 = $data["ID"];
		$name	 = $data["Name"];
		$gender	 = $data["Gender"];
		$birth 	 = $data["Birth"];
		$phone	 = $data["Phone_Number"];
	}
?>


<form id="form1" name="form1" method="post" action="index.php?page=update">
    <table width="100%" border="0" cellspacing="0" cellpadding="5">
      <tr>
        <td align="right"><a href="index.php?page=DATA1"><img src="images/view.png" width="60" height="60"/></a></td>
      </tr>
    </table>
    <table width="100%" border="0" cellspacing="0" cellpadding="5">
      <tr>
        <td width="25%">ID </td>
        <td width="2%"><div align="center">:</div></td>
        <td align="left"><input name="ID" type="text" id="ID" value="<?php echo $id;?>" disabled="disabled"/></td>
      </tr>
      <tr>
        <td>Name</td>
        <td><div align="center">:</div></td>
        <td align="left"><input name="Name" type="text" id="Name" value="<?php echo $name;?>" size="40" /></td>
      </tr>
      <tr>
        <td>Gender</td>
        <td><div align="center">:</div></td>
        <td align="left"><select name="Gender" id="Gender">
          <option value="Man" <?php if($gender=="Man"){echo 'selected="selected"';} ?> >Man</option>
          <option value="Woman" <?php if($gender=="Woman"){echo 'selected="selected"';} ?>>Woman</option>
        </select></td>
      </tr>
      <tr>
        <td>Birth</td>
        <td><div align="center">:</div></td>
        <td align="left"><input name="Birth" type="text" id="Birth" value="<?php echo $birth; ?>" size="10" /></td>
      </tr>
      <tr>
        <td>Phone</td>
        <td><div align="center">:</div></td>
        <td align="left"><input name="Phone" type="text" id="Phone" value="<?php echo $phone; ?>" size="16" />
        <input type="hidden" name="code" value = "<?php echo $id;?>"/></td>
      </tr>
      <tr>
        <td colspan="3"><div align="center">
          <input type="submit" name="button" id="button" value="Save" />
          <input type="reset" name="button2" id="button2" value="Reset" />
        </div></td>
      </tr>
  </table>
</form>
