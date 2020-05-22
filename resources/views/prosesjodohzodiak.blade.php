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
                                <td style="width:150px">Zodiak Anda</td>
                                <td>
                                    {{ $data->zodiakanda }}
                                </td>
                            </tr>

                            <tr>
                                <td style="width:150px">Zodiak Pasangan</td>
                                <td>
                                    {{ $data->zodiakpasangan }}
                                </td>
                            </tr>

                            <tr>
                                <td style="width:150px">Kecocokan</td>
                                <td>
                                
                                <?php
                                    if((($data->zodiakanda == 'ARIES') && ($data->zodiakpasangan == 'TAURUS')) || 
                                    (($data->zodiakanda == 'ARIES') && ($data->zodiakpasangan == 'VIRGO')) ||
                                    (($data->zodiakanda == 'ARIES') && ($data->zodiakpasangan == 'SCORPIO')) ||
                                    (($data->zodiakanda == 'ARIES') && ($data->zodiakpasangan == 'PISCES')) ||

                                    (($data->zodiakanda == 'TAURUS') && ($data->zodiakpasangan == 'ARIES')) ||
                                    (($data->zodiakanda == 'TAURUS') && ($data->zodiakpasangan == 'GEMINI')) ||
                                    (($data->zodiakanda == 'TAURUS') && ($data->zodiakpasangan == 'LIBRA')) ||
                                    (($data->zodiakanda == 'TAURUS') && ($data->zodiakpasangan == 'SAGITARIUS')) ||

                                    (($data->zodiakanda == 'GEMINI') && ($data->zodiakpasangan == 'TAURUS')) ||
                                    (($data->zodiakanda == 'GEMINI') && ($data->zodiakpasangan == 'CANCER')) ||
                                    (($data->zodiakanda == 'GEMINI') && ($data->zodiakpasangan == 'SCORPIO')) ||
                                    (($data->zodiakanda == 'GEMINI') && ($data->zodiakpasangan == 'CAPRICORN')) ||

                                    (($data->zodiakanda == 'CANCER') && ($data->zodiakpasangan == 'GEMINI')) ||
                                    (($data->zodiakanda == 'CANCER') && ($data->zodiakpasangan == 'LEO')) ||
                                    (($data->zodiakanda == 'CANCER') && ($data->zodiakpasangan == 'SAGITARIUS')) ||
                                    (($data->zodiakanda == 'CANCER') && ($data->zodiakpasangan == 'AQUARIUS')) ||

                                    (($data->zodiakanda == 'LEO') && ($data->zodiakpasangan == 'CANCER')) ||
                                    (($data->zodiakanda == 'LEO') && ($data->zodiakpasangan == 'VIRGO')) ||
                                    (($data->zodiakanda == 'LEO') && ($data->zodiakpasangan == 'CAPRICORN')) ||
                                    (($data->zodiakanda == 'LEO') && ($data->zodiakpasangan == 'PISCES')) ||

                                    (($data->zodiakanda == 'VIRGO') && ($data->zodiakpasangan == 'ARIES')) ||
                                    (($data->zodiakanda == 'VIRGO') && ($data->zodiakpasangan == 'LEO')) ||
                                    (($data->zodiakanda == 'VIRGO') && ($data->zodiakpasangan == 'LIBRA')) ||
                                    (($data->zodiakanda == 'VIRGO') && ($data->zodiakpasangan == 'AQUARIUS')) ||

                                    (($data->zodiakanda == 'LIBRA') && ($data->zodiakpasangan == 'TAURUS')) ||
                                    (($data->zodiakanda == 'LIBRA') && ($data->zodiakpasangan == 'VIRGO')) ||
                                    (($data->zodiakanda == 'LIBRA') && ($data->zodiakpasangan == 'SCORPIO')) ||
                                    (($data->zodiakanda == 'LIBRA') && ($data->zodiakpasangan == 'PISCES')) ||

                                    (($data->zodiakanda == 'SCORPIO') && ($data->zodiakpasangan == 'ARIES')) ||
                                    (($data->zodiakanda == 'SCORPIO') && ($data->zodiakpasangan == 'GEMINI')) ||
                                    (($data->zodiakanda == 'SCORPIO') && ($data->zodiakpasangan == 'LIBRA')) ||
                                    (($data->zodiakanda == 'SCORPIO') && ($data->zodiakpasangan == 'SAGITARIUS')) ||

                                    (($data->zodiakanda == 'SAGITARIUS') && ($data->zodiakpasangan == 'TAURUS')) ||
                                    (($data->zodiakanda == 'SAGITARIUS') && ($data->zodiakpasangan == 'CANCER')) ||
                                    (($data->zodiakanda == 'SAGITARIUS') && ($data->zodiakpasangan == 'SCORPIO')) ||
                                    (($data->zodiakanda == 'SAGITARIUS') && ($data->zodiakpasangan == 'CAPRICORN')) ||

                                    (($data->zodiakanda == 'CAPRICORN') && ($data->zodiakpasangan == 'GEMINI')) ||
                                    (($data->zodiakanda == 'CAPRICORN') && ($data->zodiakpasangan == 'LEO')) ||
                                    (($data->zodiakanda == 'CAPRICORN') && ($data->zodiakpasangan == 'SAGITARIUS')) ||
                                    (($data->zodiakanda == 'CAPRICORN') && ($data->zodiakpasangan == 'AQUARIUS')) ||

                                    (($data->zodiakanda == 'AQUARIUS') && ($data->zodiakpasangan == 'CANCER')) ||
                                    (($data->zodiakanda == 'AQUARIUS') && ($data->zodiakpasangan == 'VIRGO')) ||
                                    (($data->zodiakanda == 'AQUARIUS') && ($data->zodiakpasangan == 'CAPRICORN')) ||
                                    (($data->zodiakanda == 'AQUARIUS') && ($data->zodiakpasangan == 'PISCES')) ||

                                    (($data->zodiakanda == 'PISCES') && ($data->zodiakpasangan == 'ARIES')) ||
                                    (($data->zodiakanda == 'PISCES') && ($data->zodiakpasangan == 'LEO')) ||
                                    (($data->zodiakanda == 'PISCES') && ($data->zodiakpasangan == 'LIBRA')) ||
                                    (($data->zodiakanda == 'PISCES') && ($data->zodiakpasangan == 'AQUARIUS')))

                                    echo "20%";

                                    elseif((($data->zodiakanda == 'ARIES') && ($data->zodiakpasangan == 'CANCER')) || 
                                    (($data->zodiakanda == 'ARIES') && ($data->zodiakpasangan == 'CAPRICORN')) ||

                                    (($data->zodiakanda == 'TAURUS') && ($data->zodiakpasangan == 'LEO')) ||
                                    (($data->zodiakanda == 'TAURUS') && ($data->zodiakpasangan == 'AQUARIUS')) ||

                                    (($data->zodiakanda == 'GEMINI') && ($data->zodiakpasangan == 'VIRGO')) ||
                                    (($data->zodiakanda == 'GEMINI') && ($data->zodiakpasangan == 'PISCES')) ||

                                    (($data->zodiakanda == 'CANCER') && ($data->zodiakpasangan == 'ARIES')) ||
                                    (($data->zodiakanda == 'CANCER') && ($data->zodiakpasangan == 'LIBRA')) ||

                                    (($data->zodiakanda == 'LEO') && ($data->zodiakpasangan == 'TAURUS')) ||
                                    (($data->zodiakanda == 'LEO') && ($data->zodiakpasangan == 'SCORPIO')) ||

                                    (($data->zodiakanda == 'VIRGO') && ($data->zodiakpasangan == 'GEMINI')) ||
                                    (($data->zodiakanda == 'VIRGO') && ($data->zodiakpasangan == 'SAGITARIUS')) ||

                                    (($data->zodiakanda == 'LIBRA') && ($data->zodiakpasangan == 'CANCER')) ||
                                    (($data->zodiakanda == 'LIBRA') && ($data->zodiakpasangan == 'CAPRICORN')) ||

                                    (($data->zodiakanda == 'SCORPIO') && ($data->zodiakpasangan == 'LEO')) ||
                                    (($data->zodiakanda == 'SCORPIO') && ($data->zodiakpasangan == 'AQUARIUS')) ||

                                    (($data->zodiakanda == 'SAGITARIUS') && ($data->zodiakpasangan == 'VIRGO')) ||
                                    (($data->zodiakanda == 'SAGITARIUS') && ($data->zodiakpasangan == 'PISCES')) ||

                                    (($data->zodiakanda == 'CAPRICORN') && ($data->zodiakpasangan == 'ARIES')) ||
                                    (($data->zodiakanda == 'CAPRICORN') && ($data->zodiakpasangan == 'LIBRA')) ||

                                    (($data->zodiakanda == 'AQUARIUS') && ($data->zodiakpasangan == 'TAURUS')) ||
                                    (($data->zodiakanda == 'AQUARIUS') && ($data->zodiakpasangan == 'SCORPIO')) ||
                                    
                                    (($data->zodiakanda == 'PISCES') && ($data->zodiakpasangan == 'GEMINI')) ||
                                    (($data->zodiakanda == 'PISCES') && ($data->zodiakpasangan == 'SAGITARIUS')))

                                    echo "40%";


                                    elseif((($data->zodiakanda == 'ARIES') && ($data->zodiakpasangan == 'ARIES')) || 
                                    (($data->zodiakanda == 'ARIES') && ($data->zodiakpasangan == 'LIBRA')) ||

                                    (($data->zodiakanda == 'TAURUS') && ($data->zodiakpasangan == 'TAURUS')) ||
                                    (($data->zodiakanda == 'TAURUS') && ($data->zodiakpasangan == 'SCORPIO')) ||

                                    (($data->zodiakanda == 'GEMINI') && ($data->zodiakpasangan == 'GEMINI')) ||
                                    (($data->zodiakanda == 'GEMINI') && ($data->zodiakpasangan == 'SAGITARIUS')) ||

                                    (($data->zodiakanda == 'CANCER') && ($data->zodiakpasangan == 'CANCER')) ||
                                    (($data->zodiakanda == 'CANCER') && ($data->zodiakpasangan == 'CAPRICORN')) ||

                                    (($data->zodiakanda == 'LEO') && ($data->zodiakpasangan == 'LEO')) ||
                                    (($data->zodiakanda == 'LEO') && ($data->zodiakpasangan == 'AQUARIUS')) ||

                                    (($data->zodiakanda == 'VIRGO') && ($data->zodiakpasangan == 'VIRGO')) ||
                                    (($data->zodiakanda == 'VIRGO') && ($data->zodiakpasangan == 'PISCES')) ||

                                    (($data->zodiakanda == 'LIBRA') && ($data->zodiakpasangan == 'LIBRA')) ||
                                    (($data->zodiakanda == 'LIBRA') && ($data->zodiakpasangan == 'ARIES')) ||

                                    (($data->zodiakanda == 'SCORPIO') && ($data->zodiakpasangan == 'SCORPIO')) ||
                                    (($data->zodiakanda == 'SCORPIO') && ($data->zodiakpasangan == 'TAURUS')) ||

                                    (($data->zodiakanda == 'SAGITARIUS') && ($data->zodiakpasangan == 'SAGITARIUS')) ||
                                    (($data->zodiakanda == 'SAGITARIUS') && ($data->zodiakpasangan == 'GEMINI')) ||

                                    (($data->zodiakanda == 'CAPRICORN') && ($data->zodiakpasangan == 'CAPRICORN')) ||
                                    (($data->zodiakanda == 'CAPRICORN') && ($data->zodiakpasangan == 'CANCER')) ||

                                    (($data->zodiakanda == 'AQUARIUS') && ($data->zodiakpasangan == 'AQUARIUS')) ||
                                    (($data->zodiakanda == 'AQUARIUS') && ($data->zodiakpasangan == 'LEO')) ||
                                    
                                    (($data->zodiakanda == 'PISCES') && ($data->zodiakpasangan == 'PISCES')) ||
                                    (($data->zodiakanda == 'PISCES') && ($data->zodiakpasangan == 'VIRGO')))

                                    echo "80%";



                                    elseif((($data->zodiakanda == 'ARIES') && ($data->zodiakpasangan == 'GEMINI')) || 
                                    (($data->zodiakanda == 'ARIES') && ($data->zodiakpasangan == 'LEO')) ||
                                    (($data->zodiakanda == 'ARIES') && ($data->zodiakpasangan == 'AQUARIUS')) ||
                                    (($data->zodiakanda == 'ARIES') && ($data->zodiakpasangan == 'SAGITARIUS')) ||

                                    (($data->zodiakanda == 'TAURUS') && ($data->zodiakpasangan == 'CANCER')) ||
                                    (($data->zodiakanda == 'TAURUS') && ($data->zodiakpasangan == 'VIRGO')) ||
                                    (($data->zodiakanda == 'TAURUS') && ($data->zodiakpasangan == 'CAPRICORN')) ||
                                    (($data->zodiakanda == 'TAURUS') && ($data->zodiakpasangan == 'PISCES')) ||

                                    (($data->zodiakanda == 'GEMINI') && ($data->zodiakpasangan == 'ARIES')) ||
                                    (($data->zodiakanda == 'GEMINI') && ($data->zodiakpasangan == 'LEO')) ||
                                    (($data->zodiakanda == 'GEMINI') && ($data->zodiakpasangan == 'LIBRA')) ||
                                    (($data->zodiakanda == 'GEMINI') && ($data->zodiakpasangan == 'AQUARIUS')) ||

                                    (($data->zodiakanda == 'CANCER') && ($data->zodiakpasangan == 'TAURUS')) ||
                                    (($data->zodiakanda == 'CANCER') && ($data->zodiakpasangan == 'VIRGO')) ||
                                    (($data->zodiakanda == 'CANCER') && ($data->zodiakpasangan == 'SCORPIO')) ||
                                    (($data->zodiakanda == 'CANCER') && ($data->zodiakpasangan == 'PISCES')) ||

                                    (($data->zodiakanda == 'LEO') && ($data->zodiakpasangan == 'ARIES')) ||
                                    (($data->zodiakanda == 'LEO') && ($data->zodiakpasangan == 'GEMINI')) ||
                                    (($data->zodiakanda == 'LEO') && ($data->zodiakpasangan == 'LIBRA')) ||
                                    (($data->zodiakanda == 'LEO') && ($data->zodiakpasangan == 'SAGITARIUS')) ||

                                    (($data->zodiakanda == 'VIRGO') && ($data->zodiakpasangan == 'TAURUS')) ||
                                    (($data->zodiakanda == 'VIRGO') && ($data->zodiakpasangan == 'CANCER')) ||
                                    (($data->zodiakanda == 'VIRGO') && ($data->zodiakpasangan == 'SCORPIO')) ||
                                    (($data->zodiakanda == 'VIRGO') && ($data->zodiakpasangan == 'CAPRICORN')) ||

                                    (($data->zodiakanda == 'LIBRA') && ($data->zodiakpasangan == 'GEMINI')) ||
                                    (($data->zodiakanda == 'LIBRA') && ($data->zodiakpasangan == 'LEO')) ||
                                    (($data->zodiakanda == 'LIBRA') && ($data->zodiakpasangan == 'AQUARIUS')) ||
                                    (($data->zodiakanda == 'LIBRA') && ($data->zodiakpasangan == 'PISCES')) ||

                                    (($data->zodiakanda == 'SCORPIO') && ($data->zodiakpasangan == 'CANCER')) ||
                                    (($data->zodiakanda == 'SCORPIO') && ($data->zodiakpasangan == 'VIRGO')) ||
                                    (($data->zodiakanda == 'SCORPIO') && ($data->zodiakpasangan == 'CAPRICORN')) ||
                                    (($data->zodiakanda == 'SCORPIO') && ($data->zodiakpasangan == 'PISCES')) ||

                                    (($data->zodiakanda == 'SAGITARIUS') && ($data->zodiakpasangan == 'ARIES')) ||
                                    (($data->zodiakanda == 'SAGITARIUS') && ($data->zodiakpasangan == 'LEO')) ||
                                    (($data->zodiakanda == 'SAGITARIUS') && ($data->zodiakpasangan == 'LIBRA')) ||
                                    (($data->zodiakanda == 'SAGITARIUS') && ($data->zodiakpasangan == 'AQUARIUS')) ||

                                    (($data->zodiakanda == 'CAPRICORN') && ($data->zodiakpasangan == 'TAURUS')) ||
                                    (($data->zodiakanda == 'CAPRICORN') && ($data->zodiakpasangan == 'VIRGO')) ||
                                    (($data->zodiakanda == 'CAPRICORN') && ($data->zodiakpasangan == 'SCORPIO')) ||
                                    (($data->zodiakanda == 'CAPRICORN') && ($data->zodiakpasangan == 'PISCES')) ||

                                    (($data->zodiakanda == 'AQUARIUS') && ($data->zodiakpasangan == 'ARIES')) ||
                                    (($data->zodiakanda == 'AQUARIUS') && ($data->zodiakpasangan == 'GEMINI')) ||
                                    (($data->zodiakanda == 'AQUARIUS') && ($data->zodiakpasangan == 'LIBRA')) ||
                                    (($data->zodiakanda == 'AQUARIUS') && ($data->zodiakpasangan == 'SAGITARIUS')) ||

                                    (($data->zodiakanda == 'PISCES') && ($data->zodiakpasangan == 'TAURUS')) ||
                                    (($data->zodiakanda == 'PISCES') && ($data->zodiakpasangan == 'CANCER')) ||
                                    (($data->zodiakanda == 'PISCES') && ($data->zodiakpasangan == 'SCORPIO')) ||
                                    (($data->zodiakanda == 'PISCES') && ($data->zodiakpasangan == 'CAPRICORN')))

                                    echo "100%";

                                 



                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td style="width:150px">Ramalan</td>
                                <td>
                                <?php
                                    if((($data->zodiakanda == 'ARIES') && ($data->zodiakpasangan == 'TAURUS')) || 
                                    (($data->zodiakanda == 'TAURUS') && ($data->zodiakpasangan == 'ARIES')))
                                    echo "Aries memiliki sifat yang tidak sabaran dan sedikit keras kepala. Sedangkan taurus
                                    memiliki sifat yang kaku dan kepala batu sehingga apabila kedua zodiak ini bersatu yang ada
                                    saling bertentangan karena sama-sama keras kepala.";
                                    elseif((($data->zodiakanda == 'ARIES') && ($data->zodiakpasangan == 'LEO')) || 
                                    (($data->zodiakanda == 'LEO') && ($data->zodiakpasangan == 'ARIES')))
                                    echo "Saat memberikan saran, Aries dan Leo juga sama-sama tulus. Menjalin hubungan cinta bersama akan membuat proses pendewasaan dua zodiak ini menjadi lebih kuat, kaya, cepat. Mereka juga akan lebih termotivasi mencapai target masing-masing.";
                                    elseif((($data->zodiakanda == 'ARIES') && ($data->zodiakpasangan == 'GEMINI')) || 
                                    (($data->zodiakanda == 'GEMINI') && ($data->zodiakpasangan == 'ARIES')))
                                    echo "Pasangan zodiak Aries dan Gemini akan memiliki hubungan cinta yang seru dan dinamis. Kedua insan intelektual ini sama-sama menyukai percakapan yang cerdas. Hubungan mereka juga tidak pernah membosankan, karena keduanya sama-sama menggemari petualangan. Gampang dan mudah!";
                                    elseif((($data->zodiakanda == 'ARIES') && ($data->zodiakpasangan == 'AQUARIUS')) || 
                                    (($data->zodiakanda == 'AQUARIUS') && ($data->zodiakpasangan == 'ARIES')))
                                    echo "Bagusnya, ada banyak humor di dalamnya. Mereka juga tidak mudah berasa bosan satu sama lain, dan hobi melakukan hal seru bersama. Bahkan seandainya ketertarikan di antara keduanya dihilangkan, Aries dan Aquarius tetap akan menjadi sahabat.";                                    
                                     
                                    elseif((($data->zodiakanda == 'ARIES') && ($data->zodiakpasangan == 'SAGITARIUS')) || 
                                    (($data->zodiakanda == 'SAGITARIUS') && ($data->zodiakpasangan == 'ARIES')))
                                    echo "Aries dan Sagitarius sama-sama memiliki polar Yang. Ini artinya, keduanya sama-sama agresif, gigih, dan fokus pada proses. Dalam hubungan cinta ini, mereka bisa saling memotivasi, atau malah saling berebut kekuasaan."; ?>
                                </td>
                            </tr>
                            

                        </table>
                        
                        <a href="/zodiak" class="text-center" class="btn btn-primary">Cari Ramalan Zodiakmu</a>
                        <br>
                        <br>

                        <a href="/jodohzodiak" class="btn btn-primary">Kembali</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>