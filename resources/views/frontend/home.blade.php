@extends('frontend.layout')

@section('contents')

    <div id="main">

        <div class="content-box" id="input-wrapper">
            <textarea data-gramm_editor="false" id="input" placeholder="Type your text here :)" value=""></textarea>
        </div>
        <div class="content-box" id="output-wrapper">
            <div id="output"><p style="margin: 0;opacity: 0.7;"><span style="display:inline-block; width:max-content;"> (◕‿◕) </span>
                </p></div>
        </div>

        <div class="content-box" id="description" style="padding:1em !important;">
            <div style="line-height: 1.15 !important;">
                {!! $homepage->content !!}
            </div>
        </div>

    </div>

    <a id="capBtn" href="{{route('frontend.caption')}}">
        Caption Generator
    </a>


@endsection

