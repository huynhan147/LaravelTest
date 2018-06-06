@extends('admins.admin')
@section('content')
<div class="col-lg-8 mx-auto">

    <form action="/admins/province" method ='POST'>
        {{ csrf_field() }}
        <div class="form-group">
            <label for="madv">Mã Đơn Vị</label>
            <input type="text" class="form-control" id="madv" name="madv">
        </div>
        <div class="form-group">
            <label for="name">Tên tỉnh</label>
            <input type="text" class="form-control" id="name" name ='name'>
        </div>
        <div class="form-group">
            <label for="cap">Cấp</label>
            <input type="text" class="form-control" id="cap" name="cap">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
    @endsection