<?php

namespace App\Controllers;
use App\Models\PengumumanModel;

class AdminController extends BaseController
{
    public function index()
    {
        return view('admin_panel');
    }

    // bagian section pengumuman semuanya di handle di sini 
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

    // bagian section matakuliah semua nya di handle di sini
}
