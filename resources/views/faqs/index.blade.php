@vite(['resources/sass/faq.scss'])

<x-layout.main>
    <a href="{{ route('faqs.create') }}" class="button">Create Question</a>
    <section class="question">
        @foreach($faqs as $faq)
            <details>
                <summary>{{ $faq['question'] }}</summary>
                {!! $faq['answer'] !!}
            </details>
        @endforeach
    </section>
</x-layout.main>
