@vite(['resources/sass/faq.scss'])

<x-layout.main>
    <a href="{{ route('faqs.create') }}" class="button create">Create Question</a>
    <section class="question">
        @foreach($faqs as $faq)
            <details>
                <summary>{{ $faq['question'] }}</summary>
                {!! $faq['answer'] !!}
                <br>
                @if($faq->link !== null)
                    <a href="{{ $faq['link'] }}" class="link">{{ $faq['link'] }}</a>
                    <br>
                @endif
                <a href="{{ route('faqs.edit', $faq->id) }}" class="button change">Edit</a>
                <form action="{{ route('faqs.destroy', $faq->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="button change">Delete</button>
                </form>
            </details>
        @endforeach
    </section>
</x-layout.main>
