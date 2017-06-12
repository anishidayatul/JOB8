<html>
<body>
<?php
include_once("koneksi.php");
$insert=mysql_query("INSERT INTO tamu(id,nama,alamat,email,komentar)
         VALUES ('1','sekolah tinggi elektronika dan komputer',
		 'Jl.majapahit 605 semarng','info@stekom.ac.id','test.. ')");
		 
echo"<br><br>";		 
if($insert)
{echo"berhasil menyisipkan data pada tabel tamu";}
else
{echo"gagal penyisipan data";}
?>
</body>
</html>
