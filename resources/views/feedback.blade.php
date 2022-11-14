@extends('home-layout')
@section('content')
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h6 class="header-text">Feedbacks</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('feedback.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="lable" for="feedback">Send Your Feedbacks</label>
                                <textarea id="feedback" name="message" class="form-control" rows="4" cols="180"></textarea>
                            </div>
                            <div class="row justify-content-center">
                                <input type="submit" class=" all-btn" name="submit" value="Share" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
