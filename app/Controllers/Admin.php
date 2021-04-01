<?php

namespace App\Controllers;

class Admin extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Admin',
      'content' => 'v_home',
    ];
    return view('layout/wrapper', $data);
  }

  //--------------------------------------------------------------------

}
