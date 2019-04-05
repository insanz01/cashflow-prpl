<?php
require_once('database/db.php');

$q = "select * from namatable";
$sql = mysqli_query($c, $q);

?>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Cashflow Statement</title>
</head>

<body>
    <div class="container-fluid">
        <div class="container py-4">
            <div class="row">
                <div class="col-4 mb-3">
                    <input type="date" class="form-control" name="awal">
                </div>
                <div class="col-4 mb-3">
                    <input type="date" class="form-control" name="akhir">
                </div>
                <div class="col-4 mb-3">
                    <button class="btn btn-primary float-right">Cari berdasarkan filter</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <table class="table">
                    <thead>
                        <th>Tanggal</th>
                        <th>Jenis</th>
                        <th>Transaksi</th>
                        <th>Jumlah</th>
                        <th>Debit</th>
                        <th>Kredit</th>
                        <th>Saldo</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <script>
                                    document.write(new Date().getUTCFullYear())
                                </script>
                            </td>
                            <td>Pemasukan</td>
                            <td>I dunno</td>
                            <td>3</td>
                            <td>ya</td>
                            <td>tidak</td>
                            <td>Rp. 2000000,-</td>
                        </tr>
                        <tr>
                            <td>
                                <script>
                                    document.write(new Date())
                                </script>
                            </td>
                            <td>Pemasukan</td>
                            <td>I dunno</td>
                            <td>3</td>
                            <td>ya</td>
                            <td>tidak</td>
                            <td>Rp. 2000000,-</td>
                        </tr>
                        <tr>
                            <td>
                                <script>
                                    document.write(new Date())
                                </script>
                            </td>
                            <td>Pemasukan</td>
                            <td>I dunno</td>
                            <td>3</td>
                            <td>ya</td>
                            <td>tidak</td>
                            <td>Rp. 2000000,-</td>
                        </tr>
                        <tr>
                            <td>
                                <script>
                                    document.write(new Date())
                                </script>
                            </td>
                            <td>Pemasukan</td>
                            <td>I dunno</td>
                            <td>3</td>
                            <td>ya</td>
                            <td>tidak</td>
                            <td>Rp. 2000000,-</td>
                        </tr>
                        <tr>
                            <td>
                                <script>
                                    document.write(new Date())
                                </script>
                            </td>
                            <td>Pemasukan</td>
                            <td>I dunno</td>
                            <td>3</td>
                            <td>ya</td>
                            <td>tidak</td>
                            <td>Rp. 2000000,-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-1"></div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html> 