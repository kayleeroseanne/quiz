<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   @if(session('success')) <script> alert("{{ session('success') }}"); </script> 
   @endif 
   @if(session('error')) <script> alert("{{ session('error') }}"); </script> 
   @endif

    <a href="{{ url('/tambah-kategori') }}">
        Tambah Kategori
    </a>
    <br></br>
    <table border="1"> 
        <tr>
            <th>Nama</th>
        </tr>
        @foreach ($kategoris as $kategori)
        <tr>
            <td>{{$kategori->nama }}</td>
            <td>
                <!-- <form method="POST" action="{{ route('kategori.hapus', $kategori)}}">
                    @method('DELETE')
                    @csrf 
                    <input type="submit" value="Hapus"/>
                </form> -->
                <form method="POST" action="{{ route('kategori.hapus', $kategori) }}" 
                onsubmit="return confirm('Apakah Anda yakin ingin menghapus kategori {{ $kategori->nama }}?');"> 
                @method('DELETE') @csrf <input type="submit" value="Hapus"/> </form>
                <a href="{{ route('kategori.ubah', $kategori)}}">[UBAH]</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>