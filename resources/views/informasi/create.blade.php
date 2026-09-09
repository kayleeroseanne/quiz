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
    <form method="POST" action="{{ url('/simpan-informasi')}}">
        @csrf
        <table>

        <tr>
            <td>Kategori</td>
            <td>
                <select name="kategori_id">

                    <option value="">
                        Pilih Kategori
                    </option>

                    @foreach ($kategori as $k)
                        <option value="{{ $k->id }}">
                            {{ $k->nama }}
                        </option>
                    @endforeach

                </select>
            </td>
        </tr>

        <tr>
            <td>Judul</td>
            <td><input type="text" name="judul"/></td>
        </tr>
        <tr>
            <td>Ringkasan</td>
            <td><textarea name="ringkasan"></textarea></td>
        </tr>
        <tr>
            <td>Isi</td>
            <td><textarea name="isi"></textarea></td>
        </tr>
        <tr>
            <td>Sumber</td>
            <td> <input type="text" name="sumber"/></td>
        </tr>

        <tr>
            <td>Status</td>
            <td>
                <select name="status">
                    <option value="draft">
                        Draft
                    </option>

                    <option value="published">
                        Published
                    </option>
                </select>
            </td>
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