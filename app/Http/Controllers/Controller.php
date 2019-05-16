<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;



class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function index()
    {
      $title = 'Canalside Builders';
      return view('pages.index')->with('title',$title);
    }

    public function about()
    {
      $title = 'About Us';
      return view('pages.about')->with('title',$title);
    }

    public function services()
    {
      $title = 'Services';
      return view('pages.services')->with('title', $title);
    }














}
