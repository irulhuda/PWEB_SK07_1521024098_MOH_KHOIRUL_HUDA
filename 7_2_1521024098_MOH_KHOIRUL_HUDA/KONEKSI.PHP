<?PHP
$SERVER="localhost";
$USER="root";
$PASSWORD="";

$connect=mysql_connect($SERVER,$USER,$PASSWORD)
	or die("KONEKSI GAGAL");
$db =mysql_select_db("akakom");


if($connect){
echo "koneksi berhasil";
}
else{
echo "koneksi gagal";
}

?>