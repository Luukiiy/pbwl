<h2>Input User</h2>

<form action="<?php echo URL; ?>/users/save" method="post">
    <table>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" required></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" required></td>
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
            <td>No HP</td>
            <td><input type="text" name="hp" required></td>
        </tr>
        <tr>
            <td>Kode Pos</td>
            <td><input type="text" name="pos" required></td>
        </tr>
        <tr>
            <td>Role</td>
            <td>
                <select name="role">
                    <option value="">-Pilih Role-</option>
                    <option value="1">Admin</option>
                    <option value="2">Operator</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>