<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/coba" method="POST">
        @csrf
        <input type="text" placeholder="nama" name="nama">
        <input type="text" placeholder="pesan" name="pesan">

        <button type="submit">submit</button>
    </form>

    <table>
        <tr>
            <th>nama</th>
            <th>pesan</th>
        </tr>
        @foreach ($listPesan as $p )
        <tr>
            <td> {{ $p->nama }} </td>
            <td> {{ $p->pesan }} </td>
        
        </tr>
        @endforeach
    </table>
</body>
</html>