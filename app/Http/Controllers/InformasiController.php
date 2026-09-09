<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Informasi;
use App\Models\Kategori;

class InformasiController extends Controller
{
    public function tampil()
    {
        $informasis = Informasi::all();
        return view('informasi.daftar', 
        ['informasi' => $informasis]); 
    }

    public function create()
    {
        $kategori = Kategori::all();

        return view('informasi.create', [
            'kategori' => $kategori
        ]);
    }

    public function simpan(Request $request)
    {
        $informasi = new Informasi();
        $informasi->kategori_id = $request->get('kategori_id');
        $informasi->judul = $request->get('judul');
        $informasi->ringkasan = $request->get('ringkasan');
        $informasi->isi = $request->get('isi');
        $informasi->sumber = $request->get('sumber');
        $informasi->status = $request->get('status');
        $informasi->save();

        return redirect('daftar-informasi') ->with('success', 'Informasi berhasil disimpan!');
        
     
            $informasi = new Informasi(); 
            $kategori->nama = $request->get('nama'); 
            $informasi->save(); return redirect('daftar-informasi') ->with('success', 'Informasi berhasil disimpan!'); 
            
         return redirect('daftar-informasi') ->with('error', 'Informasi gagal disimpan!'); 
        
    }

    public function hapus(Informasi $informasi)
    {
        
        try { 
            $informasi->delete(); return redirect('daftar-informasi') ->with('success', 'Informasi berhasil dihapus!'); 
            } 
        catch (\Exception $e) { return redirect('daftar-informasi') ->with('error', 'Informasi gagal dihapus!'); 
        }
    }

    public function ubah(Informasi $informasi)
    {
        $kategori = Kategori::all();

        return view('informasi.ubah', [
            'informasi' => $informasi,
            'kategori' => $kategori
        ]);
    }

    public function update(Request $request)
    {
        
        $informasi = Informasi::find($request->get('id'));
        $informasi->kategori_id = $request->get('kategori_id');
        $informasi->judul = $request->get('judul');
        $informasi->ringkasan = $request->get('ringkasan');
        $informasi->isi = $request->get('isi');
        $informasi->sumber = $request->get('sumber');
        $informasi->status = $request->get('status');

        $informasi->save();

        return redirect('daftar-informasi')->with('success', 'Informasi berhasil disimpan!');
         } 

    public function show(Informasi $informasi)
    {
        return view('informasi.show', [
            'informasi' => $informasi
        ]);
    }
        
}