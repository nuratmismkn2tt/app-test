<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembayaran Tagihan Listrik Pascabayar</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Header -->
    <section class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="imgs/logo2.png" alt="logo_perusahaan" width="50px">
                    <h2>PT SINAR NUSANTARA BERSAMA</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="box-form">
        <div class="container">
            <div class="row">

                <div class="col-md-8 offset-md-2">
                    <div class="box">
                        <h2>Pembayaran Listrik Pascabayar</h2>

                        <form action="" method="POST">
                            <table width="100%" cellpadding=5""">

                                <tr>
                                    <td>Tanggal</td>
                                    <td>:</td>
                                    <td><input type="date" name="tanggal" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>ID Pelanggan</td>
                                    <td>:</td>
                                    <td><input type="text" name="id_pelanggan" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Nama Pembeli</td>
                                    <td>:</td>
                                    <td>
                                        <input type="text" name="nama_pembeli" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <button type="submit" class="btn btn-danger">Hitung</button>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



</body>

</html>