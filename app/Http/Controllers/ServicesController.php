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
        //return view('services/'.$ser->title,compact('ser'));
        return view('layouts.new-service-layout-ar',compact('ser'));
    }


    public function create()
    {
        
        return view('services.create');
    }

   

    public function edit($id)
    {
        $serv=Arabicservice::find($id);
        return view('services.edit',compact('serv'));
    }

    


    public function update($id)
    {
        //dd('stopo here');
        $this->validate(request(),[
        'title'=>'required',
        'description'=>'required',
        'image'=>'required'
         ]);
        
        $serv=Arabicservice::find($id);

        $serv->title=request('title');
        $serv->description=request('description');
        $temp=request('image');
        $filename='img/services/'.$temp;
        $serv->image=$filename;
        
        $serv->save();
        //dd(request()->all());
        return redirect('/services');
    }




    public function store()
    {
    
    $this->validate(request(),[
       'title'=>'required',
       'description'=>'required'
       
        ]);
   
      $temp= File::get("C://xampp/htdocs/pim/resources/views/layouts/new-service-layout.blade.php");
       

    if(request('submenu')=="services")
    {
        File::put("C://xampp/htdocs/pim/resources/views/services/".request('title').'.blade.php',$temp);
        $serv=new Arabicservice;
        $serv->title=request('title');
        $serv->description=request('description');
        $temp=request('image');
        $filename='img/services/'.$temp;
        $serv->image=$filename;
        $serv->save();
    }
    else{
        File::put("C://xampp/htdocs/pim/resources/views/menu/".request('title').'.blade.php',$temp);

    }
    //File::put("C://xampp/htdocs/pim/resources/views/services/".request('title').'.blade.php','John Doe is a good boy');

    if(request('submenu')!='None')
    {
    $menu=new Arabicmenu;
    $menu->title=request('title');
    $menu->url=request('url');
    $menu->parent_id=Arabicmenu::where('title',request('submenu'))->first()->id;
    $menu->save();
    }
    else
    {

    }

    //dd(request()->all());
    return redirect('/services');
    }


    public function destroy($id)
    {
        
        $serv=Arabicservice::find($id);
        $menu=Arabicmenu::where('title',"=",$serv->title)->first();
        $menu->delete();
        
        $serv->delete();
        return redirect('/services');
    }


    public function show($url)
    {
       
        $ser=Arabicservice::where('title', '=', $url)->first();
        //return view('services.'.$url,compact('ser'));
        return view('layouts.new-service-layout-ar',compact('ser'));
    }




}
