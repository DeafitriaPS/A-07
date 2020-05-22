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
                        <h3 class="text-center">CARI WETON</h3><br><br>
                        <!-- Styles <h3 class="my-4">Data Yang Di Input : </h3> -->

                        <table class="table table-bordered table-striped">
                            <tr>
                                <td style="width:150px">Nama</td>
                                <td>{{ $data->nama }}</td>
                            
                            </tr>

                            <tr>
                                <td>Zodiak Anda</td>
                                <td>
                                    <?php
                                    
                                    if((((($data->tahun % 100) + ($data->tahun/4) + 
                                    ($data->tanggal) + ($data->bulan))%7) + 3) == 7)
                                    echo "Minggu";
                                    elseif ((((($data->tahun % 100) + ($data->tahun/4) + 
                                    ($data->tanggal) + ($data->bulan))%7) + 3) == 8)
                                    echo "Senin";
                                    elseif ((((($data->tahun % 100) + ($data->tahun/4) + 
                                    ($data->tanggal) + ($data->bulan))%7) + 3) == 9)
                                    echo "Selasa";
                                    elseif ((((($data->tahun % 100) + ($data->tahun/4) + 
                                    ($data->tanggal) + ($data->bulan))%7) + 3) == 3)
                                    echo "Rabu";
                                    elseif ((((($data->tahun % 100) + ($data->tahun/4) + 
                                    ($data->tanggal) + ($data->bulan))%7) + 3) == 4)
                                    echo "Kamis";
                                    elseif ((((($data->tahun % 100) + ($data->tahun/4) + 
                                    ($data->tanggal) + ($data->bulan))%7) + 3) == 5)
                                    echo "Jumat";
                                    elseif ((((($data->tahun % 100) + ($data->tahun/4) + 
                                    ($data->tanggal) + ($data->bulan))%7) + 3) == 6)
                                    echo "Sabtu";
                                
                                    ?>
                                </td>
                          </tr>

                          <tr>
                                <td>Pasaran Anda</td>
                                <td>
                                    <?php
                                    if((((($data->tahun % 100) + ($data->tahun/4) + 
                                    ($data->tanggal) + ($data->bulan))%5) + 3) == 7)
                                    echo "Wage";
                                    elseif ((((($data->tahun % 100) + ($data->tahun/4) + 
                                    ($data->tanggal) + ($data->bulan))%5) + 3) == 3)
                                    echo "Kliwon";
                                    elseif ((((($data->tahun % 100) + ($data->tahun/4) + 
                                    ($data->tanggal) + ($data->bulan))%5) + 3) == 4)
                                    echo "Legi";
                                    elseif ((((($data->tahun % 100) + ($data->tahun/4) + 
                                    ($data->tanggal) + ($data->bulan))%5) + 3) == 5)
                                    echo "Pahing";
                                    elseif ((((($data->tahun % 100) + ($data->tahun/4) + 
                                    ($data->tanggal) + ($data->bulan))%5) + 3) == 6)
                                    echo "Pon";

                                    ?>
                                </td>
                          </tr>
                            

                        </table>
                        
                       
                        <br>
                        <br>

                        <a href="/inputweton" class="btn btn-primary">Kembali</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>