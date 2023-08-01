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
<table id="Dtables" class="table table-striped" style="width:100%">
  <thead class="table-dark">
    <tr>
      <td>mata kuliah</td>
      <td>nilai</td>
      <td>pertemuan</td>
      <td>jenis penilaian</td>
    </tr>
  </thead>
  <tbody>
    <?php foreach($semua_nilai as $isi_baris): ?>
    <tr>
      <td><?php echo $isi_baris['matakuliah']; ?></td>
      <td><?php echo $isi_baris['nilai']; ?></td>
      <td><?php echo $isi_baris['pertemuan']; ?></td>
      <td><?php echo $isi_baris['jenis_penilaian']; ?></td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
<?= $this->endSection() ?>