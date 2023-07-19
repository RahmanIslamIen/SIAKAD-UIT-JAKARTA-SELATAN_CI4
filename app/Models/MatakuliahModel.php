<?php

namespace App\Models;

use CodeIgniter\Model;

class MatakuliahModel extends Model
{
    protected $table = 'matakuliah';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_matkul', 'kd_matkul'];
}
