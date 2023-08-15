<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan</title>
</head>
<body>
  Tes tasking

  <div><a href="/tasking/create">Tambah Task</a></div>
<table>
    <tr>
        <th>Tugas</th>
        <th>Tanggal</th>
        <th>PIC</th>
        <th>Status</th>
    </tr>
    <tbody>
        @foreach ($list_tasking as $tasking )
        <tr>
            <td>{{$tasking->tugas}}</td>
            <td>{{$tasking->tanggal}}</td>
            <td>{{$tasking->pic}}</td>
            <td>{{$tasking->status}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
