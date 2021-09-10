<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
</head>

<body>
    <h2>Menampilkan Data User</h2>
    <a href="<?= base_url('user/add'); ?>">Tambah User</a>
    <a href="<?= base_url('logout'); ?>">Logout</a>
    <table border="1">
        <tr>
            <td>No</td>
            <td>Email</td>
            <td>Tanggal Lahir</td>
            <td colspan="2">
                <center>Aksi</center>
            </td>
        </tr>
        </tr>
        <?php
        foreach ($users->result() as $i => $user) {
        ?>
            <tr>
                <td><?= ++$i; ?></td>
                <td><?= $email->email; ?></td>
                <td><?= $tanggal_lahir->tanggal_lahir; ?></td>
                <td><a href="<?= base_url('user/edit/' . $user->id); ?>">Ubah</a></td>
                <td><a href="<?= base_url('user/delete/' . $user->id); ?>">Hapus</a></td>
            </tr>
            </tr>
        <?php
        } ?>
    </table>
</body>

</html>