<?= $this->extend('layout/page_layout') ?>

<?= $this->section('sidebar') ?>
  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="<?php echo base_url('/') ?>" class="nav-link">
          <i class="fas fa-circle nav-icon"></i>
          <p>Pengumuman</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo base_url('/matkul') ?>" class="nav-link">
          <i class="fas fa-circle nav-icon"></i>
          <p>Mata kuliah</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo base_url('/dosen') ?>" class="nav-link">
          <i class="fas fa-circle nav-icon"></i>
          <p>Dosen</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo base_url('/mahasiswa') ?>" class="nav-link">
          <i class="fas fa-circle nav-icon"></i>
          <p>Mahasiswa</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link active">
          <i class="fas fa-circle nav-icon"></i>
          <p>Rekap Nilai</p>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
<?= $this->endSection() ?>

<?= $this->section('headerKonten') ?>
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Mata kuliah</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Rekap Nilai</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<?= $this->endSection() ?>

<?= $this->section('content') ?>


<!-- Button tambah nilai rekap -->
<button type="button" class="btn btn-primary m-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Tambah Penilaian
</button>

<!-- tombol buat print data penilaian -->
<a href="#" class="btn btn-warning text-light">Print Data</a>

<!-- Modal tambah nilai rekap -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Buat Data Penilian Baru</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/rekap-nilai/tambah') ?>" method="post">
          <label for="">matakuliah</label>
          <input type="text" name="matakuliah" class="form-control">
          <label for="">nilai</label>
          <input type="text" name="nilai" class="form-control">
          <label for="">pertemuan</label>
          <input type="text" name="pertemuan" class="form-control">
          <label for="">jenis penilaian</label>
          <select name="jenis_penilaian" id="" class="form-select">
            <option selected>pilih jenis peniliaan</option>
            <option value="uts">uts</option>
            <option value="uas">uas</option>
            <option value="tugas">tugas</option>
          </select>
          <input type="submit" value="Tambah Data Baru" class="btn btn-info m-2">
        </form>
      </div>
    </div>
  </div>
</div>

<table id="Dtables" class="table table-striped" style="width:100%">
  <thead class="table-dark">
    <tr>
      <td>mata kuliah</td>
      <td>nilai</td>
      <td>pertemuan</td>
      <td>jenis penilaian</td>
      <td>Opsi</td>
    </tr>
  </thead>
  <tbody>
    <?php foreach($semua_nilai as $isi_baris): ?>
    <tr>
      <td><?php echo $isi_baris['matakuliah']; ?></td>
      <td><?php echo $isi_baris['nilai']; ?></td>
      <td><?php echo $isi_baris['pertemuan']; ?></td>
      <td><?php echo $isi_baris['jenis_penilaian']; ?></td>
      <td class="text-center">
        <!-- Button update nilai rekap -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?php echo $isi_baris['id']; ?>">
          update
        </button>

        <!-- Modal update nilai rekap -->
        <div class="modal fade" id="<?php echo $isi_baris['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">perbaharui data rekap nilai</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="<?= base_url('admin/rekap-nilai/update/'.$isi_baris['id']) ?>" method="post">
                  <label for="" class="float-start">matakuliah</label>
                  <input type="text" name="matakuliah" class="form-control" value="<?php echo $isi_baris['matakuliah']; ?>">
                  <label for="" class="float-start">nilai</label>
                  <input type="text" name="nilai" class="form-control" value="<?php echo $isi_baris['nilai']; ?>">
                  <label for="" class="float-start">pertemuan</label>
                  <input type="number" name="pertemuan" class="form-control" value="<?php echo $isi_baris['pertemuan']; ?>">
                  <label for="" class="float-start">jenis penilaian</label>
                  <select name="jenis_penilaian" id="" class="form-select">
                    <option selected><?php echo $isi_baris['jenis_penilaian']; ?></option>
                    <option value="uts">uts</option>
                    <option value="uas">uas</option>
                    <option value="tugas">tugas</option>
                  </select>
                  <input type="submit" value="ubah data nilai" class="btn btn-info m-2 float-end">
                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- hapus rekap nilai -->
        <a href="<?= base_url('admin/rekap-nilai/hapus/'.$isi_baris['id']) ?>" class="btn btn-danger">hapus</a>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
<?= $this->endSection() ?>