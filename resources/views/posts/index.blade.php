@extends('layouts.fontend')


@section('content')
    <h3 class="pb-3 mb-4 font-italic border-bottom">
        Danh sách bài viết
    </h3>
            @foreach($posts as $post)
                @include('posts.post')
            @endforeach



                <nav class="blog-pagination">
                    {{ $posts->appends(request()->query())->links() }}
                </nav>

            </div><!-- /.blog-main -->

            {{--@include('layouts.sidebar')--}}





@endsection