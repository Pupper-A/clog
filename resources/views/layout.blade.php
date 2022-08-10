@extends('home-layout')
@section('content')
<div class="container">
    <div class="row mt-5 justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5>Create Memo</h5>
                </div>

                <div class="card-body">
                    @yield('card-body')
                </div>
            </div>
            <div class=" mt-5  table-responsive">
                @yield('show_memos')
            </div>
        </div>
    </div>
    </div>
@endsection