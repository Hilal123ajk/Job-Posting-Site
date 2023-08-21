@if(session()->has('message'))

<div x-data="{ open : true }" x-show="open" class="fixed top-2 left-1/2 transform -translate-x-1/2 bg-yellow-400 py-2 px-48 rounded-sm">
    <p>
        {{ session('message') }}
    </p>
    <div class="absolute right-0 top-0 mx-5 mt-2">
        <img @click="open = false" class="w-6 h-6 cursor-pointer" src="{{ asset('images/cross-icon.png') }}" alt="">
    </div>
</div>

@endif
