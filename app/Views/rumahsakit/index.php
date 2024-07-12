
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <h2>Data Rumah Sakit</h2>
      <a href="/rumahsakit/create" class="btn btn-primary mb-3">Tambah Rumah Sakit</a>
      <table class="table">
        <thead>
          <tr>
            <th>Nama</th>
            <th>alamat</th>
            <th>telepon</th>
            <th>email</th>
            <th>Latitude</th>
            <th>Longitude</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($rumahsakit as $rs): ?>
          <tr>
            <td><?= $rs['nama'] ?></td>
            <td><?= $rs['alamat'] ?></td>
            <td><?= $rs['telepon'] ?></td>
            <td><?= $rs['email'] ?></td>
            <td><?= $rs['lat'] ?></td>
            <td><?= $rs['long'] ?></td>
            <td>
              <a href="/rumahsakit/edit/<?= $rs['id_rs'] ?>" class="btn btn-warning">Edit</a>
              <a href="/rumahsakit/delete/<?= $rs['id_rs'] ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin?')">Hapus</a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
