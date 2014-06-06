<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php include "connection.php";?>
		<link type="text/css" rel="stylesheet" href="style.css"/>
		<link rel="icon" href="images/favicon.ico" type="image/ico" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="author" content="Paulus Donny Junianto +6289628374964">
		<title>Basic CRUD PHP MySQL</title>
	</head>

	<body>
		<fieldset>
			<legend align="right"><strong>Data</strong></blink></legend>
			<table width="80%" border="0" align="center" cellpadding="5" cellspacing="0">
  				<tr>
    				<td width="13%">&nbsp;</td>
    				<td width="87%">&nbsp;</td>
  				</tr>
  				<tr>
   					<td width="13%" align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="5">
      			<tr>
        			<td><a href="index.php">Home</a></td>
      			</tr>
      			<tr>
      				<td><a href="index.php?page=DATA1">Your Data </a><a href="index.php?page=VIEW-INSTRUKTUR"></a></td>
      			</tr> 
    		</table></td>
    				<td style="border-left:1px solid blue;"><?php include "content.php";?></td>
  				</tr>
  				<tr>
    				<td colspan="2" align="right"><a href="index.php?page=VIEW-MAHASISWA"></a></td>
  				</tr>
  				<tr>
    				<td colspan="2" ><p align="right" class="moving-type">Copyright © 2014 Paulus Donny Junianto</p></td>
  				</tr>
			</table>
		</fieldset>
	</body>
</html>