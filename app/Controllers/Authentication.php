<?php namespace App\Controllers;

class Authentication extends BaseController
{
    protected $auth;

    public function __construct()
    {
        $this->auth = service('auth');
    }

    public function login()
    {
        if ($this->auth->logged()) {
            return redirect('/');
        }

        helper('form');

        echo view('Authentication/login');
    }

    public function attemptLogin()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $rules = [
            'email' => 'required',
            'password' => 'required',
        ];

        $messages = [
            'email' => [
                'required' => 'Please enter your email.',
            ],
            'password' => [
                'required' => 'Please enter your password.',
            ],
        ];

        if (!$this->validate($rules, $messages)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        //TODO: Hash password

        // Check if email exists
        $user = model('User');

        if (!$user->where(['email' => $email])->first()) {
            return redirect()->back()->withInput()->with('error', 'This email isn\'t registered.');
        }

        // Check if user with provided email and password exist
        $id = $user->where(['email' => $email, 'password' => $password])->first()['id'];

        if (!$id) {
            return redirect()->back()->withInput()->with('error', 'Wrong email & password combination. Try again.');
        }

        // TODO: Log in
        $this->auth->login($id);

        return redirect()->to('/dashboard')->with('success', 'You have logged in successfully.');
    }

    public function register()
    {
        if ($this->auth->logged()) {
            return redirect('/');
        }

        helper('form');

        echo view('Authentication/register');
    }

    public function attemptRegister()
    {

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
            // this clears old() data
            return redirect()->back()->with('success', 'Your account has been created.');
        }
    }

    public function logout()
    {
        if (!$this->auth->logged()) {
            return redirect('/');
        }

        $this->auth->logout();
        return redirect()->to('/')->with('success', 'You have been logged out successfully.');
    }
    //--------------------------------------------------------------------

}
