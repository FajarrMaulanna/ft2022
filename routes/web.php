<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NetworkController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\RegisterController;
use App\Models\Event;
use App\Models\Sekolah;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about_us', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('event/{event:slug}', [HomeController::class, 'event']);

Route::get('admin/dashboard', [AdminController::class, 'index'])->name('dashboard');
Route::get('admin/users', [AdminController::class, 'users'])->name('users');
Route::get('admin/schools', [AdminController::class, 'schools'])->name('schools');
Route::post('admin/schools/school/delete/{id}', [AdminController::class, 'deleteschool']);
Route::get('admin/sponsors_partners', [AdminController::class, 'sm'])->name('sm');
Route::post('admin/sponsors_partners/sponsor/delete/{id}', [AdminController::class, 'deletesponsor']);
Route::post('admin/sponsors_partners/partner/delete/{id}', [AdminController::class, 'deletepartner']);
Route::get('admin/events', [AdminController::class, 'events'])->name('events');

Route::get('register', [RegisterController::class, 'index'])->name("register");
Route::get('register/nnc', [RegisterController::class, 'nnc'])->name('registernnc');
Route::post('register/nnc', [RegisterController::class, 'postnnc']);
Route::get('register/valorant', [RegisterController::class, 'valorant'])->name('registervalorant');
Route::post('register/valorant', [RegisterController::class, 'postvalorant']);
Route::get('register/ideathon', [RegisterController::class, 'ideathon'])->name('registerideathon');
Route::get('register/it', [RegisterController::class, 'it'])->name('registerit');
Route::get('register/uiux', [RegisterController::class, 'uiux'])->name('registeruiux');

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('r153a10n9w1th1t', [LoginController::class, 'admin'])->name('loginadmin');
Route::post('r153a10n9w1th1t', [LoginController::class, 'post']);
Route::get('admin/logout', [LoginController::class, 'adminlogout'])->name('adminlogout');
Route::get('school/logout', [LoginController::class, 'sekolahlogout'])->name('sekolahlogout');
Route::get('nnc/logout', [LoginController::class, 'networklogout'])->name('networklogout');
Route::get('ideathon/logout', [LoginController::class, 'ideathonlogout'])->name('ideathonlogout');
Route::get('valorant/logout', [LoginController::class, 'valorantlogout'])->name('valorantlogout');
Route::get('uiux/logout', [LoginController::class, 'workshoplogout'])->name('workshoplogout');
Route::get('it/logout', [LoginController::class, 'webinarlogout'])->name('webinarlogout');

Route::get('school/dashboard', [SekolahController::class, 'index'])->name('dashboardschool');
Route::get('school/profile', [SekolahController::class, 'profile'])->name('profileschool');
Route::get('school/profile/edit/{user}', [SekolahController::class, 'editprofile'])->name('editschool');
Route::put('school/profile/edit/{user}', [SekolahController::class, 'postprofile']);
Route::get('school/students', [SekolahController::class, 'students'])->name('students');

Route::get('nnc/dashboard', [NetworkController::class, 'index'])->name('dashboardnnc');
Route::get('nnc/profile', [NetworkController::class, 'profile'])->name('profilennc');
Route::get('nnc/profile/edit', [NetworkController::class, 'edit'])->name('editnnc');
Route::post('nnc/profile/edit', [NetworkController::class, 'post']);
// Route::get('nnc/test', [NetworkController::class, 'test'])->name('testnnc');

Route::get('valorant/dashboard', [NetworkController::class, 'index'])->name('dashboardvalorant');
Route::get('valorant/profile', [NetworkController::class, 'profile'])->name('profilevalorant');
Route::get('valorant/profile/edit', [NetworkController::class, 'edit'])->name('editvalorant');
Route::post('valorant/profile/edit', [NetworkController::class, 'post']);
Route::get('valorant/chart', [NetworkController::class, 'chart'])->name('chartvalorant');




// Route::get('/countdown', function () {
//     $data['title'] = 'Countdownpage';
//     return view('countdownpage', $data);
// });

// Route::get('/tentang kami', function () {
//     $data['title'] = "Tentang Kami";
//     return view('aboutUs', $data);
// })->name("aboutUs");

// Route::get('/event', function () {
//     $data['title'] = "Event";
//     return view('event', $data);
// })->name("event");

// Route::get('/user/login', function () {
//     $data['title'] = "Login User";
//     return view('users.login', $data);
// })->name('user/login');

// Route::get('/user', function () {
//     $data['title'] = "Beranda";
//     return view('users.beranda', $data);
// })->name('user');

// Route::get('/user/profil', function () {
//     $data['title'] = "Profil Peserta";
//     return view('users.profil', $data);
// })->name('user/profil');

// Route::get('/user/profil/edit', function () {
//     $data['title'] = "Profil Peserta";
//     return view('users.editProfile', $data);
// })->name('user/profil/edit');

