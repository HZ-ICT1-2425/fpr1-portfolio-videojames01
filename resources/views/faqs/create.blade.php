<x-layout.main>
    <div class="box">
        <form action="{{ route('faqs.store') }}" method="POST">
            @csrf
            <h2>Create a new question</h2>
            <div class="field">
                <label for="question" class="label">Question</label>
                <input type="text" name="question" placeholder="Enter the question...">
            </div>
            <div class="field">
                <label for="answer" class="label">Answer</label>
                <input type="text" name="answer" placeholder="Enter the answer...">
            </div>
            <div class="field">
                <label for="link" class="label">Link (optional)</label>
                <input type="text" name="link" placeholder="Enter the link...">
            </div>
            <div>
                <button type="submit" class="button is-primary">Save</button>
            </div>
            <div>
                <a type="button" href="{{ url()->previous() }}" class="button is-light">Cancel</a>
            </div>
        </form>
    </div>
</x-layout.main>

