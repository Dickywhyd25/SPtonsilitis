<?php 
//include "inc.connect/connect.php";
include "../koneksi.php";
//$kdsakit = $_REQUEST['kdsakit'];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Halaman Untuk Relasi Gejala Penyakit</title>
</head>
<body>
<h2>Laporan Data Gejala Berdasarkan Penyakit</h2><hr>
<form name="form1" method="post" action="lapgejala2.php">
<div class="CSSTableGenerator">
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="2">
<tr bgcolor="#CCCC99" align="center">
  <td colspan="2" align="center" ><b>TAMPILKAN GEJALA PER PENYAKIT </b></td>
  </tr>
<tr>
  <td width="204" align="right" ><b>Penyakit :</b></td>
  <td width="305" >
   <select name="CmbPenyakit">
    <option value="NULL">[ Daftar Penyakit ]</option>
    <?php 
	$sqlp = "SELECT * FROM tb_penyakit ORDER BY kdpenyakit";
	$qryp = mysql_query($sqlp, $koneksi) 
		    or die ("SQL Error: ".mysql_error());
	while ($datap=mysql_fetch_array($qryp)) {
		if ($datap['kdpenyakit']==$kdsakit) {
			$cek ="selected";
		}
		else {
			$cek ="";
		}
		echo "<option value='$datap[id]' $cek>
			  $datap[nama_penyakit] ($datap[kdpenyakit])</option>";
	}
  ?>
  </select></td>
</tr>
<tr > 
  <td align="center" >&nbsp;</td>
  <td ><input type="submit" name="Submit" value="Tampil"></td>
</tr>
</table></div>
</form>
</body>
</html>
