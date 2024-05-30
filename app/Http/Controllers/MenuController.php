<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuModel;

class MenuController extends Controller
{
    public function list_nav_menu(){
        $data = MenuModel::all()
        ->where('is_delete','=','0');
        return view('admin.nav_menu.list',compact('data'));
    }
}
