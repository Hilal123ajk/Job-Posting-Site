@props(['listing'])

<x-card>

    <div class="left1/3 w-">
        <img class="hidden md:block w-80" src="{{ $listing->logo ? asset('storage/'. $listing->logo) : asset('images/devsinc.png') }}" alt="">
    </div>
    <div class="right mx-3">
        <a href="/listings/{{ $listing['id'] }}">
            <h2 class="my-4 text-3xl font-medium">{{ $listing['title'] }}</h2>
        </a>
        <p>{{ $listing['description'] }}</p>
        <div class="my-3">
            <x-listing-tags :tagsCsv="$listing->tags" />
        </div>

    </div>


</x-card>
