<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use DB;
use App\Models\Informasi;
use App\Models\Kategori;

class InformasiController extends Controller
{
    public function tampil()
    {
        $informasis = Informasi::all();
        return view('informasi.daftar', 
        ['informasis' => $informasis]); 
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
        $request->validate([
        'nama' => ['required']
        ]);
        
        $informasi = new Informasi();
        $informasi->kategori_id = $request->get('kategori_id');
        $informasi->judul = $request->get('judul');
        $informasi->ringkasan = $request->get('ringkasan');
        $informasi->isi = $request->get('isi');
        $informasi->sumber = $request->get('sumber');
        $informasi->status = $request->get('status'); 
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
        return view('informasi.ubah', ['informasi'=>$informasi]);
    }

    public function update(Request $request)
    {
     

         $request->validate([
        'nama' => ['required'],
        ]);

        try { 
            $informasi = Informasi::find($request->get('id')); 
            if (!$informasi) { return redirect('daftar-informasi') ->with('error', 'Informasi tidak ditemukan!'); } 
            $informasi->save(); return redirect('daftar-informasi') ->with('success', 'Informasi berhasil diperbarui!'); 
            } 
        catch (\Exception $e) { return redirect('daftar-informasi') ->with('error', 'Informasi gagal diperbarui!');
         } 
        }
    
}