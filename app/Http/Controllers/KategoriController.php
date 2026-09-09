<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use DB;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function tampil()
    {
        $kategoris = Kategori::all();
        return view('kategori.daftar', 
        ['kategoris' => $kategoris]); 
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function simpan(Request $request)
    {
        $request->validate([
        'nama' => ['required', 'regex:/^[a-zA-Z\s]+$/']
        ]);
        
        try { 
            $kategori = new Kategori(); 
            $kategori->nama = $request->get('nama'); 
            $kategori->save(); return redirect('daftar-kategori') ->with('success', 'Kategori berhasil disimpan!'); 
            } 
        catch (\Exception $e) { return redirect('daftar-kategori') ->with('error', 'Kategori gagal disimpan!'); 
        }
    }

    public function hapus(Kategori $kategori)
    {
        try { 
            $kategori->delete(); return redirect('daftar-kategori') ->with('success', 'Kategori berhasil dihapus!'); 
            } 
        catch (\Exception $e) { return redirect('daftar-kategori') ->with('error', 'Kategori gagal dihapus!'); 
        }
    }

    public function ubah(Kategori $kategori)
    {
        return view('kategori.ubah', ['kategori'=>$kategori]);
    }

    public function update(Request $request)
    {
     

         $request->validate([
        'nama' => ['required', 'regex:/^[a-zA-Z\s]+$/'],
        ]);

        try { 
            $kategori = Kategori::find($request->get('id')); 
            if (!$kategori) { return redirect('daftar-kategori') ->with('error', 'Kategori tidak ditemukan!'); } 
            $kategori->save(); return redirect('daftar-kategori') ->with('success', 'Kategori berhasil diperbarui!'); 
            } 
        catch (\Exception $e) { return redirect('daftar-kategori') ->with('error', 'Kategori gagal diperbarui!');
         } 
        }
    
}
