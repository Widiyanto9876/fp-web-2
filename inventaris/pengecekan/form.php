<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Inventaris</title>
    <meta name="description" content="Admin Inventaris">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="../../vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../../vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="../../assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark">

    <div class="Admin Inventaris-peminjaman d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="form-content">
                <div class="form-logo">
                    <a href="index.php">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="section-center">
        <div class="container">
            <div class="row">
                <div class="form-header">
                        <form method='POST' action='tambah.php'>
                            <div class="card">
                                <div class="card-header"><h1><center><strong>Form Pengecekan</strong></center></h1></div>
                                    <div class="card-body card-block">
                                    <div class="form-group">
                                    <span><b>id_cek</b></span><br/>
                                    <input type='text' name='id_cek' placeholder='id_cek' value='<?php echo @$data['id_cek']; ?>' required><br/>
                                    </div>
                                    <div class="form-group">
                                        <span><b>id_barang</b></span><br/>
                                        <input type='text' name='id_barang' placeholder='id_barang' value='<?php echo @$data['id_barang']; ?>' required><br/>
                                    </div>
                                    <div class="form-group">
                                        <span><b>nik</b></span><br/>
                                        <input type='text' name='nik' placeholder='nik' value='<?php echo @$data['nik']; ?>' required><br/>
                                    </div>
                                    <div class="form-group">
                                        <span><b>kondisi</b></span><br/>
                                        <input type='text' name='kondisi' placeholder='kondisi' value='<?php echo @$data['kondisi']; ?>' required><br/>
                                    </div>
                                    <div class="form-group">
                                        <span><b>tgl_cek</b></span><br/>
                                        <input type='text' name='tgl_cek' placeholder='tgl_cek' value='<?php echo @$data['tgl_cek']; ?>' required><br/>
                                    </div>
                                        <div class="form-btn">
                                        <button class="submit-btn">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>


    