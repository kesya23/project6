<?php

namespace App\Controllers;

use App\Core\Controller;

class kesya extends Controller
{
   public function index()
  {
   echo "ini file";
   $this->dashboard('kesya/index', $data); //ini viewnya
  }

  public function input()
  {
   echo "ini file";
  }
}