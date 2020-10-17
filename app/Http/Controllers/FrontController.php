<?php

namespace App\Http\Controllers;

use App\Caption;
use App\Content;
use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    public function index()
    {
        $homepage = Content::where('page', 'homepage')->first();
        return view('frontend.home', compact('homepage'));
    }

    public function contact()
    {
        $homepage = Content::where('page', 'homepage')->first();
        return view('frontend.contact');
    }

    public function caption()
    {
        $setting = Setting::all();
        $content = Content::where('page', 'caption')->first();
        $captions = Caption::inRandomOrder()->limit($setting[0]->limit)->get();

        foreach ($captions as $item){
            $captionArray[] = $item->caption;
        }
        $captionArray = json_encode($captionArray);

        return view('frontend.caption', compact('captionArray', 'content'));
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Mail::send('contact_email',
            array(
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'user_message' => $request->message,
            ), function ($message) use ($request) {
                $message->from($request->email);
                $message->to('naimvaiya@gmail.com');
            });

        return back()->with('success', 'Thank you for contacting us!');

    }

}
