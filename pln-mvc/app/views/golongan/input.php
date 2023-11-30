<h2>Input Golongsn</h2>

<form action="<?php echo URL; ?>/golongan/save" method="post">
    <table>
        <tr>
            <td>Kode Golongan</td>
            <td><input type="text" name="kode" required></td>
        </tr>
        <tr>
            <td>Nama Golongan</td>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>