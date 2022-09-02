<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Biodata Anggota Grup Kpop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('biodataanggotas.update', $biodataanggota->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">NAMA</label>
                                <input type="text" class="form-control @error('nama_kpop') is-invalid @enderror" name="nama_kpop" value="{{ old('nama_kpop', $biodataanggota->nama_kpop) }}" placeholder="Masukkan Nama">
                            
                            
                                <!-- error message untuk nama -->
                                @error('nama_kpop')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">JENIS KELAMIN 
                                </label>
                                <div class="col-sm-10">
                                <select name="jk_kpop" class="form-control">
                                    <option value="{{ old('jk_kpop', $biodataanggota->jk_kpop) }}">-Pilih-</option>
                                    <option @if(old('jk_kpop')=='Laki-Laki') selected @endif value="Laki-Laki">Laki-Laki</option>
                                    <option @if(old('jk_kpop')=='Perempuan') selected @endif value="Perempuan">Perempuan</option>
                                </select>
                                </div>
                                @error('jk_kpop')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">TANGGAL LAHIR</label>
                                <input type="date" class="form-control @error('dob_kpop') is-invalid @enderror" name="dob_kpop" value="{{ old('dob_kpop', $biodataanggota->dob_kpop) }}" placeholder="Masukkan Tanggal Lahir">
                            
                                <!-- error message untuk tanggal lahir-->
                                @error('dob_kpop')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">ASAL GRUP</label>
                                <input type="text" class="form-control @error('asalgrup_kpop') is-invalid @enderror" name="asalgrup_kpop" value="{{ old('asalgrup_kpop', $biodataanggota->asalgrup_kpop) }}" placeholder="Masukkan Asal Grup">
                            
                                <!-- error message untuk Asal Grup-->
                                @error('asalgrup_kpop')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
</body>
</html>