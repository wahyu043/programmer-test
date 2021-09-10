<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>

<body>

    <body>
        <?php
        if ($this->session->flashdata('error')) {
            echo $this->session->flashdata('error');
        } ?>
        <form method="post" action="<?= base_url('login/process'); ?>">
            <table>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="login" value="Login"></td>
                </tr>
            </table>
        </form>
    </body>

</html>