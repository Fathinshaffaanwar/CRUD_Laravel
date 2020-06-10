<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\mahasiswa;
use App\dosenwali;
use DB;

class mahasiswaController extends Controller
{
    public function index()
    {
    	$mahasiswa = DB::table('mahasiswa')->join('dosenwali','mahasiswa.id_dosen','=','dosenwali.id_dosen')->get();
    	return view('mahasiswa',compact('mahasiswa'));
    }

    public function tambah()
    {
        $dosenwali = dosenwali::pluck('nama_dosen','id_dosen');
        return view('mahasiswa_tambah',compact('dosenwali'));
    }

    public function store(Request $request)
    {
        mahasiswa::create([
            'nama'=>$request->nama,
            'NIM'=>$request->NIM,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'id_dosen'=>$request->province
        ]);
        return redirect('/mahasiswa');
     }

     public function edit($id)
    {
        $mahasiswa = mahasiswa::findOrFail($id);
        $dosenwali = dosenwali::pluck('nama_dosen','id_dosen');
        return view('mahasiswa_edit',compact('mahasiswa','dosenwali'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama' => 'required',
            'NIM' => 'required',
            'jenis_kelamin'=>'required',
            'province'=>'required'
         ]);

         $mahasiswa = mahasiswa::find($id);
         $mahasiswa->nama = $request->nama;
         $mahasiswa->NIM = $request->NIM;
         $mahasiswa->jenis_kelamin = $request->jenis_kelamin;
         $mahasiswa->id_dosen = $request->province;
         $mahasiswa->save();
         return redirect('/mahasiswa');
    }

  public function hapus($id)
{
    $mahasiswa = mahasiswa::find($id);
    $mahasiswa->delete();
    return redirect()->back();
}
}
