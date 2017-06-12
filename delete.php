<html>
<body>
<?php
include_once("koneksi.php");
$id=2;
$delete=mysql_query("delete from tamu where id='$id'");
echo"<br><br>";
if($delete)
{echo"berhasil menghapus data tamu dengan id $id";}
else
{echo"gagal menghapus data";}
?>
</table>
</body>
</html>
