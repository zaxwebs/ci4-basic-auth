<?php namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        echo view('Pages/index');
    }

    public function restricted()
    {
        echo view('Pages/restricted');
    }

    //--------------------------------------------------------------------

}
