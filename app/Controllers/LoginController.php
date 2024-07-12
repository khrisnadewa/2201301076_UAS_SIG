<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function auth()
    {

        // dd($this->request);
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $model = new UserModel();
        $user = $model->getUserByEmail($email);
        // dd($akun);
        if ($user !== null) {
            if (($password == $user['password'])) {
                $session = session();
                $sessionData = [
                    'id' => $user['id'],
                    'email' => $user['email'],
                    'isLoggedIn' => true
                ];
                $session->set($sessionData);

                return redirect()->to('/dashboard');
            } else {
                session()->setFlashdata('error', 'Password salah.');
                return redirect()->to('/login');
            }
        } else {
            session()->setFlashdata('error', 'Email tidak ditemukan.');
            return redirect()->to('/login');
        }
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}
