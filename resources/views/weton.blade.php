<!DOCTYPE html>
<html>
<head>
@include('templatenew')

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6" >
                    <div class="card mt-5">
                        <div class="card-body">
                            <h3 class="text-center">CARI KECOCOKAN DENGAN PASANGAN BERDASARKAN WETON</h3>
                            <br/>

                            {{-- menampilkan error validasi --}}
                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            <br/>
                             <!-- form validasi -->
                            <form action="/prosesweton" method="post">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input class="form-control" type="text" name="nama" value="{{ old('nama') }}">
                                </div>
                                
                                <div class="form-group">
                                <label for="gender">Pilih Gender Anda</label>
                                <select name="gender" class="form-control">
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                                </select>
                                </div>
                                
                                <div class="form-group">
                                <label for="hari">Pilih Hari</label>
                                <select name="hari" class="form-control">
                                    <option value="4">SENIN</option>
                                    <option value="3">SELASA</option>
                                    <option value="7">RABU</option>
                                    <option value="8">KAMIS</option>
                                    <option value="6">JUM'AT</option>
                                    <option value="9">SABTU</option>
                                    <option value="5">MINGGU</option>
                                </select>
                                </div>
                                
                                <div class="form-group">
                                <label for="weton">Pilih Pasaranmu</label>
                                <select name="weton" class="form-control">
                                    <option value="9">PAHING</option>
                                    <option value="7">PON</option>
                                    <option value="4">WAGE</option>
                                    <option value="8">KLIWON</option>
                                    <option value="5">LEGI</option>
                                </select>
                                </div>
                                

                                <div class="form-group">
                                <label for="haripasangan">Pilih Hari Pasanganmu</label>
                                <select name="haripasangan" class="form-control">
                                    <option value="4">SENIN</option>
                                    <option value="3">SELASA</option>
                                    <option value="7">RABU</option>
                                    <option value="8">KAMIS</option>
                                    <option value="6">JUM'AT</option>
                                    <option value="9">SABTU</option>
                                    <option value="5">MINGGU</option>
                                </select>
                                </div>   

                                <div class="form-group">
                                <label for="wetonpasangan">Pilih Pasaran Pasanganmu</label>
                                <select name="wetonpasangan" class="form-control">
                                    <option value="9">PAHING</option>
                                    <option value="7">PON</option>
                                    <option value="4">WAGE</option>
                                    <option value="8">KLIWON</option>
                                    <option value="5">LEGI</option>
                                </select>
                                </div>
                                 
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" value="Proses">
                                </div>
                              
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        


        
</body>
</html>