<?php namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        echo view('Pages/index');
    }

    public function dashboard()
    {
        echo view('Pages/dashboard');
    }

    //--------------------------------------------------------------------

}
