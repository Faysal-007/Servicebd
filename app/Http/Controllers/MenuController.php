<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuModel;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function list_nav_menu(){
        $data = MenuModel::all()
        ->where('is_delete','=','0');
        return view('admin.nav_menu.list',compact('data'));
    }
    public function add_nav_menu(){
        return view('admin.nav_menu.add');
    }

    public function insert_nav_menu(Request $request){
        $user = new MenuModel;
        $user->name = trim($request->name);
        $user->slug = trim(str::slug($request->name));
        $user->link = trim($request->link);
        $user->is_delete= trim($request->status);
        $user->created_by = Auth::user()->id;
        $user->save();
        return redirect('admin/nav_menu/list')->with('message','Added Successfully!');
    }
    public function delete_blog_category($id){
        $data = MenuModel::find($id);
        $data->is_delete=(1);
        $data->update();
        return redirect('admin/nav_menu/list')->with('message','Deleted Successfully!');

    }
}
