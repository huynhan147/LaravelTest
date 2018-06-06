@extends('admins.admin')
@section('content')
    <div class="col-lg-8 mx-auto">
        <div class="alert alert-success">
            <p>Mã : {{ $pro->madv }}</p>
            <p> Tên : {{ $pro->name }}</p>
            <p>Cấp : {{ $pro->cap }}</p>
            <p>Ngày tạo : {{ $pro->created_at->toFormattedDateString() }}</p>
        </div>
    </div>

    @endsection