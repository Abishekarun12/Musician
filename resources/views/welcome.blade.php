<x-front-guest-layout>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900&display=swap" rel="stylesheet">

    {{-- <main style="background-image: url('{{ asset('images/orphans.jpg') }}');background-size: cover;"
     class="font-montserrat"> --}}
    <main class="bg-white font-montserrat">
        <header class="h-24 sm:h-32 pt-6 flex items-center">
            <div class="container mx-auto px-6 sm:px-12 flex items-center justify-between">

                <div class="text-pink font-pink text-4xl flex items-center">
                    {{-- <div class="w-24 h-18 mr-6">
                        {{-- <img src="{{ asset('images/logo.png') }}" alt=""> --}}
                    {{-- </div> --}}
                    <span>
                        <strong>Musician's Web</strong>
                    </span>
                        <br>
                </div>
                <div class="flex items-center">
                    <nav class="text-pink text-lg hidden lg:flex items-center">

                        @if (Route::has('admin.login'))
                            <a href="{{ route('admin.login') }}" class="py-2 px-6 flex hover:text-blue-500">Admin</a>
                        @endif

                        @if (Route::has('login'))
                            @auth('front')
                                <a href="{{ url('/dashboard') }}" class="py-2 px-6 flex hover:text-blue-500">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="py-2 px-6 flex hover:text-blue-500">Log in</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="ml-4 py-2 px-6 flex hover:text-blue-500">Register</a>
                                @endif
                            @endauth
                        @endif
                    </nav>
                    <button class="lg:hidden flex flex-col">
                        <span class="w-6 h-px bg-gray-900 mb-1"></span>
                        <span class="w-6 h-px bg-gray-900 mb-1"></span>
                        <span class="w-6 h-px bg-gray-900 mb-1"></span>
                    </button>
                </div>
            </div>
        </header>

        <section>
            <div class="container mx-auto px-6 sm:px-12 flex flex-col-reverse sm:flex-row items-center gap-10 ">
                <div class=" flex flex-col items-start mt-8 sm:mt-0 ">
                    <br>
                    <h1 class="text-4xl lg:text-6xl leading-none mb-4"><strong class="font-black">
                       Feel The Musics
                       <br>
                       to get a peace of mind
                    </strong>
                        <br>
                         Web
                        </h1>
                        <br>
                    <p class="lg:text-lg mb-4 sm:mb-12">
                        
                        <br>
                         </p>
                        <br>
                    <a href="https://abishek-portfolio.vercel.app/"
                        class="font-semibold text-lg bg-green-500 hover:bg-blue-400 text-white py-3 px-10 rounded-full">Developed By</a>
                </div>
                {{-- <div class="mb-4 sm:mb-12">
                    <img src="https://media4.giphy.com/media/eh0X7QwmxiXihecJud/giphy.gif?cid=6c09b952quzttq69muk85q0zrpmg4wd5atf34meb1aj6evfk&rid=giphy.gif&ct=s"
                        alt="">
                </div> --}}
            </div>
        </section>

        <section class="container mx-auto px-6 sm:px-12">
            <div>
                <form action="{{ route('delete.file') }}" method="POST">
                    @csrf
                @foreach(Storage::files('public/audio') as $file)
             <h2>{{ basename($file) }}</h2>
             {{-- <option value="{{ $file }}">{{ basename($file) }}</option> --}}
            
             <audio controls>
                 <source src="{{ asset(Storage::url($file)) }}" type="audio/mpeg">
                             Your browser does not support the audio tag.
            </audio>
            <button class="font-semibold text-lg bg-red-500 hover:bg-grey-400 text-white py-1 px-8 rounded-full"type="submit">Delete File</button>
            <br>
            <br>
             <a href="{{ asset(Storage::url($file)) }}"
             class="font-semibold text-lg bg-blue-500 hover:bg-grey-400 text-white py-1 px-8 rounded-full">Download Audio
            </a>
@endforeach
            </div>
            
        </section>

    </main>







</x-front-guest-layout>
