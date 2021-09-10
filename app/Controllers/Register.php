<?php
 
namespace App\Controllers;
 
use App\Models\UsersModel;
 
class Register extends BaseController
{
    public function index()
    {
        return view('login/vw_register');
    }
    public function process()
    {
    	if (!$this->validate([
            'name' => [
                'rules' => 'required|min_length[5]|max_length[100]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 100 Karakter',
                ]
            ],
    		'username' => [
    			'rules' => 'required|min_length[5]|max_length[20]|is_unique[users.username]',
    			'errors' => [
    				'required' => '{field} Harus diisi',
    				'min_length' => '{field} Minimal 5 Karakter',
    				'max_length' => '{field} Maksimal 20 Karakter',
    				'is_unique' => 'Username sudah digunakan sebelumnya'
    			]
    		],
    		'password' => [
    			'rules' => 'required|min_length[5]|max_length[50]',
    			'errors' => [
    				'required' => '{field} Harus diisi',
    				'min_length' => '{field} Minimal 5 Karakter',
    				'max_length' => '{field} Maksimal 50 Karakter',
    			]
    		],
    		'password_conf' => [
    			'rules' => 'matches[password]',
    			'errors' => [
    				'matches' => 'Konfirmasi Password tidak sesuai dengan password',
    			]
    		],
    		'email' => [
    			'rules' => 'required|min_length[5]|max_length[100]|valid_email',
    			'errors' => [
    				'required' => '{field} Harus diisi',
    				'min_length' => '{field} Minimal 4 Karakter',
    				'max_length' => '{field} Maksimal 100 Karakter',
    			]
    		],
    	])) {
    		session()->setFlashdata('error', $this->validator->listErrors());
    		return redirect()->back()->withInput();
    	}
    	$users = new UsersModel();
    	$users->insert([
            'name' => $this->request->getVar('name'),
    		'username' => $this->request->getVar('username'),
    		'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
    		'email' => $this->request->getVar('email')
    	]);
    	return redirect()->to('Login');
    }
}