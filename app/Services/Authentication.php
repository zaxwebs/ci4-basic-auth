<?php namespace App\Services;

class Authentication
{
    public function login($userId)
    {
        session()->set('logged_in', $userId);
    }
}
