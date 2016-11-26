<style>
    #dt{
        background:azure;
        border:1px solid green;
        width: 400px;
        margin:10px auto;

    }
    h3{
        color: green;
    }
</style>
<div id="dt">
    <table>
        <h3>Data berhasil di simpan</h3>
        <tr>
            <td>Nama</td><td>:</td><td><?php echo $nama ?></td>
        </tr>
        <tr>
            <td>Nim</td><td>:</td><td><?php echo $nim ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td><td>:</td><td><?php echo $jeniskelamin ?></td>
        </tr>
        <tr>
        <td>Alamat</td><td>:</td><td><?php echo $alamat ?></td>
        </tr>
    </table>
</div> 