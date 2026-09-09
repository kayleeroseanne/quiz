<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if ($errors->any())
    @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
    @endif
    
    <form method="POST" action="{{ url('/update-kategori')}}">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $kategori->id }}"/>
        <table>
            <tr>
                <td>Nama</td>
                <td> <input type="text" name="nama" value="{{ $kategori->nama}}"/></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Simpan"/>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>