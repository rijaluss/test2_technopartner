<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('add_kategori')}} " method="post">
        @csrf
        <table>
            <tr>
                <td>Nama Kategori</td>
                <td><input type="text" name="kategori"></td>
            </tr>
            <tr>
                <td>Tipe Kategori</td>
                <td>
                    <select name="tipe" id="tipe">
                        <option value="1">Pemasukan</option>
                        <option value="2">Pengeluaran</option>
                    </select>
                </td>
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
