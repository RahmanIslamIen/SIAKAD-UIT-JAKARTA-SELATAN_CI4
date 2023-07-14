<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<button type="button" class="btn btn-success m-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Tambah Pengumuman Baru
</button>

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the 
            card's content.</p>
        <a href="#" class="card-link">selengkap nya...</a>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Pengumuman</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url('admin/pengumuman/tambah') ?>">
        <div class="row">
          <label for="judul">Judul:</label>
          <input type="text" name="judul" id="judul" required>
        </div>
        <div class="row">
          <label for="konten">Konten:</label>
          <textarea name="konten" id="konten" required></textarea>
        </div>
        <div class="row">
          <label for="tgl_pengumuman">Tanggal Pengumuman:</label>
          <input type="date" name="tgl_pengumuman" id="tgl_pengumuman" required>
        </div>
            <input type="submit" value="Tambah" class="btn btn-success m-2">
        </form>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>