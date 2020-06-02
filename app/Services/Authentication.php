<?php namespace App\Services;

class Authentication
{
    public function login($userId)
    {
        session()->set('logged_in', $userId);
    }

    public function logout()
    {
        session()->remove('logged_in');
    }

    public function logged()
    {
        // TODO: Validation?

        if (!session()->has('logged_in')) {
            return false;
        }
        return true;
    }
}
