<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Kategori : {{Auth::user()->name}}
    <table border="1">
        <tr>
            <td>No.</td>
            <td>Nama Kategori</td>
            <td>Tipe Kategori</td>
        </tr>
        @foreach ($data as $kategori)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$kategori->category_name}} </td>
            <td>{{$kategori->type}} </td>
        </tr>
        @endforeach
    </table>
    <a href="{{url('/kategori/form')}}"><input type="button" value="Tambah Kategori"></a>
    <br>
    <a href="{{url('/')}}"><input type="button" value="Home"></a>
</body>
</html>
