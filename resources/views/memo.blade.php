<?php use carbon\carbon; ?>
@extends ('layout')
@section('title', 'Memos')
@section('card-body')
    <form action="{{ route('memo.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="memo">enter memo</label>

            <textarea id="memo" class="form-control" name="memo" rows="4" cols="50"></textarea>
        </div>

        <input type="submit" class="btn btn-primary mt-6" name="submit" value="submit" value="add" />

    </form>
@endsection

@section('show_memos')
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

@endsection

