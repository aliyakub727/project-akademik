<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table = "siswa";
    protected $allowedFields = ['nama_lengkap', 'jenis_kelamin', 'nis', 'alamat', 'no_telp', 'tgl_lahir', 'tempat_lahir', 'agama', 'nama_orangtua', 'alamat_orangtua', 'no_telp_orangtua', 'jurusan'];

    public function getsiswa($nis = false)
    {
        if ($nis == false) {
            return $this->findAll();
        }
        return $this->where(['nis' => $nis])->first();
    }
}
