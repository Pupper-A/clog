<Html>

<head>
    <title>
        @yield('title')
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5>Create Memo</h5>
                    </div>

                    <div class="card-body">
                        @yield('content')
                    </div>
                </div>
                <div class=" mt-5  table-responsive">
                    @yield('show_memos')
                </div>
            </div>
        </div>
    </div>

</body>

</Html>