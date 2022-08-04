@extends ('layout')
@section ('title','add-memo')
@section ('content')
<form action="{{route('memo')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="memo">enter memo</label>

        <textarea id="memo" class="form-control" name="memo" rows="4" cols="50"></textarea>
    </div>

    <input type="submit" class="btn btn-primary mt-6" name="submit" value="submit" value="add" />

</form>
@endsection

@section ('show_memos')
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>

            <th>id</th>
            <th>memo</th>
            <th>created time</th>

        </tr>
    </thead>
    <tbody>
        @foreach($memos as $memo)
        <tr>
            <td>{{$memo->id}}</td>
            <td>{{$memo->content}}</td>
            <td>{{$memo->created_at}}</td>

        </tr>
        @endforeach

    </tbody>

</table>
@endsection
</body>

</html>