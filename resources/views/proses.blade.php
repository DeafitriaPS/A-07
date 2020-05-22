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
                        <h3 class="text-center">CARI ZODIAK</h3><br><br>
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
                                    if($data->bulan=='Maret' && ($data->tanggal >20))
                                    echo "Aries";
                                elseif ($data->bulan=='April' && ($data->tanggal <20))
                                    echo "Aries";
                                elseif ($data->bulan=='April' && ($data->tanggal >19))
                                    echo "Taurus";
                                elseif ($data->bulan=='Mei' && ($data->tanggal <21))
                                    echo "Taurus";
                                elseif ($data->bulan=='Mei' && ($data->tanggal >20))
                                    echo "Gemini";
                                elseif ($data->bulan=='Juni' && ($data->tanggal <21))
                                    echo "Gemini";
                                elseif ($data->bulan=='Juni' && ($data->tanggal >20))
                                    echo "Cancer";
                                elseif ($data->bulan=='Juli' && ($data->tanggal <23))
                                    echo "Cancer";
                                elseif ($data->bulan=='Juli' && ($data->tanggal >22))
                                    echo "Leo";
                                elseif ($data->bulan=='Agustus' && ($data->tanggal <23))
                                    echo "Leo";
                                elseif ($data->bulan=='Agustus' && ($data->tanggal >22))
                                    echo "Virgo";
                                elseif ($data->bulan=='September' && ($data->tanggal <23))
                                    echo "Virgo";
                                elseif ($data->bulan=='September' && ($data->tanggal >22))
                                    echo "Libra";
                                elseif ($data->bulan=='Oktober' && ($data->tanggal <23))
                                    echo "Libra";
                                elseif ($data->bulan=='Oktober' && ($data->tanggal >22))
                                    echo "Scorpio";
                                elseif ($data->bulan=='November' && ($data->tanggal <22))
                                    echo "Scorpio";
                                elseif ($data->bulan=='November' && ($data->tanggal >21))
                                    echo "Sagitarius";
                                elseif ($data->bulan=='Desember' && ($data->tanggal <22))
                                    echo "Sagitarius";
                                elseif ($data->bulan=='Desember' && ($data->tanggal >21))
                                    echo "Capricorn";
                                elseif ($data->bulan=='Januari' && ($data->tanggal <20))
                                    echo "Capricorn";
                                elseif ($data->bulan=='Januari' && ($data->tanggal >19))
                                    echo "Aquarius";
                                elseif ($data->bulan=='Februari' && ($data->tanggal <19))
                                    echo "Aquarius";
                                elseif ($data->bulan=='Februari' && ($data->tanggal >18))
                                    echo "Pisces";
                                elseif ($data->bulan=='Maret' && ($data->tanggal <21))
                                    echo "Pisces";
                                
                                
                                
                                
                                
                                    ?>

                                </td>


                          </tr>
                            

                        </table>
                        
                        <a href ="/zodiak" class="text-center" class="btn btn-primary">Cari Ramalan Zodiakmu</a>
                        
                        <br>
                        <br>

                        <a href="/input" class="btn btn-primary">Kembali</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>