<?php
session_start();
$captcha=substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"),0,6); // string yg akan diacak membentuk captcha 0-z dan sebanyak 6 karakter
$_SESSION['captcha']=$captcha;

$gambar=ImageCreate(80,40); // ukuran kotak width=60 dan height=20
$wk=ImageColorAllocate($gambar, 45, 400, 129); // membuat warna kotak -> Navajo White
$wt=ImageColorAllocate($gambar, 455, 455,455); // membuat warna tulisan -> Putih
ImageFilledRectangle($gambar, 0, 0, 70, 40, $wk);
ImageString($gambar, 12, 5, 5, $captcha, $wt);
ImageJPEG($gambar);
?>