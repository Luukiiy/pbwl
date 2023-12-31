<?php
// Ambil data peran dari database
$roles = [
    ['value' => 1, 'label' => 'Admin'],
    ['value' => 2, 'label' => 'Operator']
    // Anda dapat menyesuaikan ini dengan cara mengambil data dari database
];

// Default role yang akan dipilih (misalnya, dari database atau nilai default)
$selectedRole = $data['row']['user_role']; // Ganti ini dengan nilai dari database jika ada

// Output elemen select
?>

<h2>Edit User</h2>

<form action="<?php echo URL; ?>/users/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['user_id']; ?>">
    <table>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" value="<?php echo $data['row']['user_email']; ?>" required></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?php echo $data['row']['user_nama']; ?>" required></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" value="<?php echo $data['row']['user_alamat']; ?>" required></td>
        </tr>
        <tr>
            <td>No HP</td>
            <td><input type="text" name="hp" value="<?php echo $data['row']['user_hp']; ?>" required></td>
        </tr>
        <tr>
            <td>Kode Pos</td>
            <td><input type="text" name="pos" value="<?php echo $data['row']['user_pos']; ?>" required></td>
        </tr>
        <tr>
            <td>Role</td>
            <td>
                <select name="role">
                    <?php foreach ($roles as $role): ?>
                        <option value="<?php echo $role['value']; ?>" <?php echo ($selectedRole == $role['value']) ? 'selected' : ''; ?>>
                            <?php echo $role['label']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>