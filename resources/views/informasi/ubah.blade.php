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
    
    <form method="POST" action="{{ url('/update-informasi') }}">
    @csrf
    @method('PUT')

    <input type="hidden" name="id" value="{{ $informasi->id }}"/>

    <table>
        <tr>
            <td>Kategori</td>
            <td>
                <select name="kategori_id">
                    @foreach ($kategori as $k)
                        <option 
                            value="{{ $k->id }}"
                            {{ $informasi->kategori_id == $k->id ? 'selected' : '' }}>
                            {{ $k->nama }}
                        </option>
                    @endforeach
                </select>
            </td>
        </tr>

        <tr>
            <td>Judul</td>
            <td>
                <input type="text" name="judul" value="{{ $informasi->judul }}"/>
            </td>
        </tr>

        <tr>
            <td>Ringkasan</td>
            <td>
                <textarea name="ringkasan">{{ $informasi->ringkasan }}</textarea>
            </td>
        </tr>

        <tr>
            <td>Isi</td>
            <td>
                <textarea name="isi">{{ $informasi->isi }}</textarea>
            </td>
        </tr>

        <tr>
            <td>Sumber</td>
            <td>
                <input type="text" name="sumber" value="{{ $informasi->sumber }}"/>
            </td>
        </tr>

        <tr>
            <td>Status</td>
            <td>
                <select name="status">
                    <option value="draft"
                        {{ $informasi->status == 'draft' ? 'selected' : '' }}>
                        Draft
                    </option>

                    <option 
                        value="published"
                        {{ $informasi->status == 'published' ? 'selected' : '' }}>
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