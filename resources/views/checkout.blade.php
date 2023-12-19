<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($Markets as $Market)
        <section>
            <table border="1">
                <thead>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Desc</th>
                </thead>
            </table>
            <input type="text" name="name" id="name" value="{{ $Market->name }}" readonly>
        </section>
    @endforeach
</body>
</html>