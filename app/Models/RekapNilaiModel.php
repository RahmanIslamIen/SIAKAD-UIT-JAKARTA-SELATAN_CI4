<?php 
namespace App\Models;

use CodeIgniter\Model;

class RekapNilaiModel extends Model{
    protected $table = 'rekap_nilai';
    protected $primaryKey = 'id';
    protected $allowedFields = ['matakuliah', 'nilai', 'pertemuan', 'jenis_penilaian'];
}
