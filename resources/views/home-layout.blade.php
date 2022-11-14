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
                <div>
                    <a class="ui huge primary button" style="margin-top:18px; background-color:darkgray;"
                        href="{{ route('memo.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-pencil" viewBox="0 0 16 16">
                            <path
                                d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                        </svg>
                        Write A Memo
                    </a>
                </div>
            </div>
        </div>
    </div>
    @yield('content')

</body>

</html>
