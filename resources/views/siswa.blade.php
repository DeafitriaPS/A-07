<!DOCTYPE html>
<html>
<head>
@include('templatenew')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>

</body>
</html>




<div class="zodiac">
    <div class="zodiac__wrapper">
        <div class="zodiac__container">
            <div class="zodiac__tab-container">
                <a href="/zodiak" class="zodiac__tab-menu-daily">Ramalan Tahunan</a>
            
            
                <a href="/zodiak" class="zodiac__tab-menu-daily">Ramalan Mingguan</a>
                <div class="container">

                </div>
</div>

</div>
</div>
</div>

<div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card mt-5">
                    <div class="card-body">
                        <h1 class="text-center"><br>ZODIAK MINGGUAN</h1><br><br>
                        <!-- Styles <h3 class="my-4">Data Yang Di Input : </h3> -->

                        <table class = "table">
                <tr>
                <th class="text-center">NAMA ZODIAK</th>
                <th class="text-center">  RAMALAN  </th>
                <th class="text-center">  AKSI</th>
                </tr>
                @foreach($data_siswa as $siswa)
                <tr>
                <td>{{$siswa->nama_depan}}</td>
                <td>{{$siswa->alamat}}</td>
                <td>
                <a href="/siswa/{{$siswa->id}}/edit"  class="btn btn-warning btn-sm">Edit</a></td>
                </tr>
                @endforeach
        </table>
                
        </table>
</div>
</div>

</div>
</div>
</div>