<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tasking create</title>
</head>
<body>
    <form method="post" action="{{url('/tasking')}}">
        @csrf
        <div>
            <span>Tugas</span>
            <input type="text" name="tugas">
        </div>
        <div>
            <span>Tanggal</span>
            <input type="text" name="tanggal">
        </div>
        <div>
            <span>PIC</span>
            <input type="text" name="pic">
        </div>
        <div>
            <span>Status</span>
            <input type="text" name="status">
        </div>
        <div><button type="submit">Simpan</button> </div>
    </form>
</body>
</html>
