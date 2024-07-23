<?php

namespace App\Controllers;
use App\Models\CmsModel;

class Home extends BaseController
{
    public function index(): string
    {
        $this->CmsModel = new CmsModel();
        $foo = $this->CmsModel->findAll();
        $data = ['alldata' => $foo];
        return view('home_page' , $data );
    }
}
