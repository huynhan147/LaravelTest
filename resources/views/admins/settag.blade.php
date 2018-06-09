@extends('admins.admin')
@section('content')
    <div class="col-lg-8 mx-auto">
        @if($flash = session('message'))
            <div id="alert-flash" class="alert alert-success" role="alert">
                {{ $flash }}
            </div>
        @endif
        <form action="/admins/settag" method ='POST'>
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleFormControlSelect1">Tag</label>
                <select class="form-control" id="tag" name="tag">
                    @foreach($tag as $val)
                        @if($val->user->id ==auth()->user()->id)
                            <option value=" {{ $val->id }}">{{ $val->title }}</option>
                        @endif
                        @endforeach
                </select>
            </div>
            {{--{{ dd($post) }}--}}
            <div class="form-group">
                <label for="exampleFormControlSelect1">Post</label>
                <select class="form-control" id="post" name="post">

                    @foreach($post as $val)
                    <option value=" {{ $val->id }}">{{ $val->title }}</option>
                        @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
@endsection