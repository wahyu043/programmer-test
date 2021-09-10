<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <title>Registration</title>
</head>

<body>

    <form method="post" action="<?= base_url('user/save'); ?>">
        <div class="form-group">
            <div class="col-md-12 text-center">
                <h3>Formulir Registrasi</h3>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3">
                Email
            </label>
            <div class="col-md-9">
                <input type="email" name="Email" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3">
                Password
            </label>
            <div class="col-md-9">
                <input type="password" name="passwrod" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3">
                Tanggal Lahir
            </label>
            <div class="col-md-9">
                <input type="date" name="tanggal_lahir" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12 text-center">
                <input type="submit" name="kirim" value="Submit" class="btn-info">
                <input type="reset" name="reset" class="btn-danger">
            </div>
        </div>
    </form>

</body>

</html>