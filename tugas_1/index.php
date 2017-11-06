<!DOCTYPE html>
<html>
<head>
	<title>Belajar desain</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery.min.js"></script>
	<script>
	$(document).ready(function()
	{
		$("#provinsi").change(function()
		{
			var provinsi = $("#provinsi").val();
			$.ajax({
				url:"proses_kota.php",
				data:"provinsi=" + provinsi,
				success:function(data)
				{
					$("#kota").html(data);
				}
			});
		});


		//provinsi2

		$("#provinsi2").change(function()
		{
			var provinsi = $("#provinsi2").val();
			$.ajax({
				url:"proses_kota.php",
				data:"provinsi=" + provinsi,
				success:function(data)
				{
					$("#kota2").html(data);
				}
			});
		});
	});

</script>

</head>
<body>
	<div id="header">
		<h1>WEBDesain_edw</h1>
		<p>Tugas Web Desain</p>
	 </div>
		
	<div id="body">
		<div id="sidebar">
			<ul>
				<li><a href="www.facebook.com">Home</a></li>
				<li><a href="">Profil</a></li>
				<li><a href="">About</a></li>
				<li><a href="">Contact</a></li>
			</ul>
		</div>

		
		
		<div id="content">
			<form>
			<div class="form">
				<td>Profil data diri :</td><br/>
				<input type="text" id="dewe" name="nama" placeholder="Nama">
				<br></br>
				<select id="provinsi" name="provinsi">
					<option value="">Pilih Provinsi</option>
				<?php
						mysql_connect("localhost","root","");
						mysql_select_db("indonesia");

						$sql = mysql_query("select * from tbl_provinsi order by nama_provinsi");
						while ($p = mysql_fetch_array($sql)) 
							{
								echo "<option value=$p[id_provinsi]>$p[nama_provinsi]	</option> ";
							}		
					?>
				</select>
				<br></br>
				<select id="kota" name="kota">
					<option value="">Pilih Kota</option>
				</select>
				<br></br>
				<textarea id="t1" name="alamat" placeholder="Alamat" onkeyup="copytext()"></textarea><br></br>

				<input type="number" name="no_hp" placeholder="No Tlp" min="10" max="13">	<br></br>
					<input class="view" id="btn1" type="submit" value="Tampilkan">
			</div>
			
			
			
		</div>
		<div id="content">
			<div class="form">
				<td>Profil data ortu :</td><br/>
				<input type="text" id="ortu" name="ayah" placeholder="Nama Ayah">
				<br></br>
				<input type="text" id="ortu" name="ibu" placeholder="Nama Ibu">
				<br></br>
				<select id="provinsi2" name="provinsi">
					<option value="">Pilih Provinsi</option>
				<?php
						mysql_connect("localhost","root","");
						mysql_select_db("indonesia");

						$sql = mysql_query("select * from tbl_provinsi order by nama_provinsi");
						while ($p = mysql_fetch_array($sql)) 
							{
								echo "<option value=$p[id_provinsi]>$p[nama_provinsi]	</option> ";
							}		
					?>
				</select>
				<br></br>
				<select id="kota2" name="kota">
					<option value="">Pilih Kota</option>
				</select>
				<br></br>
				<textarea id="t2" name="alamat" placeholder="Alamat"></textarea><br></br>

				<input type="number" name="no_hp" placeholder="No Tlp" min="10" max="13">
					
			</div>

		</form>
		</div>

	</div>
		<script>
			function copytext(){
				document.getElementById('t2').value=document.getElementById('t1').value;
			}
		</script>

		<script>
			function copytext2(){
				document.getElementById('provinsi2').value=document.getElementById('provinsi').value;
		</script>

		<script>
			$(document).ready(function()
			{
				$("#btn1").click(function(
					){
					alert("Nama diri: "+ $("#t2").val());
				});
			});
				
		</script>
	<div id="footer">
		<p>Tugas Web Desain Edwin penangsang 2017</p>
	</div>
</body>
</html>