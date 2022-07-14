<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Todo;
class UserController extends Controller
{
    //
    // function show(){
    //     return "Hello From User Controller";
    // }
    // function showid($id){
    //     return $id;
    // }
    // function showviwe($name){
    //     return view('addtodo',['name'=>$name]);
    // }
    // function addtodo(Request $mytodo){
    //     $mytodo -> validate([
    //         'title' => 'required | min:3 | max:50',
    //         'des' => 'required | min:3',

    //     ]);
    //     $title = $mytodo->input('title');
    //     $des = $mytodo->input('des');
    //     DB::select("INSERT INTO `laraveltodos`.`todos`(`title`,`des`)VALUES($title,$des);");
    //     return $mytodo->input('title');
    // }
    function addtodo(Request $req){
        $req -> validate([
            'title' => 'required | min:3 | max:50',
            'des' => 'required | min:3',

        ]);
        $todo = new Todo;
        $todo->title=$req->title;
        $todo->des=$req->des;
        $todo->save();
        return redirect('/');
    }
    function tododelete($id){
        $data=Todo::where('id', $id) ;
        // $data=Todo::find($id);
        $data->delete();
        return redirect('/');
    }
    function editpage($id){
        $data=Todo::find($id);
        // $data = DB::select('select * from todos where sno = ?',[$id]) ;
        
        return view('editpage',['todo'=>$data]);
    }
    function todoedit(Request $req){
        $id=$req->id;
        $todo=Todo::find($id);
        
        $todo->title=$req->title;
        $todo->des=$req->des;
        $todo->save();
        return redirect('/');
    }
    function show(){
        $data = Todo::all();
        return view('welcome',['todos'=>$data]);
    }

}