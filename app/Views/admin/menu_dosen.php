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
        <a href="#" class="nav-link active">
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
        <h1 class="m-0">Dosen</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dosen</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Button tambah dosen -->
<button type="button" class="btn btn-success m-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
  tambah dosen
</button>

<table id="Dtables" class="display" style="width:100%">
    <thead class="table-dark">
        <tr>
            <th>nama</th>
            <th>gelar</th>
            <th>kd dosen</th>
            <th>kd matkul</th>
            <th class="text-center">Opsi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($semua_dosen as $semDos): ?>
        <tr>
            <td><?php echo $semDos['nama_dosen']; ?></td>
            <td><?php echo $semDos['gelar']; ?></td>
            <td><?php echo $semDos['kd_dosen']; ?></td>
            <td><?php echo $semDos['kd_matkul']; ?></td>
            <td class="text-center">
              <!-- Button Update Dosen -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?php echo $semDos['id']; ?>">
                update
              </button>
              <!-- Modal -->
              <div class="modal fade" id="<?php echo $semDos['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">ubah data dosen</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="" method="post">
                        <label class="float-start">nama dosen</label>
                        <input type="text" class="form-control" name="nama_dosen" value="<?php echo $semDos['nama_dosen']; ?>">
                        <label class="float-start">gelar dosen</label>
                        <input type="text" class="form-control" name="gelar" value="<?php echo $semDos['gelar']; ?>">
                        <label class="float-start">kode dosen</label>
                        <input type="text" class="form-control" name="kd_dosen" value="<?php echo $semDos['kd_dosen']; ?>" hidden>
                        <input type="text" class="form-control" name="kd_dosen" value="<?php echo $semDos['kd_dosen']; ?>" disabled >
                        <label class="float-start">kode matakuliah</label>
                        <input type="text" class="form-control" name="kd_matkul" value="<?php echo $semDos['kd_matkul']; ?>">
                        <input type="submit" class="btn btn-success m-2 float-end" value="simpan perubahan">
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- hapus data dosen -->
              <a class="btn btn-danger m-1">hapus</a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

<!-- Modal tambah data dosen -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Dosen Baru</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/dosen/tambah') ?>" method="post">
          <label for="">Nama Dosen</label>
          <input type="text" class="form-control" name="nama_dosen" placeholder="masukan nama dosen" required>
          <label for="">Gelar</label>
          <input type="text" class="form-control" name="gelar" placeholder="gelar dosen .phd .m.kom s.pd dll" required>
          <label for="">Kode Dosen</label>
          <input type="text" class="form-control" name="kd_dosen" placeholder="D001 dst" required>
          <label for="">Kode Matkul</label>
          <select class="form-select" name="kd_matkul">
            <?php foreach($semua_matkul as $semMk): ?>
            <option value="<?php echo $semMk['kd_matkul']; ?>"><?php echo $semMk['nama_matkul']; ?></option>
            <?php endforeach ?>
          </select>
          <input type="submit" class="btn btn-info m-2 float-end" value="simpan data">
        </form>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>