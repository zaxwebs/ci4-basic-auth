<?php namespace App\Controllers;

class Authentication extends BaseController
{
    public function login()
    {
        helper('form');
        echo view('Authentication/login');
    }

    public function register()
    {
        helper('form');

        if ($this->request->getMethod() === 'post') {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $password_confirm = $this->request->getPost('password_confirm');

            $rules = [
                'email' => 'required|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[8]',
                'password_confirm' => 'required|matches[password]',
            ];

            $messages = [
                'email' => [
                    'required' => 'Please enter an email.',
                    'valid_email' => 'Please enter a valid email.',
                    'is_unique' => 'That email has already been taken. Please enter another.',
                ],
                'password' => [
                    'required' => 'Please enter a password.',
                    'min_length' => 'Please enter a password with at least {param} characters.',
                ],
                'password_confirm' => [
                    'required' => 'Please confirm password.',
                    'matches' => 'Passwords did not match.',
                ],
            ];

            if (!$this->validate($rules, $messages)) {
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            }

            // Attempt to save the user to DB
            $user = model('User');

            // TODO: Hash password

            $data = [
                'email' => $email,
                'password' => $password,
            ];

            if (!$user->save($data)) {
                return redirect()->back()->withInput()->with('errors', $user->errors());
            } else {
                // exclude withInput()
                return redirect()->back()->with('success', 'Your account has been created.');
            }
        }

        echo view('Authentication/register');
    }

    public function logout()
    {
    }
    //--------------------------------------------------------------------

}
