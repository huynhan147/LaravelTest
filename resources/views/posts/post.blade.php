<div class="blog-post">
    <h2 class="blog-post-title">
        <a href="/posts/{{ $post->id }}">
            {{$post->title}}
        </a>

    </h2>
    {{ dd(Auth::user()->role) }}
    @if((Auth::check() && (auth()->user()->id == $post->user->id)||isset(Auth::user()->role) &&Auth::user()->role == 1))
    <span class="blog-post-title"> &nbsp; <a href="/admins/post-delete/{{ $post->id }}"><i class="fas fa-trash-alt"></i></a></span>
    @endif
    <p class="blog-post-meta">
        {{ $post->user->name }} on
        {{ $post->created_at->toDayDateTimeString() }}</p>

    <p class="txt-content">{{ $post->body }}</p>
    <a href="/posts/{{ $post->id }}">Xem thêm</a>
</div>