<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
Transaksi : {{Auth::user()->name}}
    <table border="1">
        <tr>
            <td>No.</td>
            <td>Nama Transaksi</td>
            <td>Tipe Transaksi</td>
            <td>Nominal</td>
        </tr>
        @php
            $total = 0;
        @endphp
        @foreach ($data as $transaksi)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$transaksi->category->category_name}} </td>
            <td>{{$transaksi->category->type}} </td>
            <td>{{$transaksi->description}}</td>
            <td>{{$transaksi->nominal}} </td>
            @if ($transaksi->category->type == 1)
                @php
                    $total = $total + $transaksi->nominal;
                @endphp
            @elseif ($transaksi->category->type == 2)
                @php
                    $total = $total - $transaksi->nominal;
                @endphp
            @endif
        </tr>
        @endforeach
        <tr>
            <td colspan="3">Sisa</td>
            <td>{{$total}}</td>
        </tr>
    </table>
    <a href="{{route('form_transaksi')}}"><input type="button" value="Tambah Transaksi"></a>
    <br>
    <a href="{{url('/')}}"><input type="button" value="Home"></a>
</body>
</html>
