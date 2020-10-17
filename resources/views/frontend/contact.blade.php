@extends('frontend.layout')

@section('contents')

    <div id="main">

        <div class="content-box" id="description" style="padding:1em;">
            <div>
                <h1 id="instagram-fonts">Contact Us</h1>

                @if(session()->has('success'))
                    <div style="text-align: center; color: green;font-weight: bold;">{!! session('success') !!}</div>
                @endif

                <form action="{{route('frontend.sendEmail')}}" method="post">
                    @csrf

                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" placeholder="Your name.." pattern=[A-Z\sa-z]{3,20} required><br>

                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Your email.." required><br>

                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" placeholder="Subject" required><br>

                    <label for="message">Write your message</label>
                    <textarea id="message" name="message" placeholder="Write something.." style="height:170px" required></textarea><br>
                    <input type="submit" value="Send Message">
                </form>


            </div>
        </div>

    </div>

@endsection

