<x-layout>

    <div class="w-11/12 md:w-5/12 shadow-lg bg-gray-50 p-5 rounded mx-auto mt-10">
        <header class="text-center">
          <h2 class="text-2xl font-bold uppercase mb-1">Edit Job Details</h2>
        </header>

        <form action="/listings/{{ $listing->id }}/edit" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
          <div class="mb-6">
            <label for="company" class="inline-block text-lg mb-2">Company Name</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company" id="company" value="{{ $listing->company }}">
            @error('company')
              <p class="text-sm font-medium text-red-500 my-1">{{ $message }}</p>
            @enderror

          </div>

          <div class="mb-6">
            <label for="title" class="inline-block text-lg mb-2">Job Title</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title" id="title" placeholder="Example: Senior Laravel Developer" value="{{ $listing->title }}">
            @error('title')
              <p class="text-sm font-medium text-red-500 my-1">{{ $message }}</p>
            @enderror
          </div>

          <div class="mb-6">
            <label for="email" class="inline-block text-lg mb-2">Email</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email" id="email" placeholder="john@gmail.com" value="{{ $listing->email }}">
            @error('email')
              <p class="text-sm font-medium text-red-500 my-1">{{ $message }}</p>
            @enderror
          </div>

          <div class="mb-6">
            <label for="website" class="inline-block text-lg mb-2">Website / Application Url</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website" id="website" placeholder="Website / Application Url" value="{{ $listing->website }}">
            @error('website')
              <p class="text-sm font-medium text-red-500 my-1">{{ $message }}</p>
            @enderror
          </div>

          <div class="mb-6">
            <label for="tags" class="inline-block text-lg mb-2">Tags (Comma separated)</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags" id="tags" placeholder="Example: Laravel, PHP, Developer" value="{{ $listing->tags }}">
            @error('tags')
              <p class="text-sm font-medium text-red-500 my-1">{{ $message }}</p>
            @enderror
          </div>

          <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">Job  Description</label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="description" id="description" rows="10" placeholder="Include tasks, requirements,  salary, etc" >
                    {{ $listing->description }}
                </textarea>
                @error('description')
                <p class="text-sm font-medium text-red-500 my-1">{{ $message }}</p>
                @enderror
          </div>
          <div class="mb-6">
            <button class="bg-laravel text-white rounded py-2 px-4 hover: bg-black">
            Update Job</button>
            <a href="/" class="text-black ml-4"> Back </a>
          </div>

        </form>

    </div>

</x-layout>


