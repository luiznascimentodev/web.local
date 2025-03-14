<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function login()
    {
        helper(['form']);
        echo view('login');
    }

    public function loginAuth()
    {
        $session = session();
        $model = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $model->where('username', $username)->first();

        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'id' => $data['id'],
                    'username' => $data['username'],
                    'logged_in' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('http://web.local/success');
            } else {
                $session->setFlashdata('msg', 'Senha incorreta.');
                return redirect()->to('http://web.local/login');
            }
        } else {
            $session->setFlashdata('msg', 'Usuário não encontrado.');
            return redirect()->to('http://web.local/login');
        }
    }

    public function success()
    {
        echo view('success');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
