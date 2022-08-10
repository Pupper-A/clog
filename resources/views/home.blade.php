@extends('home-layout')
@section('colorful')
    <div class="ui text container">
        <div class="ui  header">
            <h2 class="ui  header">JUST DONT TRUST ANY CONTENT YOU READ ONLINE</h2>
            <h4>Simplicity, Is The Art Of Maximizing The Work Not Essential To Do</h4>
            <div class="ui huge primary button" style="margin-top:18px;">get started</div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6" style="margin-top:50px;">
            <div class="ui divided items">
                @include('memo-card', [
                    'name' => 'ali',
                    'image' => 'images/1.png',
                    'description' => 'hi dear this is test',
                    'tags' => ['math', 'physics', 'php'],
                ])
                @include('memo-card', [
                    'name' => 'nadi',
                    'image' => 'images/2.png',
                    'description' => 'hi dear this is test reset Links abs formatters keys abstraction',
                    'tags' => ['car', 'memo', 'gaz'],
                ])
                @include('memo-card', [
                    'name' => 'shadi',
                    'image' => 'images/3.png',
                    'description' =>
                        ' baray mesal ma bayad hi dear this is test reset Links abs formatters keys abstraction',
                    'tags' => ['206', 'white', 'oil'],
                ])
            @endsection
