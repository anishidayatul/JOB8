<html>
<head>
<title>Contoh Koneksi Database</title>
</head>
<body>
<b>
<?php
//simpan sebagai file koneksi dengan nama "db_conncet.php"
$host='localhost';//nama host server kita,
$username='root';//username database kita,
$password='';//password askses database
$koneksi=mysql_connect($host,$username,$password);
if($koneksi)
     {echo"Koneksi server berhasil <br><br>";}
else
     {echo"gagal koneksi ke server<br><br>";}
	 
$database='db_online(anis)';//database mysql yang kita gunakan 
$mydb=mysql_select_db($database,$koneksi);
if($mydb)
     {echo"Berhasil memilih database";}
else
     {echo"Tidak dapat memilih database";}
	 
?>	 
</body>
</html>