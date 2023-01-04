<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use App\Models\warga;
use Illuminate\Http\Request;

class wargacontroller extends Controller
{
    public function index(){
       $warga =User::all();
       return view('warga.index',compact('warga'));
    }
    public function create(){
        return view('warga.create');
    }
    public function store(Request $request){

User::create([
    'name'=>$request->name,
    'email'=>$request->email,
    'password'=>$request->password,
    'token'=>Str::random(15),
]);
return redirect('/warga');
    }
public function edit($id){
    $warga=User::find($id);
    return view('warga.edit',compact(['warga']));

}
public function update($id, Request $request){
    $warga=User::find($id);
    $warga->update($request->except('_token'));
    return redirect('/warga');
}
public function destroy($id){
    $warga=User::find($id);
    $warga->delete($id);
    return redirect('/warga');
}
}
