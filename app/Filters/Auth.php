<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // jika user belum login
        if(! session()->get('jenis')){
            // maka redirect ke halaman login
            return redirect()->to('/login');
        }
    }
    //-------------------------------------------------------------------

    public function after(RequestInterface $request, ResponInterface $response, $arguments = null)
    {
        //Do something here
    }
}
?>