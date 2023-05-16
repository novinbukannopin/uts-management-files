<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function index()
    {
        // return redirect()->to('')
        return redirect()->to(site_url('login'));
        // return view('auth/login');
    }

    public function login()
    {
        if (session('id_user')) {
            return redirect()->to(site_url('/'));
        }
        return view('auth/login');
    }

    public function doLogin()
    {
        $post = $this->request->getPost();
        $query = $this->db->table('users')->getWhere(['email_user' => $post['email_user']]);
        $user = $query->getRow();
        // dd($post);
        if ($user) {
            if (password_verify($post['password_user'], $user->password_user)) {
                $params = ['id_user' => $user->id_user];
                session()->set($params);
                return redirect()->to(site_url('/   '));
            } else {
                return redirect()->back()->with('error', 'password is wrong');
            }
        } else {
            return redirect()->back()->with('error', 'email not found');
        }
    }

    public function logout()
    {
        session()->remove('id_user');
        return redirect()->to(site_url('login'));
    }
}
