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
                <div class="col-lg-6">
                    <div class="card mt-5">
                        <div class="card-body">
                            <h3 class="text-center">CARI KECOCOKAN DENGAN PASANGAN BERDASARKAN ZODIAK</h3>
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
                            <form action="/prosesjodohzodiak" method="post">
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
                                <label for="zodiakanda">Pilih Zodiakmu</label>
                                <select name="zodiakanda" class="form-control">
                                <option value='ARIES'>ARIES</option>
                                    <option value='TAURUS'>TAURUS</option>
                                    <option value='GEMINI'>GEMINI</option>
                                    <option value='CANCER'>CANCER</option>
                                    <option value='LEO'>LEO</option>
                                    <option value='VIRGO'>VIRGO</option>
                                    <option value='LIBRA'>LIBRA</option>
                                    <option value='SCORPIO'>SCORPIO</option>
                                    <option value='SAGITARIUS'>SAGITARIUS</option>
                                    <option value='CAPRICORN'>CAPRICORN</option>
                                    <option value='AQUARIUS'>AQUARIUS</option>
                                    <option value='PISCES'>PISCES</option>
                                </select>
                                </div>
                            
                                <div class="form-group">
                                <label for="zodiakpasangan">Pilih Zodiak Pasanganmu</label>
                                <select name="zodiakpasangan" class="form-control">
                                <option value='ARIES'>ARIES</option>
                                    <option value='TAURUS'>TAURUS</option>
                                    <option value='GEMINI'>GEMINI</option>
                                    <option value='CANCER'>CANCER</option>
                                    <option value='LEO'>LEO</option>
                                    <option value='VIRGO'>VIRGO</option>
                                    <option value='LIBRA'>LIBRA</option>
                                    <option value='SCORPIO'>SCORPIO</option>
                                    <option value='SAGITARIUS'>SAGITARIUS</option>
                                    <option value='CAPRICORN'>CAPRICORN</option>
                                    <option value='AQUARIUS'>AQUARIUS</option>
                                    <option value='PISCES'>PISCES</option>
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