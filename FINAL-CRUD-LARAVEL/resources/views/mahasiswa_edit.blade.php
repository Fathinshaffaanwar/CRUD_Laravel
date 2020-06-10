<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet" />
        <title>Data Mahasiswa</title>
    </head>
    <body style="background-image: url(../assets/img/laptop-desk-table-coffee-light-wood-912411-pxhere.com__0.jpg)">
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center" style= "background-color: #964b00; color: #fff">
                    Edit Data Mahasiswa
                </div>
                <div class="card-body">
                    <a href="/mahasiswa" class="btn btn-warning">Kembali</a>
                    <br/>
                    <br/>
 
                    <form method="POST" action="/mahasiswa/update/{{ $mahasiswa->id }}">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label><b>Nama</b></label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama mahasiswa .." value=" {{ $mahasiswa->nama }}">
 
                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label><b>NIM</b></label>
                            <input type="text" name="NIM" class="form-control" placeholder="Alamat Mahasiswa .." value=" {{ $mahasiswa->NIM }}">
 
                             @if($errors->has('NIM'))
                                <div class="text-danger">
                                    {{ $errors->first('NIM')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group" style="margin-bottom: 1 rem">
                            <label><b>Jenis Kelamin</b></label>
				  	             <div class="form-check">
						              <input type="radio" class="form-check-input" name="jenis_kelamin" value=" {{ $mahasiswa->jenis_kelamin }}" required>
						                     <label class="form-check-label">LAKI-LAKI</label>
					             </div>
				  	             <div class="form-check">
						              <input type="radio" class="form-check-input" name="jenis_kelamin" value=" {{ $mahasiswa->jenis_kelamin }}" required>
						                      <label class="form-check-label">PEREMPUAN</label>
 
                             @if($errors->has('jenis_kelamin'))
                                <div class="text-danger">
                                    {{ $errors->first('jenis_kelamin')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
				             <label><b>Dosen Wali</b></label>

                                   <select name="province" id="dosenwali" class="form-control" value=" {{ $mahasiswa->id_dosen }}">
                                           <option value="">Pilih Dosen Wali</option>
                                   @foreach ($dosenwali as $id => $nama_dosen)
                                           <option value="{{ $id }}">{{ $nama_dosen }}</option>
                                    @endforeach
                                    </select>
                             </div>
                        </div>

                         
                        @if($errors->has('province'))
                                <div class="text-danger">
                                    {{ $errors->first('province')}}
                                </div>
                            @endif
 
			     	</div>

                     <div class="form-group">
                            <button type="submit" class="btn btn-warning" value="submit" name="submit">Simpan</button>
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>