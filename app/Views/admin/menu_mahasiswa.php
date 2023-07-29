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
        <a href="#" class="nav-link active">
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
        <h1 class="m-0">Mahasiswa</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Mahasiswa</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-success m-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
  tambah mahasiswa
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">tambah mahasiswa baru</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post" enctype="multipart/form-data">
          <label for="">nim</label>
          <input type="text" class="form-control" name="nim">
          <label for="">nama mahaiswa</label>
          <input type="text" class="form-control" name="nama_mahasiswa">
          <label for="">jurusan</label>
          <input type="text" class="form-control" name="jurusan">
          <label for="">pas foto</label>
          <input type="text" class="form-control" name="pas_foto">
          <input type="submit" class="btn btn-info float-end m-2">
        </form>
      </div>
    </div>
  </div>
</div>

<table id="Dtables" class="table table-striped" style="width:100%">
  <thead class="table-dark">
    <tr>
      <td>nim</td>
      <td>nama mahasiswa</td>
      <td>jurusan</td>
      <td>pas foto</td>
      <td>opsi</td>
    </tr>
  </thead>
  <tbody>
    <?php foreach($semua_mahasiswa as $mhs):  ?>
    <tr>
      <td><?php echo $mhs['nim'] ?></td>
      <td><?php echo $mhs['nama_mahasiswa'] ?></td>
      <td><?php echo $mhs['jurusan'] ?></td>
      <td><?php echo $mhs['pas_foto'] ?></td>
      <td>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?php echo $mhs['id'] ?>">
          ubah
        </button>
        <!-- Modal -->
        <div class="modal fade" id="<?php echo $mhs['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">ubah mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="<?= base_url('admin/mahasiswa/update/'.$mhs['id']) ?>" method="post" enctype="multipart/form-data">
                  <label>nim</label>
                  <input type="number" class="form-control" name="nim" value="<?php echo $mhs['nim'] ?>">
                  <label>nama mahasiswa</label>
                  <input type="text" class="form-control" name="nama_mahasiswa" value="<?php echo $mhs['nama_mahasiswa'] ?>">
                  <label>jurusan</label>
                  <input type="text" class="form-control" name="jurusan" value="<?php echo $mhs['jurusan'] ?>">
                  <label>pas foto</label>
                  <input type="text" class="form-control" name="pas_foto" value="<?php echo $mhs['pas_foto'] ?>">
                  <input type="submit" class="btn btn-info float-end m-2" value="simpan perubahan">
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- tombol hapus mahasiswa -->
        <a class="btn btn-danger" href="<?= base_url('admin/mahasiswa/hapus/'.$mhs['id']) ?>">hapus</a>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
<?= $this->endSection() ?>