<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<button type="button" class="btn btn-success m-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Tambah Pengumuman Baru
</button>

<?php foreach ($data_pengumuman as $baris): ?>
<div class="card">
  <div class="mx-2">
    <?php echo $baris['tgl_pengumuman'] ?>
  </div>
    <div class="card-body">
        <h5 class="card-title"><?php echo $baris['judul'] ?></h5>
        <p class="card-text"><?php echo $baris['konten'] ?></p>
        <a href="#" class="card-link">selengkap nya...</a>
        <a href="<?= base_url('admin/pengumuman/hapus/'.$baris['id']) ?>" class="btn btn-danger float-end">hapus</a>
    </div>
</div>
<?php endforeach; ?>

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
          <input type="text" name="judul" id="judul" class="form-control" required>
        </div>
        <div class="row">
          <label for="konten">Konten:</label>
          <textarea name="konten" id="konten" class="form-control" required></textarea>
        </div>
        <div class="row">
          <label for="tgl_pengumuman">Tanggal Pengumuman:</label>
          <input type="date" name="tgl_pengumuman" id="tgl_pengumuman" class="form-control" value="<?= date('Y-m-d'); ?>" hidden>
          <input type="date" name="tgl_pengumuman" id="tgl_pengumuman" class="form-control" value="<?= date('Y-m-d'); ?>" disabled>
        </div>
            <input type="submit" value="Tambah" class="btn btn-success m-2">
        </form>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>