<?php
include "config/koneksi.php";
if ($_GET[act]=="proses") {
	$simpan="INSERT INTO tbl_user SET username='$_POST[username]',
									  password='$_POST[password]',
									  nama='$_POST[nama]',
									  tgl_lahir='$_POST[tgl_lahir]',
									  jk='$_POST[jk]',
									  telp='$_POST[telp]',
									  alamat='$_POST[alamat]'";
	mysql_query($simpan);
	echo '<script language="javascript">
	alert("Anda Berhasil Melakukan Registrasi");
	window.location="index.php";
	</script>';
	exit();
}
?>
<form name="form1" method="post" action="index.php?hal=register&act=proses">
  <table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <th colspan="2" align="center">FORM REGISTER</th>
    </tr>
    <tr>
      <td>Username</td>
      <td><input name="username" type="text" id="username" size="30" required/></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input name="password" type="password" id="password" size="30" required/></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td><input name="nama" type="text" id="nama" size="40" required/></td>
    </tr>
    <tr>
      <td>Tgl Lahir </td> //rev
      <td><input name="tgl_lahir" type="text" id="tgl_lahir" size="40" required/></td>
    </tr>
    <tr>
      <td>Jenis Kelamin </td>
      <td><select name="jk" id="jk">
          <option selected>----Pilih----</option>
          <option value="Laki-Laki">Laki-Laki</option>
          <option value="Perempuan">Perempuan</option>
          </select></td>
    </tr>
    <tr>
      <td>Telp</td>
      <td><input name="telp" type="text" id="telp" required/></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td><textarea name="alamat" cols="30" rows="4" id="alamat"></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Kirim"></td>
    </tr>
  </table>
</form>
