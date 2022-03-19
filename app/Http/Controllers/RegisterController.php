<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Network;
use App\Models\Sekolah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct(){
        $this->middleware('guest');
        $this->middleware('guest:network');
        $this->middleware('guest:sekolah');
        $this->middleware('guest:valorant');
        $this->middleware('guest:webinar');
        $this->middleware('guest:ideathon');
        $this->middleware('guest:workshop');
    }

    public function index(){
        $title = 'Register';
        $events = Event::get();
        return view('daftar', compact('title', 'events'));
    }

    public function nnc(){
        $title = 'Register - National Network Competition';
        $events = Event::get();
        $schools = Sekolah::get();
        return view('users.daftar', compact('title', 'events', 'schools'));
    }

    public function postnnc(Request $request){
        // dd($request);
        $sebagai = $request->sebagai;

        if($sebagai == 'peserta'){
            $data = $request->validate([
                'nama' => 'required|max:225',
                'username' => 'required|min:8|max:20|unique:networks',
                'email' => 'required|email:dns|unique:networks',
                'password' => 'required|min:8|max:20|same:password2',
                'id_sekolah' => 'required',
            ]);
            
            $data['password'] = Hash::make($data['password']);
            Network::create($data);

            $login = $request->validate([
                'username' => 'required',
                'password' => 'required',
            ]);

            if(Auth::guard('network')->attempt(['username' => $login['username'], 'password' => $login['password']])) {
                $request->session()->regenerate();
                return redirect()->intended(route('dashboardnnc'));
            }

            return redirect()->intended('login');
        }

        if($sebagai = 'sekolah'){
            $data = $request->validate([
                'nama' => 'required|max:225',
                'username' => 'required|min:8|max:20|unique:sekolahs',
                'email' => 'required|email:dns|unique:sekolahs',
                'password' => 'required|min:8|max:20|same:password2',
                'pj' => 'required',
            ]);

            $data['password'] = Hash::make($data['password']);
            Sekolah::create($data);

            $login = $request->validate([
                'username' => 'required',
                'password' => 'required',
            ]);

            if(Auth::guard('sekolah')->attempt(['username' => $login['username'], 'password' => $login['password']])) {
                $request->session()->regenerate();
                return redirect()->intended(route('dashboardschool'));
            }

            return redirect()->intended('login');
        }

        return route('registernnc');
    }

    public function valorant(){
        $title = 'Register - Valorant';
        $events = Event::get();
        return view('valorants.daftar', compact('title', 'events'));
    }

    public function postvalorant(Request $request){
        $data = $request->validate([
            'nama' => 'required|max:225',
            'ketua' => 'required|max:225',
            'username' => 'required|min:8|max:20|unique:valorants',
            'email1' => 'required|email:dns|unique:valorants',
            'univ' => 'required|max:225',
            'password' => 'required|min:8|max:20|same:password2',
        ]);

        $data['password'] = Hash::make($data['password']);
        Sekolah::create($data);

        $login = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if(Auth::guard('valorant')->attempt(['username' => $login['username'], 'password' => $login['password']])) {
            $request->session()->regenerate();
            return redirect()->intended(route('dashboarvalorant'));
        }
        return route('registervalorant');
    }
}
