<!DOCTYPE html>
<html>
<head>
@include('templatenew')
</head>
<body>

</body>
</html>

<!-- Styles  <div class="zodiac__aside">
            <div class="aside-popular-articles" data-cache-key="https_fimela.com:bump:App\Publishing\Lib\Collections\MostSharedArticles:1614957ccb89ef934e29fd856fb20cdf_Category#841:xhp_desktop__fimela__aside_popular_articles:88d855ecc0db1cdca41f829eaa244c9a" data-cache-ttl="30" data-component-name="desktop:fimela:aside-popular-articles"><div class="aside-popular-articles__header"><h6 class="aside-popular-articles__title">CARI ZODIAK</h6><a href="" style="color: #BF0561"><br>Belum tau zodiak kamu? Klik disini ya untuk mengetahuinya</a><div id="dablewidget_zlvqV378" data-widget_id="zlvqV378"></div>  
</div>
</div>
</div> -->
    <div class="zodiacsatuan">
        <div class="zodiac__wrapper">
            <div class="zodiac__containersendiri">
               
            <table class = "table">
                <tr>
                <th>NAMA DEPAN</th>
                <th>ALAMAT</th>
                <th>AKSI</th>
                </tr>
                @foreach($siswa2 as $siswa)
                <tr>
                {{$siswa}}
                @endforeach

                </tr>
        </table>
                

</div>
</div>
</div>