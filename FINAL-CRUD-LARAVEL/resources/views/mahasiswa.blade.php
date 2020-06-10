<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet" />
        <title>Data mahasiswa</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Mahasiswa
                </div>
                <div class="card-body">
                    <a href="/mahasiswa/tambah" class="btn btn-warning">Tambah Mahasiswa</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-warning">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>NIM</th>
                                <th>Jenis Kelamin</th>
                                <th>Nama Dosen</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($mahasiswa as $p)
                            <tr>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->NIM }}</td>
                                <td>{{ $p->jenis_kelamin }}</td>
                                <td>{{ $p->nama_dosen }}</td>
                                <td>
                                    <a href="/mahasiswa/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/mahasiswa/hapus/{{ $p->id }}" class="btn btn-warning">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>