<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Captcha</title>
</head>

<?php session_start(); ?>

<?php
if (isset($_POST['cek'])){ // JIKA SUBMIT CEK DIJALANKAN
    if($_SESSION['captcha']==$_POST['captcha']){ // JIKA CAPTCHA YG DITULIS SM DGN YG DITAMPILKAN MAKA
		echo "<script>alert('Berhasil! Kode Captcha Benar!')</script>";
    }else{
		echo "<script>alert('Kode Captcha Tidak Benar!')</script>";
    }
}
?>

<body>
<form method="post"><CENTER>
	<H2>Tulis Kode Captcha Ini : </H2><img src="captcha.php" /><br />
    <input type="text" name="captcha" maxlength="6" /><br />
    <input type="submit" name="cek" value="KLIK CAPTACHA"/></CENTER>
</form>
</body>
</html>