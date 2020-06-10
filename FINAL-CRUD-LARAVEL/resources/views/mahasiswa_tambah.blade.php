<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet" />
        <title>Data mahasiswa</title>
    </head>
    <body style="background-image: url(../assets/img/laptop-desk-table-coffee-light-wood-912411-pxhere.com__0.jpg)">
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center" style= "background-color: #964b00; color: #fff">
                    Tambah Data Mahasiswa
                </div>
                <div class="card-body">
                    <a href="/mahasiswa" class="btn btn-warning">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form class="mb-5" method="post" action="/mahasiswa/store">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label><b>Nama</b></label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama mahasiswa ..">
 
                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label><b>NIM</b></label>
                            <input name="NIM" class="form-control" placeholder="NIM mahasiswa ..">
 
                             @if($errors->has('NIM'))
                                <div class="text-danger">
                                    {{ $errors->first('NIM')}}
                                </div>
                            @endif
 
                        </div>
                        
                        <div class="form-group">
                            <label><b>Jenis Kelamin</b></label>
				  	             <div class="form-check">
						               <input type="radio" class="form-check-input" name="jenis_kelamin" value="LK" required>
						                       <label class="form-check-label">LAKI-LAKI</label>
					             </div>
				  	             <div class="form-check">
						              <input type="radio" class="form-check-input" name="jenis_kelamin" value="PR" required>
						                      <label class="form-check-label">PEREMPUAN</label>
 
                             @if($errors->has('Jenis Kelamin'))
                                <div class="text-danger">
                                    {{ $errors->first('Jenis kelamin')}}
                                </div>
                            @endif
 
                        </div>
                         
                        <div class="form-group">
				             <label><b>Dosen Wali</b></label>
                                  <select name="province" id="dosenwali" class="form-control">
                                          <option value="">Pilih Dosen Wali</option>
                                    @foreach ($dosenwali as $id => $nama_dosen)
                                          <option value="{{ $id }}">{{ $nama_dosen }}</option>
                                    @endforeach
                                   </select>
                             </div>
                        </div>

                         
                        @if($errors->has('Nama Dosen'))
                                <div class="text-danger">
                                    {{ $errors->first('Nama Dosen')}}
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


<form method="post" action="/mahasiswa/store">
