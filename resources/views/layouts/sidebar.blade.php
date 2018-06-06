<aside class="col-md-4 blog-sidebar">
    <div class="p-3 mb-3 bg-light rounded">
        <h4 class="font-italic">About</h4>
        <p class="mb-0">My Blog <em>is a top news site</em> in vietnam</p>
    </div>

    <div class="p-3">
        <h4 class="font-italic">Archives</h4>
        <ol class="list-unstyled mb-0">
            @foreach($archives as $m)
                <li><a href="/?month={{ $m['month'] }}&&year={{ $m['year'] }}">{{ $m['month']  }} {{ $m['year'] }}</a></li>
            @endforeach
        </ol>
    </div>

    <div class="p-3">
        <h4 class="font-italic">Tags</h4>
        <ol class="list-unstyled">
            @foreach($tags as $tag)
                <li><a href="/posts/tags/{{$tag}}">{{$tag}}</a></li>
            @endforeach
        </ol>
    </div>
</aside><!-- /.blog-sidebar -->