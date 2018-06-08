<div class="blog-post">
    <h2 class="blog-post-title">
        <a href="/posts/{{ $post->id }}">
            {{$post->title}}
        </a>
        {{--@if(Auth::check() && auth()->user()->id == $post->user->id)--}}
            <span class="blog-post-title"> &nbsp; <a href="/admins/post-delete/{{ $post->id }}"><i class="fas fa-trash-alt"></i></a></span>
        {{--@endif--}}
    </h2>
    <p class="blog-post-meta">
        {{ $post->user->name }} on
        {{ $post->created_at->toDayDateTimeString() }}</p>

    <p>{{ $post->body }}</p>
</div>