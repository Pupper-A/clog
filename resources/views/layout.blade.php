<Html>

<head>
    <title>
        @yield('title')
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>create memo</h5>
                    </div>
                
                <div class="card-body">
                    @yield('content')
                </div>
                </div>
            </div>
        </div>
    </div>

</body>

</Html>