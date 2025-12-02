<x-layout>
    <h1>Create jobs</h1>

    <form method="POST" action="{{ route('jobs.store') }}">
        @csrf
        <div class="m-2">
            <input class="bg-white border-1" type="text" id="title" name="title" placeholder="title"
                value="{{ old('title') }}">
            @error('title')
                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <div class="m-2">
            <input class="bg-white border-1" type="text" id="description" name="description" placeholder="Description"
                value="{{ old('description') }}">
            @error('description')
                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Create Job</button>
    </form>
</x-layout>