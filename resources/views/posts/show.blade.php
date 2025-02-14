@vite(['resources/sass/blog.scss'])

<x-layout.main>
    <body class="post">
        <header>
            <h2>{{ $post['title'] }}</h2>
        </header>
        <main>
            <p>
                {{ $post['content'] }}
            </p>
        </main>
    </body>
</x-layout.main>
