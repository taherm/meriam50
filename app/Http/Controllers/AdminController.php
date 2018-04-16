<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Arabicservice;
use App\Slider;
use App\Arabicmenu;
use Intervention\Image\Facades\Image;


class AdminController extends Controller
{
    const UPLOAD_PATH =  '/uploads/';

    public function index()
    {
       $ser=Arabicservice::all();
        return view('admin.index',compact('ser'));
    }

    public function show()
    {
       $ser=Arabicservice::all();
        return view('admin.pages',compact('ser'));
    }


    public function delete_slider()
    {
       
        Slider::where('image',request('image'))->delete();

        return redirect('/admin/delete-slider');
    }
    public function add_slider()
    {
        $slide=new Slider;
        
        $image=request()->image;
        $imageName =$image->getClientOriginalName();
        $savePath =public_path() . self::UPLOAD_PATH.$imageName;
        Image::make($image)->save($savePath, 100);
        $fullImagePath = app()->make('url')->to(self::UPLOAD_PATH.$imageName);
        $slide->image=$fullImagePath;

        $slide->save();
        return redirect('/admin/add-slider');
    }


    public function edit_menu($id)
    {
        $serv=Arabicmenu::find($id);
        return view('admin.menu_edit',compact('serv'));
    }
    




    public function submenu()
    {
        $menu=new Arabicmenu;
        $menu->title=request('title');
        $menu->parent_id=Arabicmenu::where('title',request('submenu'))->first()->id;
        $menu->url="";
        $menu->save();
        return redirect('/admin');
    }



    
    public function mainmenu()
    {
       
        $menu=new Arabicmenu;
        $menu->title=request('title');
        $menu->parent_id='0';
        $menu->url="";
        $menu->save();
        return redirect('/admin');
    }


    public function edit($id)
    {
        $serv=Arabicservice::find($id);
        return view('admin.edit',compact('serv'));
    }

    public function update($id)
    {
        $serv=Arabicservice::find($id);
        $fn=$serv->title;
        $serv->title=request('title');
        $serv->description=request('description');
        
        $image=request()->image;
        $imageName =$image->getClientOriginalName();
        $savePath =public_path() . self::UPLOAD_PATH.$imageName;
        Image::make($image)->save($savePath, 100);
        $fullImagePath = app()->make('url')->to(self::UPLOAD_PATH.$imageName);
        $serv->image=$fullImagePath;
        
        $menu=Arabicmenu::where('title',"=",$fn)->first();
        $menu->title=request('title');
        $menu->url="services/menu/".$serv->title;
        
    $menu->parent_id=Arabicmenu::where('title',request('menu'))->first()->id;

$menu->save();
        $serv->save();
        //File::move("C://xampp/htdocs/pim/resources/views/services/".$fn.'.blade.php',"C://xampp/htdocs/pim/resources/views/services/".request('title').'.blade.php');
        //dd(request()->all());
        return redirect('/admin');
    }


    public function updatemenu($id)
    {
            $temp=Arabicmenu::find($id);
            $menu_name=$temp->title;
            $temp->title=request('title');
            $menu=Arabicmenu::where('title',"=",$menu_name)->first();
            $menu->title=request('title');
            $menu->save();
            return redirect('/admin');
    }

    





    public function store()
    {
        $serv=new Arabicservice;
        $serv->title=request('title');
        $serv->description=request('description');
       
        $image=request()->image;
        $imageName =$image->getClientOriginalName();
        $savePath =public_path() . self::UPLOAD_PATH.$imageName;
        Image::make($image)->save($savePath, 100);
        $fullImagePath = app()->make('url')->to(self::UPLOAD_PATH.$imageName);
        $serv->image=$fullImagePath;

        $serv->save();
        $menu=new Arabicmenu;
        $menu->title=request('title');
       
        $menu->parent_id=Arabicmenu::where('title',request('submenu'))->first()->id;
    
    
   // $menu->url=request('url');
   $menu->url="services/menu/".request('title'); 
   
   $menu->save();

    //dd(request()->all());
    return redirect('/admin');
    }

    public function destroy($id)
    {
        
        $serv=Arabicservice::find($id);
        $menu=Arabicmenu::where('title',"=",$serv->title)->first();
        //$temp=$menu->title;
        //File::delete("C://xampp/htdocs/pim/resources/views/services/".$temp.'.blade.php');
        $menu->delete();
        
        $serv->delete();
        
        return redirect('/admin');
    }

    public function del($id)
    {
       $menu= Arabicmenu::find($id)->delete();;
       //$temp=$menu->title;
      // File::delete("C://xampp/htdocs/pim/resources/views/services/".$temp.'.blade.php');
 
      //Arabicmenu::where('title',request('submenu'))->delete();
    return redirect('/admin');
    }

    




}
