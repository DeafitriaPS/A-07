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
                <div class="col-lg-8">
                    <div class="card mt-5">
                        <div class="card-body">
                            <h3 class="text-center">CARI WETON</h3>
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
                             <form action="/prosespilihweton" method="post">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="tanggal">Nama</label>
                                    <input class="form-control" type="text" name="nama" value="{{ old('nama') }}">
                                </div>
                                
                                <div class="form-group">
                                <label for="bulan">Pilih Zodiakmu</label>
                                <select name="bulan" class="form-control">
                                    <option value='0'>JANUARI</option>
                                    <option value='3'>FEBRUARI</option>
                                    <option value='3'>MARET</option>
                                    <option value='6'>APRIL</option>
                                    <option value='1'>MEI</option>
                                    <option value='4'>JUNI</option>
                                    <option value='6'>JULI</option>
                                    <option value='2'>AGUSTUS</option>
                                    <option value='5'>SEPTEMBER</option>
                                    <option value='0'>OKTOBER</option>
                                    <option value='3'>NOVEMBER</option>
                                    <option value='5'>DESEMBER</option>
                                </select>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal">Tanggal Lahir (1-31)</label>
                                    <input class="form-control" type="text" name="tanggal" value="{{ old('tanggal') }}">
                                </div>
                                <div class="form-group">
                                    <label for="tahun">Tahun Lahir (Contoh : 2020)</label>
                                    <input class="form-control" type="text" name="tahun" value="{{ old('tahun') }}">
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