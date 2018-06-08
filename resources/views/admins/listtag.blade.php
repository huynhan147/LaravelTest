@extends('admins.admin')
@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">List Post</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                    <span data-feather="calendar"></span>
                    This week
                </button>
            </div>
        </div>

        {{--<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>--}}

        <h2>Section title</h2>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th>#</th>
                    <th>id</th>
                    <th>Title</th>
                    <th>Auth</th>
                </tr>
                </thead>
                <tbody>
                {{--{{ dd($listpost) }}--}}
                @foreach($listpost as $key=> $p)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $p->id }}</td>
                        <td><a href="">{{ $p->title }}</a></td>
                        <td>{{$p->user->name}}</td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection