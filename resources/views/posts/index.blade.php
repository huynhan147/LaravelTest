@extends('layouts.fontend')


@section('content')
            @foreach($posts as $post)
                @include('posts.post');
            @endforeach



                <nav class="blog-pagination">
                    {{--{{ $posts->appends(request()->query())->links() }}--}}
                </nav>

            </div><!-- /.blog-main -->

            {{--@include('layouts.sidebar')--}}





@endsection