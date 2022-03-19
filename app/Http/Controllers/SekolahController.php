<?php

namespace App\Http\Controllers;

use App\Models\Network;
use App\Models\Sekolah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SekolahController extends Controller
{
    public function __construct(){
        $this->middleware('auth:sekolah');
    }

    public function index(){
        $user = Sekolah::where('id', Auth::guard('sekolah')->user()->id)->first();
        $title = 'School - Dashboard';
        return view('admins.beranda', compact('user', 'title'));
    }

    public function profile(){
        $user = Sekolah::where('id', Auth::guard('sekolah')->user()->id)->first();
        $title = 'School - Profile';
        return view('admins.profil', compact('user', 'title'));
    }

    public function editprofile(){
        $user = Sekolah::where('id', Auth::guard('sekolah')->user()->id)->first();
        $title = 'School - Edit Profile';
        return view('admins.editprofile', compact('user', 'title'));
    }

    public function postprofile(Request $request){
        $attr = $request->validate([
            'nama' => 'required|max:225',
            'alamat' => 'required|max:225',
            'email' => 'required|email:dns|unique:sekolahs,email,' . auth()->id(),
            'telepon' => 'required|numeric',
            'pj' => 'required|max:225',
            'jabatan_pj' => 'required|max:225',
            'nip_pj' => 'required|numeric',
            'hp_pj' => 'required|numeric',
            'logo' => 'required|image|file|max:8192',
        ]);

        if($request->file('logo')){
            $attr['logo'] = $request->file('logo')->store('post-foto');
        }

        auth()->user()->update($attr);
        return redirect()->intended(route('profileschool'))->with('status', 'Data berhasil ditambahkan');
    }

    public function student(){
        $user = Sekolah::where('id', Auth::guard('sekolah')->user()->id)->first();
        $title = 'School - Daftar Siswa';
        $siswas = Network::where('sekolah_id', $user['id'])->all();
        return view('admins.dataSiswa', compact('user', 'title','siswas'));
    }
}
