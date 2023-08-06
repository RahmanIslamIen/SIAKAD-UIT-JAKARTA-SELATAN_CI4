<?php
namespace App\Models;

use CodeIgniter\Model;
use App\Models\MatakuliahModel;


class DosenModel extends Model
{
    protected $table = 'dosen';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_dosen', 'gelar', 'kd_dosen', 'kd_matkul'];

    public function matakuliah()
    {
        return $this->belongsTo('App\Models\MatakuliahModel', 'kd_matkul', 'kd_matkul');
    }
}
