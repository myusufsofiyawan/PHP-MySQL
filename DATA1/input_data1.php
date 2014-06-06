<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="author" content="Paulus Donny Junianto +6289628374964">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="index.php?page=save">
  <table width="100%" border="0" cellspacing="0" cellpadding="5">
    <tr>
      <td align="right"><a href="index.php?page=DATA1"><img src="images/view.png" width="60" height="60"/></a></td>
    </tr>
  </table>
  <table width="100%" border="0" cellspacing="0" cellpadding="5" >
    <tr>
      <td width="25%">Name</td>
      <td width="2%"><div align="center">:</div></td>
      <td align="left"><input name="Name" type="text" id="Name" size="40" /></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><div align="center">:</div></td>
      <td align="left"><select name="Gender" id="Gender">
        <option value="Man" selected="selected">Man</option>
        <option value="Woman">Woman</option>
      </select>      </td>
    </tr>
    <tr>
      <td>Birth </td>
      <td><div align="center">:</div></td>
      <td align="left"><input name="Birth" type="text" id="Birth" size="10" /></td>
    </tr>
    <tr>
      <td>Phone Number </td>
      <td><div align="center">:</div></td>
      <td align="left"><input name="Phone" type="text" id="Phone" size="16" /></td>
    </tr>
    <tr>
      <td colspan="3"><div align="center">
        <input type="submit" name="button" id="button" value="Save" />
        <input type="reset" name="button2" id="button2" value="Reset" />
      </div></td>
    </tr>
</table>
</form>
</body>
</html>
