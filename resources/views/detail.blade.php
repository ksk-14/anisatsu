<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    {{-- <script src="{{ asset('js/homeView.js') }}"></script> --}}
    <title>アニサツ！</title>
</head>

<body>
    <header>
        <x-header></x-header>
    </header>
    <div class="bodySpace">
        <div id="home">
            <div class='contentCenter'>
                <p class='contentTitle pickup'>{{ $works['title'] }}</p>
                @foreach($episodes as $episode)
                    <p class='contentTitle pickup'>{{ $episode['title'] }}</p>
                    <p class='contentTitle pickup'>{{ $episode['number'] }}</p>
                @endforeach
                <div class="works">
                    <ul id="works-list">
                    </ul>
                </div>
                <div id="works"></div>
                <div id="work-detail"></div>
            </div>
        </div>
    </div>
</body>

</html>