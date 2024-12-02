<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function updatetheme(Request $request, string $id)
    {
        $request->validate([
            'theme' => 'required|string|max:255',
        ]);

        $user = User::find($id);
        $user->theme = $request->input('theme');
        $user->save();

        return redirect()->back()->with("success", "Actualizado con éxito!");
    }
    public function updatePassword(Request $request, string $id)
    {
    $request->validate([
        'password' => 'required|string',
        'password_new' => 'required|string|min:8|confirmed',
        ]);

        $user = User::find($id);

        // Verifica que la contraseña actual sea correcta
        if (!Hash::check($request->input('password'), $user->password)) {
            return redirect()->back()->withErrors(['password' => 'La contraseña actual no es correcta.']);
        }

        // Actualiza la contraseña del usuario
        $user->password = Hash::make($request->input('password_new'));
        $user->save();

        return redirect('login')->with("success", "¡Contraseña actualizada con éxito!");
    }

    public function updateinformation(Request $request, string $id)
    {
    

        $user = User::find($id);

        $user->name = $request->input('name');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->about = $request->input('about');
        $user->hobbies = $request->input('hobbies');
        if($request->hasFile('profile_photo_path')){
            $profile_photo_path = $request->file('profile_photo_path');
            $url = 'img/users/';
            $nombreimagen = time() . '-' . $profile_photo_path->getClientOriginalName();
            $uploadSuccess = $request->file('profile_photo_path')->move($url,$nombreimagen);
            $user->profile_photo_path = $url. $nombreimagen;
        }
        $user->save();

        return redirect()->back()->with("success", "¡Información del usuario actualizada con éxito!");
    }
}
