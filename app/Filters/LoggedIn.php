<?php namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class LoggedIn implements FilterInterface
{
    public function before(RequestInterface $request)
    {
        $auth = service('auth');

        if (!$auth->logged()) {
            return redirect('login')->with('error', 'You need to be logged in.');
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response)
    {
        // Do something here
    }
}
