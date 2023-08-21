<x-layout >

    @include('partials._hero')
    @include('partials._search')

    @if(count($listings) == 0)
        <h3 class="text-2xl w-10/12 font-medium mx-auto my-5 text-gray-600">Job Not Found</h3>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:w-11/12 mx-auto my-10">
        @foreach ($listings as $listing)
            <x-listing-card :listing="$listing" />
        @endforeach
    </div>

    <div class="mt-6 p-4 mx-5">
        {{ $listings->links() }}
    </div>

    <x-create-listing-button />


</x-layout>
