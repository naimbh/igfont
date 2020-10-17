@extends('frontend.layout')

@section('contents')

    <div id="main">

        <div class="content-box" id="input-wrapper">
            <textarea data-gramm_editor="false" id="input" placeholder="Type your text here :)" value=""></textarea>

        </div>
        <br>
        <div id="caption-btn">
            <button onclick="randCaption()">Generate Random Caption</button>
        </div>

        @push('js')

            <script>
                function randCaption() {
                    var items = {!! $captionArray !!};
                    var random = items[Math.floor(Math.random() * items.length)];

                    var element = document.getElementById('input');
                    element.value = random;

                    element.dispatchEvent(new Event('keyup'));
                }
            </script>

        @endpush

        <div class="content-box" id="output-wrapper">
            <div id="output"><p style="margin: 0;opacity: 0.7;"><span style="display:inline-block; width:max-content;"> (◕‿◕) </span>
                </p></div>
        </div>

        <div class="content-box" id="description" style="padding:1em !important;">
            <div style="line-height: 1.15 !important;">
                {!! $content->content !!}
            </div>
        </div>

    </div>

@endsection

