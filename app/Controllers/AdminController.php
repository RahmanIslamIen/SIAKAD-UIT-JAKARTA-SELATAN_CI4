<?php

namespace App\Controllers;
use App\Models\PengumumanModel;
use App\Models\MatakuliahModel;
use App\Models\DosenModel;
use App\Models\MahasiswaModel;

class AdminController extends BaseController
{
    //* bagian section pengumuman semuanya di handle di sini 
    public function index()
    {
        $model = new PengumumanModel;
        $data['data_pengumuman'] = $model->findAll();
        return view('admin/menu_pengumuman', $data);
    }

    public function tambahPengumuman()
    {
        $judul = $this->request->getPost('judul');
        $konten = $this->request->getPost('konten');
        $tgl_pengumuman = $this->request->getPost('tgl_pengumuman');

        $model = new PengumumanModel();
        $data = [
            'judul' => $judul,
            'konten' => $konten,
            'tgl_pengumuman' => $tgl_pengumuman
        ];
        $model->insert($data);
        return redirect()->back();
    }

    public function updatePengumuman($id)
    {
        $judul = $this->request->getPost('judul');
        $konten = $this->request->getPost('konten');
        $tgl_pengumuman = $this->request->getPost('tgl_pengumuman');

        $model = new PengumumanModel();
        $data = [
            'judul' => $judul,
            'konten' => $konten,
            'tgl_pengumuman' => $tgl_pengumuman
        ];
        $model->update($id, $data);
        return redirect()->back();
    }

    public function hapusPengumuman($id){
        $model = new PengumumanModel;
        $model->delete($id);
        return redirect()->back();
    }

    //* bagian section matakuliah semua nya di handle di sini
    public function semuaMatkul(){
        $model = new MatakuliahModel;

        $data['semua_matkul'] = $model->findAll();
        return view('admin/menu_matkul', $data);
    }
    
    public function tambahMatkul(){
        $nama_matkul = $this->request->getPost('nama_matkul');
        $kd_matkul = $this->request->getPost('kd_matkul');

        $model = new MatakuliahModel();
        $data = [
            'nama_matkul' => $nama_matkul,
            'kd_matkul' => $kd_matkul,
        ];
        $model->insert($data);
        return redirect()->back();
    }

    public function updateMatkul($id)
    {
        $nama_matkul = $this->request->getPost('nama_matkul');
        $kd_matkul = $this->request->getPost('kd_matkul');

        $model = new MatakuliahModel();
        $data = [
            'nama_matkul' => $nama_matkul,
            'kd_matkul' => $kd_matkul
        ];
        $model->update($id, $data);
        return redirect()->back();
    }

    public function hapusMatkul($id){
        $model = new MatakuliahModel;
        $model->delete($id);
        return redirect()->back();
    }
    
    //* bagian menu dosen untuk mengatur semua data dosen
    public function semuaDosen(){
        $model = new DosenModel;
        $data['semua_dosen'] = $model->findAll();

        $matkul = new MatakuliahModel;
        $data['semua_matkul'] = $matkul->findAll();

        return view('admin/menu_dosen', $data);
    }

    public function tambahDosen(){
        $nama_dosen = $this->request->getPost('nama_dosen');
        $gelar = $this->request->getPost('gelar');
        $kd_dosen = $this->request->getPost('kd_dosen');
        $kd_matkul = $this->request->getPost('kd_matkul');

        $model = new DosenModel();
        $data = [
            'nama_dosen' => $nama_dosen,
            'gelar' => $gelar,
            'kd_dosen' => $kd_dosen,
            'kd_matkul' => $kd_matkul,
        ];
        $model->insert($data);
        return redirect()->back();
    }

    public function updateDosen($id)
    {
        $nama_dosen = $this->request->getPost('nama_dosen');
        $gelar = $this->request->getPost('gelar');
        $kd_dosen = $this->request->getPost('kd_dosen');
        $kd_matkul = $this->request->getPost('kd_matkul');

        $model = new DosenModel();
        $data = [
            'nama_dosen' => $nama_dosen,
            'gelar' => $gelar,
            'kd_dosen' => $kd_dosen,
            'kd_matkul' => $kd_matkul
        ];
        $model->update($id, $data);
        return redirect()->back();
    }

    public function hapusDosen($id){
        $model = new DosenModel;
        $model->delete($id);
        return redirect()->back();
    }


    //* bagian menu mahasiswa
    public function semuaMahasiswa(){
        $model = new MahasiswaModel;
        $data['semua_mahasiswa'] = $model->findAll();
        return view('admin/menu_mahasiswa', $data);
    }

    public function tambahMahasiswa(){
        $nim = $this->request->getPost('nim');
        $nama_mahasiswa = $this->request->getPost('nama_mahasiswa');
        $jurusan = $this->request->getPost('jurusan');
        $pas_foto = $this->request->getPost('pas_foto');

        $model = new MahasiswaModel;

        $data = [
            'nim' => $nim,
            'nama_mahasiswa' => $nama_mahasiswa,
            'jurusan' => $jurusan,
            'pas_foto' => $pas_foto
        ];

        $model->insert($data);
        return redirect()->back();
    }

    public function updateMahasiswa($id){
        $nim = $this->request->getPost('nim');
        $nama_mahasiswa = $this->request->getPost('nama_mahasiswa');
        $jurusan = $this->request->getPost('jurusan');
        $pas_foto = $this->request->getPost('pas_foto');

        $model = new MahasiswaModel;

        $data = [
            'nim' => $nim,
            'nama_mahasiswa' => $nama_mahasiswa,
            'jurusan' => $jurusan,
            'pas_foto' => $pas_foto
        ];

        $model->update($id, $data);
        return redirect()->back();
    }

    public function hapusMahasiswa($id){
        $model = new MahasiswaModel;
        $model->delete($id);
        return redirect()->back();
    }

    //* bagian menu Rekap Nilai Untuk IPK
    public function seluruhNilai(){
        
    }

}
