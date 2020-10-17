<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @php
        $setting = \App\Setting::firstOrCreate(['id' => 1]);
        $meta = \App\Seo::firstOrCreate(['id' => 1]);
    @endphp

    <title>{{$setting->title}}</title>
    {!! $meta->meta !!}

    <!-- styles -->
    <link id="favicon" rel="icon"
          href="{{asset('storage') .'/'. $setting->favicon}}"
          type="image/x-icon">
    <link rel="stylesheet" href="{{asset('frontend/asset/normalize.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/asset/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/asset/custom.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Pacifico" rel="stylesheet">

    <style>
        #background{

        {!! $setting->bgcolor !!}

        }
    </style>

</head>

<body>

<div style="overflow:hidden !important; position: relative !important;" id="container">

    <div id="background"></div>

    <nav role="navigation">
        <div id="menuToggle">

            <input type="checkbox"/>

            <span></span>
            <span></span>
            <span></span>


            <ul id="menu">
                <a href="{{url('/')}}">
                    <li>IG Font Generator</li>
                </a>
                <a href="{{route('frontend.caption')}}">
                    <li>Caption Generator</li>
                </a>

            </ul>
        </div>
    </nav>

    <div id="logo-cont">
        <a href="{{url('/')}}"><img src="{{asset('storage') .'/'. $setting->logo}}" id="logo" alt="logo"></a>
    </div>

    {{--main contents--}}

    @yield('contents')


    {{--footer--}}
    <br>
    <footer style="text-align: center">
        <a href="{{route('frontend.contact')}}">Contact Us</a>
    </footer>
    <br><br>

    <script src="{{asset('frontend/asset/script.min.js')}}"></script>
{{--    <script src="{{asset('frontend/asset/script.js')}}"></script>--}}
    <script src="{{asset('frontend/asset/upup.min.js')}}"></script>
    <script>
        function wholeCopy(event) {
            // let text = event.target.previousSibling;
            let text = event.target.innerHTML;
            let copyText = '<span style="text-align: center;font-weight: bold;display:table;margin:0 auto;">Text Copied!</span>';

            let input = document.createElement('input');
            input.setAttribute('value', text);
            document.body.appendChild(input);
            input.select();
            let result = document.execCommand('copy');
            document.body.removeChild(input);

            event.target.innerHTML= copyText;
            setTimeout(() => {event.target.innerHTML= text;}, 700)

            console.log(text);
        }

        function copyText(event) {
            // let text = event.target.previousSibling;
            let text = event.target.previousSibling.wholeText;

            let input = document.createElement('input');
            input.setAttribute('value', text);
            document.body.appendChild(input);
            input.select();
            let result = document.execCommand('copy');
            document.body.removeChild(input);
        }
    </script>
    @stack('js')


</div>

</body>
</html>
