<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bot - Auto Komentar Facebook</title>
    <!-- CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" media="all" href="/css/style-login.css" />
</head>
<body>

    <div class="container">
        <!-- Text Header -->
        <div style="text-align:center; color:#fff;">
            <h3>Bot Komentar Facebook</h3>
            <p>Klik + untuk menambahkan akun</p>
        </div><br>

        <div class="form__field">
            <form action="" method="post">
                <div class="row">
                    <div class="col-md-12-container" style="margin-bottom: 20px;">
                        <input type="text" name="link tujuan" placeholder="link tujuan" class="form-control"></input>
                    </div>
                </div>
                <div class="row" id="dynamic_form">
                    <div class="row">
                        <div class="form-group baru-data">
                            <div class="col-md-2">
                                <input type="text" name="username" placeholder="username" class="form-control" rows="1"></input>
                            </div>
                            <div class="col-md-2">
                                <input type="password" name="password" placeholder="password" class="form-control" rows="1"></input>
                            </div>
                            <div class="col-md-1">
                                <input name="komentar" placeholder="komentar" class="form-control" rows="1"></input>
                            </div>
                            <div class="col-md-1">
                                <input name="komentar" placeholder="komentar" class="form-control" rows="1"></input>
                            </div>
                            <div class="col-md-1">
                                <input name="komentar" placeholder="komentar" class="form-control" rows="1"></input>
                            </div>
                            <div class="col-md-1">
                                <input name="komentar" placeholder="komentar" class="form-control" rows="1"></input>
                            </div>
                            <div class="col-md-1">
                                <input name="komentar" placeholder="komentar" class="form-control" rows="1"></input>
                            </div>
                            <div class="col-md-2">
                            <input class="form-control" type="text" placeholder="Status" aria-label="Disabled input example" disabled>
                            </div>
                            <div class="button-group">
                                <button type="button" class="btn btn-success btn-tambah"><i class="fa fa-plus"></i></button>
                                <button type="button" class="btn btn-danger btn-hapus" style="display:none;"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-simpan"><i class="fa fa-save"></i> Submit</button>
            </form>
        </div>

    </div>
            <!-- Javascript -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="/js/bootstrap.min.js"></script>
            <script src="dynamic-form.js"></script>
</body>
</html>