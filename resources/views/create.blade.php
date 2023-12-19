<form border="2" action="{{ route('Admin.store') }}" method="post" enctype="multipart/form-data" style="display: flex; flex-direction: column;">
    @csrf
    <div class="form-group">
        <label for="photo">Gambar</label>
        <input type="file" name="photo" style="margin-left: 1.66vw">
    </div>

    <div class="form-group">
        <label for="name">Nama</label>
        <input type="text" name="name" style="margin-left: 2.6vw">
    </div>

    <div class="form-group">
        <label for="price">Harga</label>
        <input type="number" name="price" style="margin-left: 2.6vw">
    </div>

    <div class="form-group">
        <label for="desc">Deskripsi</label>
        <textarea name="desc" id="desc" cols="30" rows="10" style="margin-left: 1vw"></textarea>
    </div>
    <input type="submit" value="submit">
</form>

<style>
    .form-group {
        display: block;
    }
</style>