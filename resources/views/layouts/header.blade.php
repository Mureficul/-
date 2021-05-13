<html>
<head>
    <meta charset="UTF-8" content="text/css" http-equiv="Content-Type">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="images/Ok.png"/>
    <title>@yield('title')</title>
</head>
<body>
<div class="space">
<div class="@yield('select_main')">
        <header>
            <div class="header-left">
                <a href="/Main">
                    <img  src="images/logo.png"style=height:100px;width:120px;"></a>
            </div>
            <div class="header-left-right">
                <h2>Чего хочешь <br>То и будет</h2>
            </div>

            <div class="header-center">

                <form>
                    <input type="search" placeholder="Искать здесь...">
                    <button type="submit">

                        <img  src="images/search.png"height="20px"width="20px">

                    </button>
                </form>

            </div>


            <div class="header-right">
                <a href="/add">
                    <img class="add_img" src="images/add.png" width="40px">
                </a>

                <a href="/profile">
                    <img class="profile_img" src="images/profile.png" width="40px">
                </a>

            </div>


        </header>

        <div class="home">

            <div class="left">
                <a href="/Main"><img class="maim_img" src="images/main.png"style=width:45px;margin:15px;"></a>
                <a href="/change"><img class="ref_img" src="images/ref.png"style=width:45px;margin:15px;"></a>
                <a href="/settings"><img class="settings_img" src="images/settings.png"style=width:45px;margin:15px;"></a>
            </div>

            <div class="bottom">

                <a href="/Greetings!"><img class="info_img" src="images/info.png"></a>
                <a href="/"><img class="log-out_img" src="images/exit.png"></a>

            </div>
        </div>
    @yield('main')
</div>
</div>
</body>
</html>
