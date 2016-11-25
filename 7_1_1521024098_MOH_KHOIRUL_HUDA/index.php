<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Form Validasi Mahasiswa</title>
    </head>
    <body>
        <CENTER><h1>FORM VALIDASI MI4</h1></CENTER>
        <div id="tampil">
            <?php
            error_reporting(0);
            $nama = $_POST['nama'];
            $umur = $_POST['umur'];
            $alamat = $_POST['alamat'];
            $jeniskelamin = $_POST['jeniskelamin'];
            if ($_POST['tombol']) {
                if ($nama == "") {
                    echo 'Anda belum mengisi nama' . "<br/>";
                }
                if ($umur == "") {
                    echo 'Anda belum mengisi umur' . "<br/>";
                }
                if ($alamat == "") {
                    echo 'Anda belum mengisi alamat' . "<br/>";
                }
                if ($jeniskelamin == "") {
                    echo 'anda belum mengisi jenis kelamin';
                }
                if ($nama != "" && $umur != "" && $alamat != "" && $jeniskelamin != "") {
                    include 'data.php';
                }
            }
            ?>
        </div>
        <form method="post" action="">
            <table>
                <tr>
                    <td class="lab"><H2>NAMA</H2></td>
                    <td><input type="text" name="nama"></td>                    
                </tr>
                <tr>
                    <td class="lab"><H2>UMUR</H2></td>
                    <td><input type="text" id="umur" name="umur"></td>                   
                </tr>
                <tr>
                    <td class="lab"><H2>ALAMAT</H2></td>
                    <td><input type="text" id="alamat" name="alamat"></td>
                </tr>
                <tr>
                    <td class="lab"><H2>JENIS KELAMIN</H2></td>
                    <td><input type="text" id="jeniskelamin" name="jeniskelamin"></td>                                  
                </tr>
                <tr>
                    <td class="lab"></td>
                    <td><input name="tombol" type="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>       
    </body>
</html>  