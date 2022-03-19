<?php

namespace App\Http\Controllers;

use App\Models\Network;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NetworkController extends Controller
{
    public function __construct(){
        $this->middleware('auth:network');
    }

    public function index(){
        $user = Network::where('id', Auth::guard('network')->user()->id)->first();
        $title = 'NNC - Dashboard';
        return view('users.beranda', compact('user', 'title'));
    }

    public function profile(){
        $user = Network::where('id', Auth::guard('network')->user()->id)->first();
        $title = 'NNC - Profile';
        return view('users.profil', compact('user', 'title'));
    }

    public function editprofile(){
        $user = Network::where('id', Auth::guard('network')->user()->id)->first();
        $title = 'NNC - Edit Profile';
        return view('users.editprofile', compact('user', 'title'));
    }

    public function post(Request $request){

    }
}
