<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('adminlogout');
        $this->middleware('guest:network')->except('networklogout');
        $this->middleware('guest:sekolah')->except('sekolahlogout');
        $this->middleware('guest:valorant')->except('valorantlogout');
        $this->middleware('guest:webinar')->except('webinarlogout');
        $this->middleware('guest:ideathon')->except('ideathonlogout');
        $this->middleware('guest:workshop')->except('workshoplogout');
    }

    public function index(){
        $title = 'Login';
        $events = Event::get();
        return view('login', compact('title', 'events'));
    }

    public function login(Request $request){
        $data = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $event = $request->event;
        $sebagai = $request->sebagai;

        if($event == 'National Network Competition'){
            if($sebagai == 'peserta'){
                if(Auth::guard('network')->attempt(['username' => $data['username'], 'password' => $data['password']])){
                    $request->session()->regenerate();
                    return redirect()->intended(route('dashboardnnc'));
                }
            }

            if($sebagai == 'sekolah'){
                if(Auth::guard('sekolah')->attempt(['username' => $data['username'], 'password' => $data['password']])){
                    $request->session()->regenerate();
                    return redirect()->intended(route('dashboardschool'));
                }
            }
        }
        return back()->withInput($request->only('username'));
    }

    public function admin(){
        $title = 'Admin - Login';
        $events = Event::get();
        return view('superAdmins.login', compact('title', 'events'));
    }

    public function post(Request $request){
        $data = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if(Auth::guard('admin')->attempt(['username' => $data['username'], 'password' => $data['password']])) {
            $request->session()->regenerate();
            return redirect()->intended('admin/dashboard');
        }

        return back()->withInput($request->only('username'));
    }

    public function adminlogout(Request $request){
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('loginadmin');
    }

    public function sekolahlogout(Request $request){
        Auth::guard('sekolah')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    public function networklogout(Request $request){
        Auth::guard('network')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    public function valorantlogout(Request $request){
        Auth::guard('valorant')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
       return redirect()->route('login');
    }

    public function ideathonlogout(Request $request){
        Auth::guard('ideathon')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
       return redirect()->route('login');
    }

    public function webinarlogout(Request $request){
        Auth::guard('webinar')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
       return redirect()->route('login');
    }
    public function workshoplogout(Request $request){
        Auth::guard('workshop')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
