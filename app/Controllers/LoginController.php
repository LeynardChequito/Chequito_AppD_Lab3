<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class LoginController extends BaseController
{
    public function index()
    {
        // 
    }
    
    public function login()
    {
        helper(['form']);
        return view('loginn');
    }
    
    
    public function register()
    {
        helper(['form']);
        $data = [];
        return view('adminreg');
    }

    public function authlogin()
    {
        $session = session();
        $aModel = new AdminModel();
        $username = $this->request->getvar('username');
        $password = $this->request->getVar('password');
        
        $data = $aModel->where('username', $username)->first();

        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if ($authenticatePassword) 
            {
                $ses_data = [
                    'id' => $data['id'],
                    'username' => $data['username'],
                    'isLoggedln' => TRUE
                    ];
                    $session->set($ses_data);
                    return redirect()->to('/register');
                    }
            else
            {
                $session->setFlashdata('msg','Password is incorrect.');
                return redirect()->to('/loginn');
            }
        } else{
        $session->setFlashdata('msg', 'Email does not exist.');
        return redirect()->to('/loginn');
        }
    }

/*     public function createaccoumt()
    {
        helper(['form']);
        $rules = [
                'username' => 'required|min_length[4]|max_length[100]',
                'password' => 'required|min_length[4]|max_length[50]',
                'confirmpassword' => 'matches[password]'
            ];
                if($this->validate($rules)){
                $adModel = new AdminModel();
                $data = [
                'username' => $this->request->getVar('username'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
                ];
                $adModel->save($data);
                return redirect()->to('/loginn');
                }else{
                $data['validation'] = $this->validator;
                echo view('/register');
                }
    } */

    public function authreg()
    {
        helper(['form']);
        $rules = [
                'username' => 'required|min_length[1]|max_length[20]',
                'password' => 'required|min_length[1]|max_length[30]',
            ];
                if($this->validate($rules))
                {
                    $adminModel = new AdminModel();
                    $data = [
                        'username' => $this->request->getVar('username'),
                        'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
                    ];
                    $adminModel->insert($data);
                    return redirect()->to('/login');
                }
                else
                {
                    $data['validation'] = $this->validator;
                    echo view('adminreg', $data);
                }
    }
}
