@extends('home-layout')
@section('content')
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5>Feedbacks</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('feedback.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="feedback">Send Your Feedbacks</label>
                                <textarea id="feedback" name="message" class="form-control" rows="4" cols="180"></textarea>
                            </div>
                            <input type="submit" class="form-control btn btn-success mt-6" name="submit" value="Share" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
