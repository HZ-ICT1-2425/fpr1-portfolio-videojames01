<x-layout.main>
    <div class="box">
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <h2>Create a new blog post</h2>
            <div class="field">
                <label for="title" class="label">Title</label>
                <input type="text" name="title" placeholder="Enter the post's title..." value ="{{ old('title') }}">
                @error('title')
                <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="field">
                <label for="summary" class="label">Summary</label>
                <input type="text" name="summary" placeholder="Enter the post's summary..." value ="{{ old('summary') }}">
                @error('summary')
                <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="field">
                <label for="body" class="label">Content</label>
                <textarea name="body" placeholder="Enter the post's content..." rows="10" cols="70" >{{ old('body') }}</textarea>
                @error('body')
                <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <button type="submit" class="button">Save</button>
            </div>
            <div>
                <a type="button" href="{{ route('posts.index') }}" class="button is-light">Cancel</a>
            </div>
        </form>
    </div>
</x-layout.main>
