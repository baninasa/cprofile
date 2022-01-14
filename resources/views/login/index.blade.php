<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css">
    
</head>
<body>

<section class="relative w-full bg-top bg-cover md:bg-center" x-data="{ showMenu: false }" style="background-image: url('images/pohon.jpeg')">
    <div class="absolute inset-0 w-full h-full bg-gray-900 opacity-25"></div>
    <div class="absolute inset-0 w-full h-64 opacity-50 bg-gradient-to-b from-black to-transparent"></div>
    <div class="relative flex items-center justify-between w-full h-20 px-8">

    @if(session()->has('success'))
    <div class="bg-indigo-900 text-center py-4 lg:px-4">
    <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
    <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">Success</span>
    <span class="font-semibold mr-2 text-center flex-auto">{{ session('success') }}</span>
    <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
    </div>
    </div>
    @endif

    @if(session()->has('LoginError'))
    <div class="bg-indigo-900 text-center py-4 lg:px-4">
    <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
    <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">Error</span>
    <span class="font-semibold mr-2 text-center flex-auto">{{ session('LoginError') }}</span>
    <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
    </div>
    </div>
    @endif
       <!-- End Mobile Nav -->

    </div>
    <div class="relative z-10 max-w-6xl px-10 py-40 mx-auto">
        <div class="flex flex-col items-center h-full lg:flex-row">
            <div class="flex flex-col items-center justify-center w-full h-full lg:w-2/3 lg:items-start">
                <p class="inline-block w-auto px-3 py-1 mb-5 text-xs font-medium text-white uppercase bg-green-400 rounded-full bg-gradient-to-br">Supplying across the globe</p>
                <h1 class="font-extrabold tracking-tight text-center text-white text-7xl lg:text-left xl:pr-32">The Leading Supplier of Cassava Product</h1>
            </div>
            <div class="w-full max-w-sm mt-20 lg:mt-0 lg:w-1/3">
                <div class="relative">
                    <div class="relative z-10 h-auto p-8 pt-6 overflow-hidden bg-white border-b-2 border-gray-300 rounded-lg shadow-2xl px-7">
                        <h3 class="mb-6 text-2xl font-bolt">Sign In</h3><h3>
                        <form action="/login" method="post"> 
                        @csrf
                        <div class="block mb-4">
                            <input type="text" name="email" class="block w-full px-4 py-3 border border-gray-200 rounded shadow-sm focus:border-green-500 focus:outline-none" @error('email') is-invalid @enderror placeholder="Enter your email address" autofocus required value="{{ old('email') }}">
                            @error('email')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="block mb-4">
                            <input type="password" name="password" class="block w-full px-4 py-3 border border-gray-200 rounded shadow-sm focus:border-green-500 focus:outline-none" placeholder="Enter your password">
                        </div>
                        <div class="block">
                            <button class="w-full px-3 py-3 font-medium text-white bg-green-400 rounded">Login</button>
                        </div>
                        </form>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- AlpineJS Library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.0/alpine.js"></script>

</body>
</html>