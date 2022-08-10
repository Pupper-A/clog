<html>
    <head>
        <meta charset="utf-8">
        <script src="/dist/semantic.min.js"></script>
    <link  rel="stylesheet" href="main.css">    

    <link  rel="stylesheet" href="/dist/semantic.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="ui  vertical masthead center aligned segment" style="min-height :500px; background-color:white;";>
    <div class="container">
        <div class="ui attached stackable menu">
            <div class="ui container">
                <a class="item" href="{{route('home')}}">
                    <i class="home icon"></i> Home
                </a>
                <a class="item" href="{{route('memo.index')}}">
                    <i class="grid layout icon"></i> Memos
                </a>
                <a class="item">
                    <i class="mail icon"></i> Messages
                </a>
                <div class="ui simple dropdown item">
                    More
                    <i class="dropdown icon"></i>
                    <div class="menu">
                        <a class="item"><i class="edit icon"></i> Edit Profile</a>
                        <a class="item"><i class="globe icon"></i> Choose Language</a>
                        <a class="item"><i class="settings icon"></i> Account Settings</a>
                    </div>
                </div>
                <div class="right item">
                    <div class="ui large buttons">
                        <button class="ui button">Log In</button>
                        <div class="or"></div>
                        <button class="ui button">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @yield('colorful')
</div>
    @yield('content')
    
</body>
</html>