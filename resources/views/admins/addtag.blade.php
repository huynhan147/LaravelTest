@extends('admins.admin')
@section('content')
    <div class="col-lg-8 mx-auto">
        @if($flash = session('message'))
            <div id="alert-flash" class="alert alert-success" role="alert">
                {{ $flash }}
            </div>
            @endif
        <form action="/admins/addtag" method ='POST'>
            {{ csrf_field() }}
            <div class="form-group">
                <label for="madv">Tag</label>
                <input type="text" class="form-control" id="tag" name="tag">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
@endsection