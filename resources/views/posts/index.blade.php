@vite(['resources/sass/blog.scss'])

<x-layout.main>
    <!--Blog posts-->
    <section class="post-head">
        <a href="{{ route('posts.create') }}" class="button">Create Post</a>
        @foreach($posts as $post)
            <div class="post-summary">
                <h2>{{ $post['title'] }}</h2>
                <p>{{ $post['summary'] }}</p>
                <a href={{ route('posts.show', $post->slug) }}>read more</a>
            </div>
        @endforeach
    </section>
</x-layout.main>
