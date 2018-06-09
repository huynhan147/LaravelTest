@extends('layouts.fontend')

@section('content')

    <h1>Đăng ký</h1>
    <div class="col-lg-12">
        <form method="POST" action="/register">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Tên hiển thị</label>
                <input type="text" class="form-control" id="name" name="name">

            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">

            </div>
            <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input type="password" class="form-control" id="password" name="password">

            </div>
            <div class="form-group">
                <label for="password_confirmation">Xác nhận mật khẩu</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">

            </div>
            <input type="text" class="role" id="role">
            <button type="submit" class="btn btn-primary" name="btnsubmit">Đăng ký</button>
        </form>
        @include('layouts.errors');
    </div>
    </div>
@endsection