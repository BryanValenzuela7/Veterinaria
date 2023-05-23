<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
class MainController extends Controller
{
    function login(){
        return view('auth.login');
    }
    function register(){
        return view('auth.register');
    }
    function save(Request $request){

        //Validar request
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:5|max:12'
        ]);

        $admin = new Admin;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $save = $admin->save();
        if($save){
            return back() -> with('Exito', 'Nuevo usuario ha sido agregado a la base de datos');
        } else{
            return back() -> with('Error', 'Algo esta fallando, intentelo mas tarde');
        }

    }
    function checkk(Request $request){
        //Validar request
        $request->validate([
           'email' => 'required|email', 'password' => 'required|min:5|max:12'

        ]);

        $userInfo = Admin::where('email',"=", $request->email)->first();

        if($userInfo=== null){
            return back() -> with('Error', 'Tu correo no esta bien escrito o no ha sido registrado');
        } else {
            //Check password
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser',$userInfo->id);
                return redirect('admin/dashboard');
            } else{
                return back() -> with('Error', 'La contraseña es incorrecta');
            }
        }
    }
    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/auth/login');
        }
    }
    function dashboard(){
        $data = ['LoggedUserInfo' => Admin::where('id','=',session("LoggedUser"))->first()];
        return view('admin.dashboard',$data);
    }
    function settings(){
        $data = ['LoggedUserInfo' => Admin::where('id','=',session("LoggedUser"))->first()];
        return view('admin.settings',$data);
    }
    function profile(){
        $data = ['LoggedUserInfo' => Admin::where('id','=',session("LoggedUser"))->first()];
        return view('admin.profile',$data);
    }
    function staff(){
        $data = ['LoggedUserInfo' => Admin::where('id','=',session("LoggedUser"))->first()];
        return view('admin.staff',$data);
    }

}
