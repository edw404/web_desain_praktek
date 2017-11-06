<?php
mysql_connect("localhost","root","");
mysql_select_db("indonesia");

$provinsi = $_GET['provinsi'];

$sql = mysql_query("select * from tbl_kabupaten where id_provinsi='$provinsi'");

echo "<option>-- Pilih Kota --</option>";

while ($r = mysql_fetch_array($sql)) 
{
	echo "<option value=$r[id_kabupaten]>$r[nama_kabupaten]</option> \n";
}
?>