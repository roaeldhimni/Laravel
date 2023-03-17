<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    public function show(){
        if(auth()->check()){
            //$posts = auth()->user()->posts()->latest()->get();
            return view('homepage');
        }
        else{
            return view('homepage');
        }
    }
    public function test(){
        return view('test');
    }
    public function superadmin(){
        return view('superadmin');


    }


    public function register(Request $request){
        $incommingFields = $request->validate([
            'username'=>['required', 'min:3','max:20',Rule::unique('users','username')],
            'email'=>['required', 'min:3','max:20',Rule::unique('users','email')],
            'password'=>['required', 'min:8','confirmed']
        ]);
        $incommingFields['password'] = Hash::make($incommingFields['password']);
        $user = User::create($incommingFields);
        auth()->attempt([
            'username'=>$user->username,
            'password'=>$user->password
        ]);
        return redirect()->route('user.show')->with('status','You have been registred successfully')->with('color','success');
    }

    public function login(Request $request){
        $incommingFields =  $request->validate([
            'loginusername'=>['required'],
            'loginpassword'=>['required'],
        ]);
        $user = User::where('username', $incommingFields['loginusername'])->first();
    
        if(!$user){
            return redirect()->route('user.show')->with('status','Invalid login.');
        }
    
        if($user->is_active == 0){
            //return redirect()->route('user.show')->with('status','Your account is inactive.');
            return back()->with('status', 'Cet utilisateur est désactivé de la part de superadmin.');
        }

        if(auth()->attempt(['username'=>$incommingFields['loginusername'],'password'=>$incommingFields['loginpassword']])){
            $request->session()->regenerate();
            if(auth()->user()->role == 'admin'){
                
                return redirect()->route('user.test')->with('status','You have been logged in successfully')->with('color','success');
            }
            else{
                return redirect()->route('user.superadmin')->with('status','You have been logged in successfully')->with('color','success');
            }
            
        }
        else{
            return redirect()->route('user.show')->with('status','Invalid login.');
        }
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('user.show')->with('status','You have been logged out successfully')->with('color','success');
    }
}
 