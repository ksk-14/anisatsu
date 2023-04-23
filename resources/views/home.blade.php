<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/home.css">
    <script src="{{ asset('js/annict.js') }}"></script>
    <script src="{{ asset('js/load.js') }}"></script>
    <title>アニサツ！</title>
</head>

<body>
    <header>
        <x-header></x-header>
    </header>
    <div class="bodySpace">
        <div id="home">
            <div class='contentCenter'>
                <p class='contentTitle'>考察するアニメを探す</p>
                <input class="searchInput" type="text">
                <p class='contentTitle pickup'>注目アニメ</p>
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