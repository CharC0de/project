<html>
@extends('layouts.app')

@section('content')
<body>
    <div class="container">
        <form action="{{ route('add-user') }}" method="POST">
             @csrf
            <div class="mb-3">
              <label for="" class="form-label">Name</label>
              <input type="text"
                class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Email</label>
              <input type="text"
                class="form-control" name="email" id="" aria-describedby="helpId" placeholder="">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Passwords</label>
              <input type="password"
                class="form-control" name="password" id="" aria-describedby="helpId" placeholder="">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button></button>
        </form>
    </div>
</body>
@endsection
</html>
