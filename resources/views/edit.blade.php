{{-- @foreach ($Markets as $Market) --}}
{{-- {{ dd($Market) }}   --}}

<form border="2" action="{{ route('Admin.update', $Market->id) }}" method="post" enctype="multipart/form-data" style="display: flex; flex-direction: column;">
    @csrf
    @method('put')
    <td class="p-3">
        <img src="{{ Storage::url($Market->photo) }}" alt="{{ $Market->name }}" style="width: 8vw">
    </td>
    <div class="form-group">
        <label for="photo">Gambar</label>
        <input type="file" name="photo">
    </div>

    <div class="form-group">
        <label for="name">Nama</label>
        <input type="text" name="name" value="{{ $Market->name }}">
    </div>

    <div class="form-group">
        <label for="price">Harga</label>
        <input type="number" name="price" value="{{ $Market->price }}">
    </div>

    <div class="form-group">
        <label for="desc">Deskripsi</label>
        <input type="textarea" name="desc" value="{{ $Market->desc }}">    
    </div>
    <input type="submit" value="submit">
</form>

<style>
    .form-group {
        display: block;
    }
</style>
{{-- @endforeach --}}