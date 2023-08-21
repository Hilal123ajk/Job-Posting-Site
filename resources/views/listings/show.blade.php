<x-layout >

    <div class="singListingSection w-11/12 bg-gray-100 mx-auto my-4 rounded-md py-5">

        @auth
            @if(auth()->user()->id == $listing->user_id)
                <div class="my-5 mx-10 flex justify-between">
                    <div class="flex items-center">
                        <img class="w-7 h-7" src="{{ asset("images/edit.png") }}" alt="">
                        <a href="/listings/{{ $listing->id }}/edit" class="underline mx-1">edit</a>
                    </div>
                    <div class="flex items-center">
                        <img class="w-7 h-7" src="{{ asset('images/delete.png') }}" alt="">
                        <form action="/listings/{{ $listing->id }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="underline mx-1">delete</button>
                        </form>
                    </div>
                </div>
            @endif
        @endauth

        <div class="flex flex-col justify-center items-center my-4">
            <img src="{{ $listing->logo ? asset('storage/'. $listing->logo) : asset('images/devsinc.png') }}" class="w-1/5" alt="">
            <h3 class="text-3xl font-medium text-center">{{ $listing->title }}</h3>
            <p class="font-bold text-gray-800 my-3">{{ $listing->city }}</p>
            <x-listing-tags :tagsCsv="$listing->tags" />
        </div>
        <hr>

        {{-- Job Description --}}
        <div class="text-center my-4">
            <h2 class="text-3xl font-medium">Job Descripton</h2>
            <p class="w-4/5 mx-auto my-3">{{ $listing->description }}</p>
            <a href="/">
                <button class="bg-red-500 w-11/12 mx-auto py-3 rounded-md text-white">Contact Employer</button>
            </a>

        </div>

    </div>

</x-layout>
