<div class="blog-post">
    <h2 class="blog-post-title">
        <a href="/posts/{{ $post->id }}">
            {{$post->title}}
        </a>
        {{--@if(count($post->tag))--}}
        {{--<ul>--}}
        {{--@foreach($post->tag as $tag)--}}
        {{--<li><a href="/posts/tags/{{$tag}}">{{$tag}}</a></li>--}}
        {{--@endforeach--}}
        {{--</ul>--}}
        {{--@endif--}}
    </h2>
    <p class="blog-post-meta">
        {{ $post->user->name }} on
        {{ $post->created_at->toDayDateTimeString() }}</p>

    <p>{{ $post->body }}</p>
</div><!-- /.blog-post -->