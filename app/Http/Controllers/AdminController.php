<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Event;
use App\Models\Ideathon;
use App\Models\Network;
use App\Models\Partner;
use App\Models\Sekolah;
use App\Models\Sponsor;
use App\Models\Valorant;
use App\Models\Webinar;
use App\Models\Workshop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }

    public function index(){
        $user = Admin::where('id', Auth::guard('admin')->user()->id)->first();
        $title = 'Admin - Dashboard';
        return view('superAdmins.beranda', compact('title', 'user'));
    }

    public function users(){
        $nncs = Network::all();
        $valos = Valorant::get();
        $ideas = Ideathon::get();
        $uiuxs = Workshop::get();
        $its = Webinar::get();
        $user = Admin::where('id', Auth::guard('admin')->user()->id)->first();
        $title = 'Admin - Users';
        return view('superAdmins.dataSiswa', compact('nncs', 'valos', 'ideas', 'uiuxs', 'its', 'title', 'user'));
    }

    public function schools(){
        $schools = Sekolah::all();
        $user = Admin::where('id', Auth::guard('admin')->user()->id)->first();
        $title = 'Admin - Schools';
        return view('superAdmins.dataSekolah', compact('schools', 'user', 'title'));
    }

    public function  deleteschool($id){
        $sekolah = Sekolah::find($id);
        if($sekolah->delete()){
            return redirect()->route('schools');
        }
        return redirect()->route('schools');
    }

    public function events(){
        $events = Event::get();
        $user = Admin::where('id', Auth::guard('admin')->user()->id)->first();
        $title = 'Admin - Events';
        return view('superAdmins.event', compact('events', 'user', 'title'));
    }

    public function sm(){
        $sponsors = Sponsor::get();
        $partners = Partner::get();
        $user = Admin::where('id', Auth::guard('admin')->user()->id)->first();
        $title = 'Admin - Sponsors and Media Partners';
        return view('superAdmins.dataSM', compact('sponsors', 'partners', 'user', 'title'));
    }

    public function  deletesponsor($id){
        $sponsor = Sponsor::find($id);
        if($sponsor->delete()){
            return redirect()->route('sm');
        }
        return redirect()->route('sm');
    }

    public function deletepartner($id) {
        Partner::where('id', $id)->delete();
        return back();
    }
}
