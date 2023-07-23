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
        <a href="#" class="nav-link active">
          <i class="fas fa-circle nav-icon"></i>
          <p>Mata kuliah</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="fas fa-circle nav-icon"></i>
          <p>Dosen</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="fas fa-circle nav-icon"></i>
          <p>Mahasiswa</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
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
          <li class="breadcrumb-item active">Matakuliah</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Button modal nambah matkul -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Tambah Mata Kuliah Baru
</button>

<!-- Modal tambah matkul -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah data matkul baru</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/matkul/tambah') ?>" method="post">
          <label>Nama Matakuliah</label>
          <input type="text" class="form-control m-1" name="nama_matkul" placeholder="nama mata kuliah">
          <label>Kode Matakuliah</label>
          <input type="text" class="form-control m-1" name="kd_matkul" placeholder="MK001">
          <input type="submit" class="btn btn-success m-2 float-end" value="Simpan Data">
        </form>
      </div>
    </div>
  </div>
</div>

<table class="table m-2">
  <thead class="table-dark">
    <tr>
      <th scope="col">Nama Matakuliah</th>
      <th scope="col">Kd Matkul</th>
      <th scope="col" colspan="2" class="text-center">opsi</th>
    </tr>
  </thead>
  <?php foreach($semua_matkul as $matakuliah): ?>
  <tbody>
   <tr>
      <td><?php echo $matakuliah['nama_matkul']; ?></td>
      <td><?php echo $matakuliah['kd_matkul'] ?></td>
      <td>
          <!-- update data -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?php echo $matakuliah['id']; ?>">
            update
          </button>
          <div class="modal fade" id="<?php echo $matakuliah['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Update Matakuliah</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="<?= base_url('admin/matkul/update/'.$matakuliah['id']) ?>" method="post">
                    <label for="">Nama matakuliah</label>
                    <input type="text" class="form-control" name="nama_matkul" value="<?php echo $matakuliah['nama_matkul']; ?>">
                    <label for="">kd matkul</label>
                    <input type="text" class="form-control" name="kd_matkul" value="<?php echo $matakuliah['kd_matkul']; ?>" hidden>
                    <input type="text" class="form-control" name="kd_matkul" value="<?php echo $matakuliah['kd_matkul']; ?>" disabled>
                    <input type="submit" class="btn btn-success m-2 float-end" value="ubah data">
                  </form>
                </div>
              </div>
            </div>
          </div>
      </td>
      <td>
        <!-- delete data -->
        <a href="<?= base_url('admin/matkul/hapus/'.$matakuliah['id']) ?>" class="btn btn-danger">delete</a>
      </td>
    </tr>
  </tbody>
  <?php endforeach ?>
</table>
<?= $this->endSection() ?>