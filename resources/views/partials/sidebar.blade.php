<!--Sidebar-->
<div class="col-md-4 col-xl-3">
    <div class="sidebar px-4 py-md-0">

        <h6 class="sidebar-title">Search</h6>
        <form class="input-group" action="" method="GET">
            <input type="text" class="form-control" name="search" placeholder="Search"
                value="{{ request()->query('search') }}">
            <div class="input-group-addon">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
            </div>
        </form>

        <hr>

        <h6 class="sidebar-title">Categories</h6>
        <div class="row link-color-default fs-14 lh-24">
            @foreach ($categories as $category)
            <div class="col-6">
                <a href="{{ route('blog.category', $category->id) }}">
                    {{ $category->name }}
                </a>
            </div>
            @endforeach
        </div>

        <hr>

        <h6 class="sidebar-title">Top posts</h6>
        @foreach ($posts as $post)
        <a class="media text-default align-items-center mb-5" href="{{ route('blog.show', $post->id) }}">
            <img class="rounded w-65px mr-4" src="{{ asset('storage/'.$post->image) }}">
            <p class="media-body small-2 lh-4 mb-0">{{ $post->description }}</p>
        </a>
        @endforeach

        <hr>

        <h6 class="sidebar-title">Tags</h6>
        <div class="gap-multiline-items-1">
            @foreach ($tags as $tag)
            <a class="badge badge-secondary" href="{{ route('blog.tag', $tag->id) }}">
                {{ $tag->name }}
            </a>
            @endforeach
        </div>

        <hr>

        <h6 class="sidebar-title"><a href="{{ route('about') }}">About</a></h6>
        <p class="small-3">Sunt mlkshk snackwave, cloud bread quis next level ugh williamsburg pitchfork
            laboris
            kitsch. Letterpress fingerstache kitsch id, mixtape photo booth jean shorts exercitation
            raclette
            keffiyeh shabby chic. Eu tilde pariatur gluten-free nostrud asymmetrical cronut snackwave
            migas ut,
            keytar waistcoat labore. Slow-carb paleo vape literally af YOLO cloud bread et. Plaid before
            they sold
            out poutine tofu single-origin coffee.</p>
    </div>
</div>
<!--Sidebar-->
