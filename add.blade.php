@extends('layouts/student')

@section ('page_content')


    @if(session('success'))
        <div class="alert alert-success">Student succesfuly added</div>
    @endif

    @if(count($errors))
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>

    @endif
    <form method="post" action="{{route('studentSave')}}">
        <div class="form-group">
            <label for="exampleInputPassword1">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        {{csrf_field()}}
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
@endsection