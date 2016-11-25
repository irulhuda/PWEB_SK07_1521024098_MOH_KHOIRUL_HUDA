<?php
include ('koneksi.php');
$username = $_POST['username'];
$password = $_POST['password'];
$sql=mysql_query("SELECT * FROM user WHERE username='$username' and password='$password'");
$ada=mysql_num_rows($sql);
$row=mysql_fetch_array($sql);

if ($ada>0){
if ($row['password']==$password){
session_start();
$_SESSION['login']= $row['username'];
?>
<script type="text/javascript">
location.href="view_karyawan.php";
</script>
<?php
}
}else
{
?>

<script type="text/javascript">
alert('username atau password Salah');
location.href="view_login.php";
</script>
<?php
}
?>
