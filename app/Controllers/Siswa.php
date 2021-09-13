<?php

namespace App\Controllers;

use App\Models\SiswaModel;

class Siswa extends BaseController
{
    protected $siswamodel;
    public function __construct()
    {
        $this->siswamodel = new SiswaModel();
    }
    public function index()
    {
        $data = [
            'judul' => 'Akademik | Administrator',
            'siswa' => $this->siswamodel->getsiswa()
        ];
        return view('data_siswa/index', $data);
    }

    // tambah
    public function tambahsiswa()
    {
        $this->siswamodel->save([
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'nis' => $this->request->getVar('nis'),
            'alamat' => $this->request->getVar('alamat'),
            'no_telp' => $this->request->getVar('no_telp'),
            'tgl_lahir' => $this->request->getVar('tgl_lahir'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'agama' => $this->request->getVar('agama'),
            'nama_orangtua' => $this->request->getVar('nama_orangtua'),
            'alamat_orangtua' => $this->request->getVar('alamat_orangtua'),
            'no_telp_orangtua' => $this->request->getVar('no_telp_orangtua'),
            'jurusan' => $this->request->getVar('jurusan')

        ]);

        session()->setFlashdata('Pesan', 'Data Berhasil Ditambahkan.');

        return redirect()->to('/siswa');
    }
}
