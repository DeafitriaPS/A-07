<!DOCTYPE html>
<html>
<head>
@include('templatenew')


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="text-center">CARI SHIO</h3><br><br>
                        <!-- Styles <h3 class="my-4">Data Yang Di Input : </h3> -->

                        <table class="table table-bordered table-striped">
                            <tr>
                                <td style="width:150px">Nama</td>
                                <td>{{ $data->nama }}</td>
                            </tr>
                            <tr>
                                <td>SHIO Anda</td>
                                <td>
                                    <?php
                                    $mulai = 1901;
                                    if((($mulai - $data->tanggal) % 12) == 1)
                                    echo "Tikus";
                                elseif((($mulai - $data->tanggal) % 12) == -11)
                                    echo "Tikus";
                                elseif((($mulai - $data->tanggal) % 12) == 0)
                                    echo "Kerbau";
                                elseif((($mulai - $data->tanggal) % 12) == 11)
                                    echo "Macan";
                                elseif((($mulai - $data->tanggal) % 12) == -1)
                                    echo "Macan";
                                elseif((($mulai - $data->tanggal) % 12) == 10)
                                    echo "Kelinci";
                                elseif((($mulai - $data->tanggal) % 12) == -2)
                                    echo "Kelinci";
                                elseif((($mulai - $data->tanggal) % 12) == 9)
                                    echo "Naga";
                                elseif((($mulai - $data->tanggal) % 12) == -3)
                                    echo "Naga";
                                elseif((($mulai - $data->tanggal) % 12) == 8)
                                    echo "Ular";
                                elseif((($mulai - $data->tanggal) % 12) == -4)
                                    echo "Ular";
                                elseif((($mulai - $data->tanggal) % 12) == 7)
                                    echo "Kuda";
                                elseif((($mulai - $data->tanggal) % 12) == -5)
                                    echo "Kuda";
                                elseif((($mulai - $data->tanggal) % 12) == 6)
                                    echo "Kambing";
                                elseif((($mulai - $data->tanggal) % 12) == -6)
                                    echo "Kambing";
                                elseif((($mulai - $data->tanggal) % 12) == 5)
                                    echo "Monyet";
                                elseif((($mulai - $data->tanggal) % 12) == -7)
                                    echo "Monyet";
                                elseif((($mulai - $data->tanggal) % 12) == 4)
                                    echo "Ayam";
                                elseif((($mulai - $data->tanggal) % 12) == -8)
                                    echo "Ayam";
                                elseif((($mulai - $data->tanggal) % 12) == 3)
                                    echo "Anjing";
                                elseif((($mulai - $data->tanggal) % 12) == -9)
                                    echo "Anjing";
                                elseif((($mulai - $data->tanggal) % 12) == 2)
                                    echo "Babi";
                                elseif((($mulai - $data->tanggal) % 12) == -10)
                                    echo "Babi";
                                    ?>
                                </td>
                          </tr>
                        </table>
                        <a href="/SHIO" class="text-center" class="btn btn-primary">Cari Ramalan SHIO mu</a>
                        <br>
                        <br>
                        <a href="/inputshio" class="btn btn-primary">Kembali</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>