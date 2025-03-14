<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class RegisterController extends Controller
{
    public function register()
    {
        helper(['form']);
        echo view('register', [
            'css' => base_url('assets/css/style.css'),
            'js' => base_url('assets/js/script.js')
        ]);
    }

    public function store()
    {
        helper(['form']);
        $model = new UserModel();

        $rules = [
            'username' => 'required|min_length[3]|max_length[20]|is_unique[users.username]',
            'password' => 'required|min_length[8]|max_length[255]'
        ];

        if ($this->validate($rules)) {
            $data = [
                'username' => $this->request->getPost('username'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
            ];

            if ($model->save($data)) {
                session()->setFlashdata('success', 'Registro bem-sucedido!');
                return redirect()->to('http://web.local/login');
            } else {    
                return redirect()->to('http://web.local/register')->withInput()->with('errors', $model->errors());
            }
        } else {
            return redirect()->to('http://web.local/register')->withInput()->with('validation', $this->validator);
        }
    }
}
