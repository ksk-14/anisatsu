<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/commonPart.css">
    <link rel="stylesheet" href="css/home.css">
    <title>アニサツ！</title>
    @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/js/home.jsx'])
</head>

<body>
    <header>
        <img class="logoImg" src="img/logo.svg" alt="ヘッダーロゴ画像">
        <nav class="nav">
            <ul>
                <li class="menuItem"><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div class="bodySpace">
        <div id="home"></div>
    </div>
</body>

</html>
