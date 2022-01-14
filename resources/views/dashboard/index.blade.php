<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css">
</head>
<body>

<section class="relative w-full bg-top bg-cover md:bg-center" x-data="{ showMenu: false }" style="background-image: url('images/pohon.jpeg')">
    <div class="absolute inset-0 w-full h-full bg-gray-900 opacity-25"></div>
    <div class="absolute inset-0 w-full h-64 opacity-50 bg-gradient-to-b from-black to-transparent"></div>
    <div class="relative flex items-center justify-between w-full h-20 px-8">
    
    <a></a>
  
      
        <nav class="top-0 left-0 flex-col items-center justify-center hidden h-full space-y-3 bg-white md:justify-end md:bg-transparent md:space-x-5 md:space-y-0 md:relative md:flex md:flex-row" :class="{'flex fixed top-0 left-0 w-full z-40': showMenu, 'hidden': !showMenu }">
            @auth
            <a href="#_" class="relative text-lg font-medium tracking-wide text-green-400 transition duration-150 ease-out md:text-sm md:text-white" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                <span class="block">Wellcome, {{ auth()->user()->name }}</span>
                <span class="absolute bottom-0 left-0 inline-block w-full h-1 -mb-1 overflow-hidden">
                    <span x-show="hover" class="absolute inset-0 inline-block w-full h-1 h-full transform border-t-2 border-green-400" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="scale-0" x-transition:enter-end="scale-100" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="scale-100" x-transition:leave-end="scale-0"></span>
                </span>
            </a>

            <form action="/logout" method="post">
            @csrf
            <button type="submit" class="flex items-center px-3 py-2 text-sm font-medium tracking-normal text-white transition duration-150 bg-green-400 rounded hover:bg-green-500 ease">
            <svg class="w-6 h-6 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                </svg>
                Logout
            </button>
            </form>
            
            @endauth
        </nav>
    </div>
            
    <div class="relative z-10 max-w-6xl px-10 py-40 mx-auto">
        <div class="flex flex-col items-center h-full lg:flex-row">
            <div class="flex flex-col items-center justify-center w-full h-full lg:w-2/3 lg:items-start">
                <p class="inline-block w-auto px-3 py-1 mb-5 text-xs font-medium text-white uppercase bg-green-600 rounded-full bg-gradient-to-br">Supplying across the globe</p>
                <h1 class="font-extrabold tracking-tight text-center text-white text-7xl lg:text-left xl:pr-20">Wellcome</h1>
                <h1 class="font-extrabold tracking-tight text-center text-white text-5xl lg:text-left">PT. Tumbuh Bersama Group</h1>
                <br>
                <a href="/admin" class="flex items-center w-full px-5 py-3 mb-3 mr-1 text-base font-semibold text-white no-underline align-middle bg-grenn-600 border border-solid rounded-md cursor-pointer select-none sm:mb-0 sm:w-auto hover:bg-green-600 hover:border-green-600 hover:text-white focus-within:bg-green-600 focus-within:border-green-600">
                Get Started Today
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
                <br>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
</section>

<!-- AlpineJS Library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.0/alpine.js"></script>


</body>
</html>