<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section>
        <table border="1">
            <thead>
                <th>Foto</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Desc</th>
                <th>Kurir</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                <td>
                    <img src="{{ Storage::url($Market->photo) }}" alt="" style="width: 8vw;" @readonly(true)>
                </td>
                <td>
                    <input type="text" name="name" id="name" value="{{ $Market->name }}" readonly>
                </td>
                <td>
                    <input type="text" name="price" id="price" value="{{ $Market->price }}" readonly>
                </td>
                <td>
                    <input type="text" name="desc" id="desc" value="{{ $Market->desc }}" readonly>
                </td>
                <td>
                    <select name="shipping_id" id="shipping_id">
                        @foreach ($Shipments as $Shipment)
                            <option value="{{ $Shipment->id }}">{{ $Shipment->name }}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <a href="">Selesaikan checout</a>
                </td>
            </tbody>
        </table>
    </section>
</body>
</html>