<html>

<head>
    <meta charset="utf-8">
    <script src="/build/js/app.js"></script>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="/build/css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
    <div class="ui  vertical masthead center aligned segment"
        style="min-height :500px; background-color:white; box-shadow: 1px 11px 1px ghostwhite;";>
        <div class="container">
            <div class="ui attached stackable menu">
                <div class="ui container">
                    <a class="item" href="{{ route('home') }}">
                        <i class="home icon"></i> Home
                    </a>
                    <a class="item" href="{{ route('memo.index') }}">
                        <i class="grid layout icon"></i> Memos
                    </a>
                    <a class="item" href="{{ route('feedback.index') }}">
                        <i class="mail icon"></i> Feedbacks
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
        <div class="ui text container">
            <div class="ui  header">
                <h2 class="ui  header" style="font-family:initial; color:lightgray;font-size:1.5em;">JUST DONT TRUST ANY
                    CONTENT
                    YOU READ ONLINE</h2>
                <div class="ui huge primary button" style="margin-top:18px; background-color:mediumorchid;">Get Started
                </div>
            </div>
        </div>
    </div>
    @yield('content')

</body>

</html>
