<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    
    public function index()
    {
        $user = User::all();
        return view('admin.user.index', compact('user'));
    }

    
    public function create()
    {
        return view('admin.user.add');

    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->post('name');
        $user->lastname = $request->post('lastname');
        $user->email = $request->post('email');
        $user->hobbies = $request->post('hobbies');
        $user->about = $request->post('about');
        $user->password = Bcrypt($request->post('password'));
        $user->role_as = $request->post('role_as');
        if($request->hasFile('image')){
            $image = $request->file('image');
            $url = 'img/user/';
            $nombreimagen = time() . '-' . $image->getClientOriginalName();
            $uploadSuccess = $request->file('image')->move($url,$nombreimagen);
            $user->profile_photo_path = $url. $nombreimagen;
        }
        $user->save();
        return redirect()->route('User.index')->with("success", "Actualizado con exito");
    }

    public function show(string $id)
    {
        $user  = User::find($id);
        return view('admin.user.delete', compact('user'));
    }

    public function edit(string $id)
    {
        $user  = User::find($id);
        return view('admin.user.update', compact('user'));
    }

    public function update(Request $request, string $id)
    {
        $user  = User::find($id);
        $user->name = $request->post('name');
        $user->lastname = $request->post('lastname');
        $user->email = $request->post('email');
        $user->hobbies = $request->post('hobbies');
        $user->about = $request->post('about');
        $user->password = Bcrypt($request->post('password'));
        $user->role_as = $request->post('role_as');
        if($request->hasFile('image')){
            $image = $request->file('image');
            $url = 'img/user/';
            $nombreimagen = time() . '-' . $image->getClientOriginalName();
            $uploadSuccess = $request->file('image')->move($url,$nombreimagen);
            $user->profile_photo_path = $url. $nombreimagen;
        }
        $user->save();
        return redirect()->route('User.index')->with("success", "Actualizado con exito");
    }

    public function destroy(string $id)
    {
        
    }
}
