@extends('layouts.fontend')

@section('content')

    <h1>Đăng nhập</h1>
    <div class="col-lg-12">
        <form method="POST" action="/login">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>

            </div>
            <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input type="password" class="form-control" id="password" name="password" required>

            </div>
            <button type="submit" class="btn btn-primary" name="btnsubmit">Đăng nhập</button>
        </form>
        @include('layouts.errors');
    </div>
    </div>
@endsection