<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<button type="button" class="btn btn-success m-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Tambah Pengumuman Baru
</button>

<?php foreach ($data_pengumuman as $baris): ?>
<div class="card p-2">
  <span class="badge text-bg-info" style="width: 100px;">
    <?php echo $baris['tgl_pengumuman'] ?>
  </span>
    <div class="card-body">
        <h5 class="card-title"><?php echo $baris['judul'] ?></h5>
        <p class="card-text"><?= substr($baris['konten'], 0, 260) ?></p>
        <!-- Button update pengumuman -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?php echo $baris['id'] ?>">
          Update Pengumuman
        </button>
        <a href="#" class="card-link mx-4">selengkap nya...</a>
        <a href="<?= base_url('admin/pengumuman/hapus/'.$baris['id']) ?>" class="btn btn-danger float-end">hapus</a>
    </div>
</div>

<!-- Modal update pengumuman -->
<div class="modal fade" id="<?php echo $baris['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo $baris['judul'] ?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url('admin/pengumuman/update/'.$baris['id']) ?>">
          <input type="text" name="judul" class="form-control m-2" value="<?php echo $baris['judul'] ?>">
          <input type="date" name="tgl_pengumuman" id="tgl_pengumuman" class="form-control m-2" value="<?php echo $baris['tgl_pengumuman'] ?>">
          <textarea name="konten" id="editor" class="form-control m-2" cols="30" rows="10"><?php echo $baris['konten'] ?></textarea>
          <input type="submit" value="simpan perubahan" class="btn btn-info m-2">
        </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
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