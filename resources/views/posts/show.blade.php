@vite(['resources/sass/blog.scss'])

<x-layout.main>
    <body class="post">
        <header>
            <h2>{{ $post['title'] }}</h2>
        </header>
        <main>
            <p>
                {{ $post['body'] }}
            </p>
        </main>
    <a href="{{ route('posts.edit', $post->slug) }}">Edit</a>
    </body>
</x-layout.main>