// Route::get('/admin/login', function () {
//     $data['title'] = "Login User";
//     return view('admins.login', $data);
// })->name('admin/login');

// Route::get('/admin', function () {
//     $data['title'] = "Beranda";
//     return view('admins.beranda', $data);
// })->name('admin');

// Route::get('/admin/profil', function () {
//     $data['title'] = "Profil Peserta";
//     return view('admins.profil', $data);
// })->name('admin/profil');

// Route::get('/admin/profil/edit', function () {
//     $data['title'] = "Profil Peserta";
//     return view('admins.editProfile', $data);
// })->name('admin/profil/edit');

// Route::get('/admin/daftarSiswa', function () {
//     $data['title'] = "Daftar Siswa";
//     return view('admins.dataSiswa', $data);
// })->name('admin/daftarSiswa');

// Route::get('/superAdmin/login', function () {
//     $data['title'] = "Super Admin";
//     return view('superAdmins.login', $data);
// })->name('superAdmin/login');

// Route::get('/superAdmin', function () {
//     $data['title'] = "Beranda";
//     return view('superAdmins.beranda', $data);
// })->name('superAdmin');

// Route::get('/superAdmin/siswa', function () {
//     $data['title'] = "Daftar Siswa";
//     return view('superAdmins.dataSiswa', $data);
// })->name('superAdmin/siswa');

// Route::get('/superAdmin/sekolah', function () {
//     $data['title'] = "Daftar Sekolah";
//     return view('superAdmins.dataSekolah', $data);
// })->name('superAdmin/sekolah');

// Route::get('/superAdmin/sm', function () {
//     $data['title'] = "Daftar Sponsorship dan Media Partner";
//     return view('superAdmins.dataSM', $data);
// })->name('superAdmin/sm');

// Route::get('/superAdmin/event', function () {
//     $data['title'] = "Daftar Event";
//     return view('superAdmins.event', $data);
// })->name('superAdmin/event');

// Route::get('/valorant/login', function (){
//     $data['title'] = "Login User";
//     return view('valorants.login', $data);
// });

// Route::get('/valorant/register', function (){
//     $data['title'] = "Login User";
//     return view('valorants.register', $data);
// })->name("valorant/register");

// Route::get('/valorant/login', function (){
//     $data['title'] = "Login User";
//     return view('valorants.login', $data);
// })->name("valorant/login");

// Route::get('/valorant', function (){
//     $data['title'] = "Beranda";
//     return view('valorants.beranda', $data);
// })->name("valorant");

// Route::get('/valorant/profil', function (){
//     $data['title'] = "Profil Tim";
//     return view('valorants.profil', $data);
// })->name("valorant/profil");

// Route::get('/valorant/profil/edit', function (){
//     $data['title'] = "Profil Tim";
//     return view('valorants.editProfil', $data);
// })->name("valorant/profil/edit");

// Route::get('/valorant/bagan', function (){
//     $data['title'] = "Bagan Pertandingan";
//     return view('valorants.bagan', $data);
// })->name("valorant/bagan");

// Route::get('ideathon/register', function (){
//     $data['title'] = "Login User";
//     return view("ideathons.register", $data);
// })->name("ideathon/register");

// Route::get('ideathon/login', function (){
//     $data['title'] = "Login User";
//     return view("ideathons.login", $data);
// })->name("ideathon/login");

// Route::get('/ideathon', function (){
//     $data['title'] = "Beranda";
//     return view('ideathons.beranda', $data);
// })->name("ideathon");

// Route::get('/ideathon/profil', function (){
//     $data['title'] = "Profil Tim";
//     return view('ideathons.profil', $data);
// })->name("ideathon/profil");

// Route::get('/ideathon/profil/edit', function (){
//     $data['title'] = "Profil Tim";
//     return view('ideathons.editProfil', $data);
// })->name("ideathon/profil/edit");
// // Route::get('/superAdmin/sm', function () {
// //     $data['title'] = "Daftar Sponsorship dan Media Partner";
// //     return view('superAdmins.dataSM', $data);
// // })->name('superAdmin/sm');

Route::get("daftar", function () {
    $data['title'] = "Register";
    $data['events'] = Event::get();
    return view("daftar", $data);
})->name("daftar");

Route::get("daftar/nnc", function () {
    $data['title'] = "Register";
    $data['events'] = Event::get();
    $data['sekolahs'] = Sekolah::get();
    return view("users.daftar", $data);
})->name("daftar/nnc");

Route::get("daftar/valorant", function () {
    $data['title'] = "Register";
    $data['events'] = Event::get();
    return view("valorants.daftar", $data);
})->name("daftar/valorant");

Route::get("daftar/ideathon", function () {
    $data['title'] = "Register";
    $data['events'] = Event::get();
    $data['sekolahs'] = Sekolah::get();
    return view("ideathons.daftar", $data);
})->name("daftar/ideathon");
