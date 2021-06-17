<!DOCTYPE html>
<html lang="en">
<head><form>
 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Percobaaan</title>
</head>
@csrf
<body>
    <table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Nama</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($data as $baris)
    <tr>
        <td>{{$baris->id}}</td>
        <td>{{$baris->nama}}</td>
    </tr>
    @endforeach
    </tbody>
    </table>
</body>
</html>