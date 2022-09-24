<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return $this->slice->view('welcome_message');
    }

    public function sample()
    {
        $data['pageTitle'] = "Arkonor LLC | Dashboard";
        $data['customScripts'] = 'portal/sample.js';
        $data['myname'] = "Anton Jay Hermo";
        return $this->slice->view('sample',$data);
    }
}
