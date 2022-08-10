<?php use carbon\carbon; ?>
@extends('home-layout')
@section('content')
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Create Memo</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('memo.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="memo">Share Memory</label>
                                <textarea id="memo" class="form-control" name="memo" rows="4" cols="180"></textarea>
                            </div>
                            <input type="submit" class="btn btn-success mt-6" name="submit" value="Send" />
                        </form>
                    </div>
                </div>
                <div class=" table-responsive mt-5">
                    @if (count($memos) > 0)
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>memo</th>
                                    <th>created time</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($memos as $memo)
                                    <tr>
                                        <td>{{ $memo->content }}</td>
                                        <td>
                                            @if ($memo->created_at > carbon::now()->format('Y-m-d 00:00:00'))
                                                {{ $memo->created_at->diffForHumans() }}
                                            @else
                                                {{ $memo->created_at }}
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
