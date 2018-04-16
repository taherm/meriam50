<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Arabicmenu;
use App\Arabicservice;

class ServicesController extends Controller
{
 
    public function index()
    {
        $ser=Arabicservice::all();
        return view('services',compact('ser'));
    }

    public function find($id)
    {
        $ser=Arabicservice::find($id);
        return view('layouts.new-service-layout-ar',compact('ser'));
    }

    public function show($url)
    {
        $ser=Arabicservice::where('title', '=', $url)->first();
        return view('layouts.new-service-layout-ar',compact('ser'));
    }

}
