@extends('admins.admin')

@section('content')

    <h1>Create Blog</h1>
    <div class="col-lg-10 ml-auto">
        <form method="POST" action="/posts">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title">

            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="btnsubmit">Submit</button>
        </form>
        @include('layouts.errors');
    </div>
    </div>
@endsection