<div class=" border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form method="POST" action="/tweets">

        @csrf

        <textarea
        class="w-full"
        placeholder="What's up frog??"
        name="body"
        required>
        </textarea>

        <hr class="my-4">

        <footer class="flex justify-between items-end">
            <img
            src="{{ auth()->user()->avatar }}"
            alt="avatar"
            class="rounded-full mr-2"
            width="50"
            height="50"
            >

            <button type="submit"
            class="bg-green-400 hover:bg-green-500 text-sm rounded-lg shadow py-2 px-6 h-10">
               There I said it
           </button>
        </footer>
    </form>

    @error('body')
    <div class="flex justify-center ...">
        <p class=" text-red-600 text-sm mt-2">{{ $message }}</p>
    </div>
    @enderror
</div>