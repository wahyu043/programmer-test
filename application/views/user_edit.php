<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User</title>
</head>

<body>

    <center>
        <h2>Form Tambah Data User</h2>
        <form method="post" action="<?= base_url('user/update'); ?>">
            <input type="hidden" name="id" value="<?= $user->id; ?>">
            <table border="1">
                <tr>
                    <td>Email</td>
                    <td><input type="text" value="<?= $user->email; ?>" name="email"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" value="<?= $user->password; ?>" name="password"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" value="<?= $user->nama; ?>" name="nama"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="ubah" value="Ubah Data"></td>
                </tr>
            </table>
        </form>
    </center>

</body>

</html>