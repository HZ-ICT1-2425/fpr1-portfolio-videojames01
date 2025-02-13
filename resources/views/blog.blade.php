@vite(['resources/sass/blog.scss'])

<x-layout.main>
    <!--Blog posts-->
    <section class="post-head">
        @foreach($posts as $post)
            <div class="post-summary">
                <div>
                    <img src='{{ $post['image'] }}'>
                </div>
                <div style="margin-right: 95px;">
                    <h2>{{ $post['title'] }}</h2>
                    <p>{{ $post['summary'] }}</p>
                    <a href={{ route($post['link']) }}>read more</a>
                </div>
            </div>
        @endforeach
    </section>
</x-layout.main>
