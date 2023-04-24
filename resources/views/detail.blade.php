<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
    <script src="{{ asset('js/detail.js') }}"></script>
    <title>アニサツ！</title>
</head>

<body>
    <header>
        <x-header></x-header>
    </header>
    <div class="bodySpace">
        <div id="home">
            <div class='contentCenter'>
                <div class="cards">
                    <div class="card">
                        {{ dd($episodes) }}
                        <img src="{{ $works['images']['facebook']['og_image_url'] }}" alt="" class="img">
                        <div class="textbox">
                            <div class="t-title">
                                {{ $works['title'] }}
                            </div>
                            <div class="work_info">
                                <span class="season_info">
                                    {{ $works['season_name_text'] }}
                                </span>
                                <a class="web_site" href="{{ $works['official_site_url'] }}" target="_blank">公式サイト</a>
                            </div>
                            <div>
                                <div class="pd-t-episode">エピソード</div>
                                <select class="pd-episode" name=”item” id="pd-episode">
                                    <option value="">--</option>
                                    @foreach ($episodes as $episode)
                                        @if ($episode['title'])
                                            <option value="{{ $episode['id'] }}">{{ $episode['number_text'] }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <p class="think-label">考察スレ 一覧</p>
                    <div class="card think-index-board">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
