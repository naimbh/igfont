<?php

namespace App\Http\Controllers;

use App\Caption;
use App\Content;
use App\Seo;
use App\Setting;
use Illuminate\Support\Facades\Artisan;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('backend.dashboard');
    }

    public function content()
    {
        $homepage = Content::firstOrCreate(['id' => 1], ['page' => 'homepage']);
        $caption = Content::firstOrCreate(['id' => 2], ['page' => 'caption']);
        return view('backend.content', compact('homepage', 'caption'));
    }

    public function caption()
    {
        $captions = Caption::latest()->get();
        return view('backend.caption', compact('captions'));
    }

    public function seo()
    {
        $meta = Seo::firstOrCreate(['id' => 1]);
        return view('backend.seo', compact('meta'));
    }

    public function setting()
    {
        $settings = Setting::firstOrCreate(['id' => 1]);
        return view('backend.setting', compact('settings'));
    }

    public function profile()
    {
        $user = auth()->user();
        return view('backend.profile', compact('user'));
    }

    //optimize all
    public function optimize()
    {
        Artisan::call('optimize:clear');
        return 'cleared';
    }
}
