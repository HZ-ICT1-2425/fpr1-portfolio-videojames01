@vite(['resources/sass/faq.scss'])

<x-layout.main>
    <!--FAQs-->
    <section class="question">
        @foreach($faqs as $faq)
            <details>
                <summary>{{ $faq['question'] }}</summary>
                {!! $faq['answer'] !!}
            </details>
        @endforeach
    </section>
</x-layout.main>
