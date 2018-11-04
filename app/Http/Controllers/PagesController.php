<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function settings(){
        return view('pages.settings');
    }

    public function stats(){
        return view('pages.stats');
    }

    public function profile(){
        return view('pages.profile');
    }

    public function create_poll(){
        return view('pages.create_poll');
    }

    public function existing_polls(){
        return view('pages.existing_polls');
    }

    public function about(){
        return view('pages.about');
    }



}
