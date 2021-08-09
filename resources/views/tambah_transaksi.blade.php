<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('add_transaksi')}} " method="post">
        @csrf
        <table>
            <tr>
                <td>Pilih Kategori</td>
                <td>
                    <select name="kategori" id="kategori">
                        @foreach ($data as $kategori)
                            <option value="{{$kategori->id}}">{{$kategori->category_name}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><input type="text" name="description"></td>
            </tr>
            <tr>
                <td>Nominal</td>
                <td><input type="text" name="nominal"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Tambah"></td>
            </tr>
        </table>
    </form>
    <br>
    <a href="{{url('/')}}"><input type="button" value="Home"></a>
</body>
</html>
