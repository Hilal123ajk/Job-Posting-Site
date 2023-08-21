<div class="hero flex flex-col text-center md:text-left bg-sky-700 py-10">
    <div class="w-4/5 mx-auto">
        <h1 class="text-6xl font-bold text-white">Find Your <span class="text-black">Dream</span> Job</h1>
        <h3 class="w-11/12 md:w-full text-white text-2xl font-medium my-1">Tech Jobs In Pakistan</h3>
        @auth

        <h3 class="text-2xl font-medium text-white my-3">Welcome <span class="font-bold text-black">{{ auth()->user()->name }}</span></h3>
        @else
            <button class="border border-white py-2 px-3 rounded-md text-white my-5">
                <a href="/register">SIGN UP TO POST JOB</a>
            </button>
        @endauth
    </div>
</div>
