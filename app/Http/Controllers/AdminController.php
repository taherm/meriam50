<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Arabicservice;
use App\Slider;
use App\Arabicmenu;


class AdminController extends Controller
{
    

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
        $temp=request('image');
        $filename='img/slider/'.$temp;
        $slide->image=$filename;
       
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
        
         
         $menu->url="menu/".request('title');
         $menu->save();
        //$temp= File::get("C://xampp/htdocs/pim/resources/views/layouts/new-service-layout.blade.php");
        //File::put("C://xampp/htdocs/pim/resources/views/services/".request('title').'.blade.php',$temp);
         //dd(request()->all());
         return redirect('/admin');
    }



    
    public function mainmenu()
    {
       
         $menu=new Arabicmenu;
         $menu->title=request('title');
         
        $menu->parent_id='0';
        $menu->url="menu/".request('title');
         $menu->save();
        //$temp= File::get("C://xampp/htdocs/pim/resources/views/layouts/new-service-layout.blade.php");
        //File::put("C://xampp/htdocs/pim/resources/views/services/".request('title').'.blade.php',$temp);
         //dd(request()->all());
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
        $temp=request('image');
        $filename='img/services/'.$temp;
        $serv->image=$filename;
        
        $menu=Arabicmenu::where('title',"=",$fn)->first();
        $menu->title=request('title');
        $menu->url="services/menu/".$serv->title;
        if(request('menu')!='None')
{
    $menu->parent_id=Arabicmenu::where('title',request('menu'))->first()->id;

}
$menu->save();
        $serv->save();
        //File::move("C://xampp/htdocs/pim/resources/views/services/".$fn.'.blade.php',"C://xampp/htdocs/pim/resources/views/services/".request('title').'.blade.php');
        //dd(request()->all());
        return redirect('/admin');
    }


    public function updatemenu($id)
    {
            $serv=Arabicmenu::find($id);
            $fn=$serv->title;
            $serv->title=request('title');
            
            $menu=Arabicmenu::where('title',"=",$fn)->first();
            $menu->title=request('title');
            $menu->url="menu/".$serv->title;
            if(request('menu')!='None')
            {
                $menu->parent_id=Arabicmenu::where('title',request('menu'))->first()->id;
            
            }
    $menu->save();
            //File::move("C://xampp/htdocs/pim/resources/views/services/".$fn.'.blade.php',"C://xampp/htdocs/pim/resources/views/services/".request('title').'.blade.php');
            //dd(request()->all());
            return redirect('/admin');
    }

    





    public function store()
    {
        $serv=new Arabicservice;
        $serv->title=request('title');
        $serv->description=request('description');
        $temp=request('image');
        $filename='img/services/'.$temp;
        $serv->image=$filename;
        $serv->save();
    
    //File::put("C://xampp/htdocs/pim/resources/views/services/".request('title').'.blade.php','John Doe is a good boy');


    $menu=new Arabicmenu;
    $menu->title=request('title');
    if (isset($_POST['menu'])) {
        $menu->parent_id='0';
        // Checkbox is selected
    } else {
        $menu->parent_id=Arabicmenu::where('title',request('submenu'))->first()->id;
    }
    
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
