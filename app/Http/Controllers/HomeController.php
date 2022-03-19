<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Partner;
use App\Models\Sponsor;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    public function index(){
        $date = Carbon::now();
        $open = new Carbon('10 March 2022');
        if ($date < $open){
            $title = 'Comingsoon';
            return view('comingsoon', compact('title', 'sponsors', 'partners'));
        }
        else {
            $title = 'Firetech 2022';
            $events = Event::get();
            $diamonds = Sponsor::where('status', 4)->get();
            $platinums = Sponsor::where('status', 3)->get();
            $golds = Sponsor::where('status', 2)->get();
            $silvers = Sponsor::where('status', 1)->get();
            $partners = Partner::get();
            return view('countdownpage', compact('events', 'title', 'partners', 'platinums', 'diamonds', 'golds', 'silvers'));
        }
    }

    public function aboutus(){
        $title = 'About Us';
        $events = Event::get();
        $diamonds = Sponsor::where('status', 4)->get();
        $platinums = Sponsor::where('status', 3)->get();
        $golds = Sponsor::where('status', 2)->get();
        $silvers = Sponsor::where('status', 1)->get();
        $partners = Partner::get();
        return view('aboutUs', compact('events', 'title', 'partners', 'platinums', 'diamonds', 'golds', 'silvers'));
    }

    public function event(Event  $event){

        $events = Event::get();
        $jenis = Event::where('slug', $event)->get();
        $slug = $event;
        $title = "Event";
        return view('event', compact('events', 'title', 'slug'));
    }
}
