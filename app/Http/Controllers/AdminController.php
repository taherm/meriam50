<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Arabicservice;
use App\Slider;
use App\Arabicmenu;
use Intervention\Image\Facades\Image;
use File;
use App\Album;



class AdminController extends Controller
{
    const UPLOAD_PATH =  '/uploads/';

    public function index()
    {
        $ser=Arabicservice::all();
        return view('admin.index',compact('ser',session('message')));
    }

    public function show()
    {
        $ser=Arabicservice::all();
        return view('admin.pages',compact('ser'));
    }


    public function delete_slider()
    {
        Slider::where('image',request('image'))->delete();
        session()->flash('message','Slider Deleted!');
        
        return redirect('/admin/delete-slider');
    }

    public function add_slider(Request $request)
    {
        
        $this->validate(request(),[
            'image'=>'required'
             ]);
        $slide=new Slider;
        //$image=request()->image;
        //ini_set('memory_limit','256M');
        $path = $request->file('image')->store('public/uploads');
        $path_parts = pathinfo($path);
//dd($path_parts['basename']);
        //$fullImagePath =$imageName;
        $slide->image=$path_parts['basename'];
        
        $slide->save();
        session()->flash('message','Slider Added!');
        
        return redirect('/admin');
    }

    public function add_album(Request $request)
    {
        $this->validate(request(),[
            'image'=>'required'
             ]);
        $album=new Album;
        $image=request()->image;
        $imageName = md5(uniqid(rand() * (time()))) . '.' . $image->getClientOriginalExtension();
        $savePath = public_path(self::UPLOAD_PATH . $imageName);
        Image::make($image)->save($savePath, 100);
        $fullImagePath =$imageName;
        $album->image=$fullImagePath;
        $album->save();
        session()->flash('message','Image Added!');
        return redirect('/admin/add-album');
    }

    public function delete_album()
    {
        $album=Album::find(request('image'));
        File::delete('uploads/'.$album->image);
        $album->delete();
        session()->flash('message','Image Deleted!');
        
        return redirect('/admin/delete-album');
    }

    

    public function edit_menu($id)
    {
        $serv=Arabicmenu::find($id);
        return view('admin.menu_edit',compact('serv'));
    }
    

    public function submenu()
    {
        $this->validate(request(),[
        'title_en'=>'required'
         ]);
        $menu=new Arabicmenu;
        $menu->title_en=request('title_en');
        $menu->parent_id=Arabicmenu::where('title_en',request('submenu'))->first()->id;
        $menu->url="";
        $menu->save();
        return redirect('/admin');
    }

    
    public function mainmenu()
    {
        $this->validate(request(), [
            'title_en' => 'required'
        ]);
        $menu = new Arabicmenu();
        $menu->title_en = request('title_en');
        $menu->save();
        session()->flash('message','Main Menu Added!');
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
        $fn=$serv->title_en;
        $serv->title_en=request('title_en');
        $serv->description=request('description');
        $image=request()->image;
        $imageName = md5(uniqid(rand() * (time()))) . '.' . $image->getClientOriginalExtension();
        $savePath = public_path(self::UPLOAD_PATH . $imageName);
        Image::make($image)->save($savePath, 100);
        $fullImagePath =$imageName;
        $serv->image=$fullImagePath;
        $serv->arabicmenu_id=Arabicmenu::where('title_en',request('menu'))->first()->id;
        $serv->save();
        session()->flash('message','Page Updated!');
        
        return redirect('/admin');
    }


    public function updatemenu($id)
    {
        $temp = Arabicmenu::find($id);
        $menu_name = $temp->title_en;
        $menu = Arabicmenu::where('title_en', "=", $menu_name)->first();
        $menu->title_en = request('title_en');
        $menu->save();
        session()->flash('message','Menu Updated!');
        
        return redirect('/admin');
    }


    public function store()
    {
        $this->validate(request(),[
            'title_en'=>'required',
            'description'=>'required',
            'image'=>'required'
             ]);
        $serv=new Arabicservice;
        $serv->title_en=request('title_en');
        $serv->description=request('description');
        $image=request()->image;
        $imageName = md5(uniqid(rand() * (time()))) . '.' . $image->getClientOriginalExtension();
        $savePath = public_path(self::UPLOAD_PATH . $imageName);
        Image::make($image)->save($savePath, 100);
        $fullImagePath =$imageName;
        $serv->image=$fullImagePath;
        $serv->arabicmenu_id=Arabicmenu::where('title_en',request('submenu'))->first()->id;
        $serv->save();
        session()->flash('message','Page Added!');
        
        return redirect('/admin');
    }

    public function destroy($id)
    {
        $serv=Arabicservice::find($id);
        File::delete('uploads/'.$serv->image);
        $serv->delete();
        session()->flash('message','Page Deleted!');
        
        return redirect('/admin');
    }

    public function del($id)
    {
        $menu= Arabicmenu::find($id)->delete();
        session()->flash('message','Main Menu Deleted!');
        
        return redirect('/admin');
    }

}
