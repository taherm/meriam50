<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Arabicmenu;
use App\Service;

class MenuController extends Controller
{
    
    public function show($url)
    { 
        $ser=Arabicmenu::where('title', '=', $url)->first();
        return view('layouts.new-service-layout-ar',compact('ser'));
    }  

}
