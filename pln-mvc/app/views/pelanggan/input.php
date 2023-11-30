<?php

$gol = new App\Models\Golongan;
$rows = $gol->show();

$user = new App\Models\User;
$rows1 = $user->show();

?>
<h2>Input Pelanggan</h2>

<form action="<?php echo URL; ?>/pelanggan/save" method="post">
    <table>
        <tr>
            <td>Golongan</td>
            <td>
                <select name="id_gol">
                    <option value="">-Pilih Golongan-</option>
                    <?php foreach ($rows as $row) { ?> ?>
                        <option value="<?php echo $row['gol_id']; ?>"><?php echo $row['gol_nama']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>No Pelanggan</td>
            <td><input type="text" name="no" required></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" required></td>
        </tr>
        <tr>
            <td>HP</td>
            <td><input type="text" name="hp" required></td>
        </tr>
        <tr>
            <td>No KTP</td>
            <td><input type="text" name="pel_ktp" required></td>
        </tr>
        <tr>
            <td>No Seri</td>
            <td><input type="text" name="seri" required></td>
        </tr>
        <tr>
            <td>No Meteran</td>
            <td><input type="text" name="meteran" required></td>
        </tr>
        <tr>
            <td>Status Aktif</td>
            <td>
                <input type="radio" name="aktif" value="Y"> Y (Yes)
                <input type="radio" name="aktif" value="N"> N (No)
            </td>
        </tr>
        <tr>
            <td>Level</td>
            <td>
                <select name="id_user">
                    <option value="">-Pilih Level-</option>
                    <?php foreach ($rows1 as $row) : ?>
                        <option value="<?php echo $row['user_id']; ?>"><?php echo $row['user_nama']; ?></option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>