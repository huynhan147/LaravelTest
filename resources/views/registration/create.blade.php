@extends('layouts.fontend')

@section('content')

    <h1>Register</h1>
    <div class="col-lg-12">
        <form method="POST" action="/register">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Username</label>
                <input type="text" class="form-control" id="name" name="name">

            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">

            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">

            </div>
            <div class="form-group">
                <label for="password_confirmation">Password Confirmation</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">

            </div>
            <button type="submit" class="btn btn-primary" name="btnsubmit">Submit</button>
        </form>
        @include('layouts.errors');
    </div>
    </div>
@endsection