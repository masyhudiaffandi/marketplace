@if (Auth::user() && Auth::user()->role == 'Admin')
<div class="add-product" style="position: fixed; top: 0; right: 0; background-color: white;">
    <a href="{{ route('Admin.create') }}">Tambahkan Produk</a>
</div>

<table border="4" class="ml-8 border-collapse border rounded-lg overflow-hidden">
    <thead>
        <tr>
            <th class="p-3 bg-gray-300">Gambar</th>
            <th class="p-3 bg-gray-300">Nama</th>
            <th class="p-3 bg-gray-300">Harga</th>
            <th class="p-3 bg-gray-300">Deskripsi</th>
            <th class="p-3 bg-gray-300">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Markets as $Market)
        <tr>
            <td class="p-3">
                <img src="{{ Storage::url($Market->photo) }}" alt="{{ $Market->name }}">
            </td>
            <td class="p-3">{{ $Market->name }}</td>
            <td class="p-3">{{ $Market->price }}</td>
            <td class="p-3">{{ $Market->desc }}</td>
            <td class="p-3">
                <button class="bg-green-500 text-white px-4 py-2 rounded">
                    <a href="{{ route('Admin.edit', $Market->id) }}">Edit</a>
                </button>
                <form action="{{ route('Admin.destroy', $Market->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" name="submit" id="submit" value="hapus">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  <style>
        .p-3 img{
            width: 8vw;
        }
  </style>
@endif