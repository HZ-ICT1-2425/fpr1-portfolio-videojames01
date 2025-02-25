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
    <a href="{{ route('posts.edit', $post->slug) }}" class="button">Edit</a>
    <form action="{{ route('posts.destroy', $post->slug) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="button">Delete</button>
    </form>
    </body>
</x-layout.main>
