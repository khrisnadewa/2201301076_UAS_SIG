<h2>Tambah Rumah Sakit</h2>
<form action="/rumahsakit/store" method="post">
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" class="form-control">
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" id="alamat" name="alamat" class="form-control">
    </div>
    <div class="form-group">
        <label for="telepon">Telepon</label>
        <input type="text" id="telepon" name="telepon" class="form-control">
    </div> <div class="form-group">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="lat">Latitude</label>
        <input type="text" id="lat" name="lat" class="form-control">
    </div>   
    <div class="form-group">
        <label for="long">Longitude</label>
        <input type="text" id="long" name="long" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
