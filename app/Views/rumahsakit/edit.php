<h2>Edit Rumah Sakit</h2>
<form action="/rumahsakit/update/<?= $rumahsakit['id_rs'] ?>" method="post">
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" class="form-control" value="<?= $rumahsakit['nama'] ?>">
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" id="alamat" name="alamat" class="form-control"value="<?= $rumahsakit['alamat'] ?>>
    </div>
    <div class="form-group">
        <label for="telepon">Telepon</label>
        <input type="text" id="telepon" name="telepon" class="form-control"value="<?= $rumahsakit['telepon'] ?>>
    </div>
    <div class="form-group">
        <label for="email">email</label>
        <input type="text" id="email" name="email" class="form-control"value="<?= $rumahsakit['email'] ?>>
    </div>
    <div class="form-group">
        <label for="latitude">Latitude</label>
        <input type="text" id="lat" name="lat" class="form-control" value="<?= $rumahsakit['lat'] ?>">
    </div>
    <div class="form-group">
        <label for="longitude">Longitude</label>
        <input type="text" id="long" name="long" class="form-control" value="<?= $rumahsakit['long'] ?>">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
