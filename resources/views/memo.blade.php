@extends ('layout')
@section ('title','add-memo')
@section ('content')
<form action="">
    @csrf
    <div class="form-group">
        <label for="memo">enter memo</label>

        <textarea id="memo" class="form-control" name="memo" rows="4" cols="50"></textarea>
    </div>

    <input type="submit" class="btn btn-primary mt-6" name="submit" value="submit" value="add" />

</form>
@endsection
</body>

</html>