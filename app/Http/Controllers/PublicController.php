<?php

namespace App\Http\Controllers;
use App\Models\BlogModel;
use App\Models\MenuModel;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function public_index(){
        $menu_items = MenuModel::select()->where('is_delete','=','0')->get();
        return view('user.home.user_index',compact('menu_items'));
    }
    public function public_home(){
        $menu_items = MenuModel::select()->where('is_delete','=','0')->get();
        return view('user.home.user_index',compact('menu_items'));
    }
    public function public_dashboard(){
        return view('user.home.user_index');
    }
    public function blog(){
        $blog = BlogModel::all();
        return view('user.home.blog',compact('blog'));
    }
    public function blog_post($slug){
        $blog_post = BlogModel::where('slug', $slug)->first();
        return view('user.home.blog_post',compact('blog_post'));
    }
}
