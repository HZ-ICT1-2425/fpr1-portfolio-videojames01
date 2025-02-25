<x-layout.main>
    <form action="{{ route('faqs.update', $faq) }}" method="POST">
        @csrf
        @method('PATCH')
        <h2>Edit question {{ $faq->id }}</h2>
        <div class="field">
            <label for="question" class="label">Question</label>
            <textarea name="question" placeholder="Enter the question..." rows="2" cols="50">{{ old('question', $faq) }}</textarea>
            @error('question')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="field">
            <label for="answer" class="label">Answer</label>
            <textarea name="answer" placeholder="Enter the answer..." rows="10" cols="50">{{ old('answer', $faq) }}</textarea>
            @error('answer')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="field">
            <label for="link" class="label">Link (optional)</label>
            <input type="text" name="link" placeholder="Enter the link..." value="{{ old('link', $faq) }}">
            @error('link')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <button type="submit" class="button is-primary">Save</button>
        </div>
        <div>
            <a type="button" href="{{ route('faqs.index') }}" class="button is-light">Cancel</a>
        </div>
    </form>
</x-layout.main>
