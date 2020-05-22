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
                        <h3 class="text-center"><?php date_default_timezone_set("Asia/Jakarta");
                         if (date('H') < '12'){
                                    echo "Selamat Pagi ";
                                    }
                                    elseif (date('H') >= '12' and date('H') < '15' ){
                                    echo "Selamat Siang ";
                                    }
                                    elseif (date('H') >= '13' and date('H') < '18' ){
                                    echo "Selamat Sore ";
                                    }
                                    else echo "Selamat Malam";

                            if($data->gender == "Laki-laki") {
                                echo " Tuan ";
                                }
                                elseif ($data->gender == "Perempuan"){
                                echo " Nona ";
                                }
                                echo $data->nama;?></h3>
                                <h6 class="text-center" style="color:red"><br><?php
                                echo "Pesan ini dibuat secara otomatis :)"?></h6><br><br>

                        <!-- Styles <h3 class="my-4">Data Yang Di Input : </h3> -->

                        <table class="table table-bordered table-striped">
                            <tr>
                                <td style="width:150px">Neptu Anda dan Pasangan</td>
                                <td>
                                
                                <?php
                                    if((($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 1) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 10) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 19) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 28) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 36))
                                    echo "Pegat";
                                    elseif((($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 2) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 11) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 20) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 29))
                                    echo "Ratu";
                                    elseif((($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 3) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 12) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 21) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 30))
                                    echo "Jodoh";
                                    elseif((($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 4) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 13) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 22) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 31))
                                    echo "Topo";
                                    elseif((($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 5) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 14) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 23) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 32))
                                    echo "Tinari";
                                    elseif((($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 6) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 15) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 24) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 33))
                                    echo "Padu";
                                    elseif((($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 7) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 16) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 25) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 34))
                                    echo "Sujanan";
                                    elseif((($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 8) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 17) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 26) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 35))
                                    echo "Pesthi";
                                    ?>
                                </td>
                            
                            </tr>

                            <tr>
                                <td style="width:150px">Kecocokan</td>
                                <td>
                                
                                <?php
                                    if((($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 1) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 10) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 19) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 28) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 36))
                                    echo "20%";
                                    elseif((($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 2) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 11) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 20) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 29))
                                    echo "90%";
                                    elseif((($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 3) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 12) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 21) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 30))
                                    echo "100%";
                                    elseif((($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 4) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 13) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 22) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 31))
                                    echo "85%";
                                    elseif((($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 5) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 14) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 23) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 32))
                                    echo "95%";
                                    elseif((($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 6) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 15) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 24) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 33))
                                    echo "50%";
                                    elseif((($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 7) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 16) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 25) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 34))
                                    echo "35%";
                                    elseif((($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 8) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 17) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 26) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 35))
                                    echo "90%";
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td>Ramalan</td>
                                <td>
                                    <?php
                                    if((($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 1) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 10) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 19) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 28) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 36))
                                    echo "Pasangan ini kemungkinan akan sering menemukan masalah di kemudian hari. Bisa itu dari masalah ekonomi, kekuasaan, perselingkuhan yang bisa menyebabkan pasangan tersebut bercerai atau pegatan.";
                                    elseif((($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 2) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 11) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 20) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 29))
                                    echo "Pasangan ini bisa dibilang memang sudah jodohnya. Dihargai dan disegani oleh tetangga maupun lingkungan sekitar. Bahkan banyak orang yang iri akan keharmonisannya dalam membina rumah tangga.";
                                    elseif((($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 3) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 12) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 21) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 30))
                                    echo "Pasangan ini memang beneran cocok dan berjodoh. Bisa saling menerima segala kelebihan dan kekurangannya. Rumah tangga bisa rukun sampai tua.";
                                    elseif((($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 4) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 13) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 22) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 31))
                                    echo "Dalam membina rumah tangga akan sering mengalami kesusahan di awal-awal namun akan bahagia pada akhirnya. Masalah tersebut bisa saja soal ekonomi dan lain sebagainya. Namun pada saat sudah memiliki anak dan cukup lama berumah tangga, akhirnya akan hidup sukses dan bahagia.";
                                    elseif((($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 5) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 14) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 23) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 32))
                                    echo "Pasangan ini akan menemukan kebahagiaan. Gampang dalam mencari rezeki dan tidak sampai hidup kekurangan. Hidupnya juga sering mendapat keberuntungan.";
                                    elseif((($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 6) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 15) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 24) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 33))
                                    echo "Pasangan ini dalam berumah tangga akan sering mengalami pertengkaran. Namum meskipun sering bertengkar, tidak sampai membawa ke dalam perceraian. Masalah pertengkaran tersebut bahkan bisa dipicu dari hal-hal yang sifatnya cukup sepele.";
                                    elseif((($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 7) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 16) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 25) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 34))
                                    echo "Pasangan ini dalam berumah tangga akan sering mengalami pertengkaran dan masalah perselingkuhan. Bisa itu dari pihak laki-laki maupun perempuan yang memulai perselingkuhan";
                                    elseif((($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 8) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 17) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 26) ||
                                    (($data->hari + $data->weton + $data->haripasangan + $data->wetonpasangan) == 35))
                                    echo "Pasangan ini dalam berumah tangga akan rukun, tenteram, adem ayem sampai tua. Meskipun ada masalah apapun tidak akan sampai merusak keharmonisan keluarga.";
                                
                                
                                
                                
                                
                                    ?>

                                </td>


                          </tr>
                            

                        </table>
                        
                        <a href="/inputweton" class="text-center" class="btn btn-primary">Cari Ramalan Wetonmu</a>
                        <br>
                        <br>

                        <a href="/weton" class="btn btn-primary">Kembali</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>