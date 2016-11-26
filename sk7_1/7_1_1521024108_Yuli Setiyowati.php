<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Form Validasi Mahasiswa</title>
    </head>
    <body>
        <h2>FORM DATA MANAJEMEN INFORMATIKA 4</h2>
            <form method="post" action="">
            <table>
                <tr>
                    <td class="lab">Nama</td>
                    <td><input type="text" name="nama"></td>                    
                </tr>
                <tr>
                    <td class="lab">Nim</td>
                    <td><input type="text" id="nim" name="nim"></td>                   
                </tr>
                <tr>
                    <td class="lab">Jenis Kelamin</td>
                    <td><input type="text" id="jeniskelamin" name="jeniskelamin"></td>                                  
                </tr>
                <tr>
                    <td class="lab">Alamat</td>
                    <td><input type="text" id="alamat" name="alamat"></td>
                </tr>
                <tr>
                    <td class="lab"></td>
                    <td><input name="tombol" type="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>       
		<div id="tampil">
            <?php
            error_reporting(0);
            $nama = $_POST['nama'];
            $nim = $_POST['nim'];
            $jeniskelamin = $_POST['jeniskelamin'];
            $alamat = $_POST['alamat'];
            if ($_POST['tombol']) {
                if ($nama == "") {
                    echo 'Anda belum mengisi nama' . "<br/>";
                }
                if ($nim == "") {
                    echo 'Anda belum mengisi nim' . "<br/>";
                }
                if ($jeniskelamin == "") {
                    echo 'Anda belum mengisi alamat' . "<br/>";
                }
                if ($alamat == "") {
                    echo 'anda belum mengisi jenis kelamin';
                }
                if ($nama != "" && $nim != "" && $jeniskelamin != "" && $alamat != "") {
                    include 'data.php';
                }
            }
            ?>
        </div>

    </body>
</html>  