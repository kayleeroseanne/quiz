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

    <a href="{{ url('/tambah-informasi') }}">
        Tambah Kategori
    </a>
    <br></br>
    <table border="1">
    <tr>
        <th>Judul</th>
        <th>Ringkasan</th>
        <th>Isi</th>
        <th>Sumber</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
    @foreach ($informasis as $data)
    <tr>
        <td>{{ $data->judul }} </td>
        <td> {{ $data->ringkasan }} </td>
        <td>{{ $data->isi }} </td>
        <td>{{ $data->sumber }}</td>
        <td>{{ $data->status }} </td>
        <td>
            <form
                method="POST"
                action="{{ route('informasi.hapus', $data) }}"
                onsubmit="return confirm('Apakah Anda yakin ingin menghapus informasi {{ $data->judul }}?');">
                @method('DELETE')
                @csrf
                <input type="submit" value="Hapus"/>
            </form>
            <a href="{{ route('informasi.ubah', $data) }}">
                [UBAH]
            </a>
        </td>
    </tr>
    @endforeach

</table>
</body>
</html>