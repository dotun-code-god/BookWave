<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <x-title>{{$title}}</x-title>
    <link rel="icon" href="{{asset('img/logos/logo.jpg')}}">
    {{-- Load Styles  --}}
    <x-load-styles></x-load-styles>
    {{-- Load Styles ends --}}
</head>
<body>
{{-- Header --}}
    <div class="lg:mx-[5%] md:mx-[2%] mx-[1%] font-Galdeano">
        <div class="flex justify-between items-center">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-xl lg:hidden cursor-pointer trigger-sideNav" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <a href="{{route('home')}}" class="flex items-center">
                    <img src="{{asset('img/logos/logo-3.png')}}" class="w-[60px] xs:ml-[-0.5rem] ml-[0.2rem]" alt="logo">
                    <p class="font-Mussica_Swash text-2xl font-semibold xs:ml-[-0.6rem]"><a href="{{route('home')}}"> {{env('APP_NAME')}}</a></p>
                </a>
            </div>
            <div class="flex items-center">
                <input type="text" placeholder="Search" class="xs:focus:w-[280px] lg:w-[400px] md:w-[280px] sm:w-[150px] w-[80px] xs:w-[150px] gradient-border focus:rounded-3xl border focus:ring-[0px] border-gray-400 pr-10 pl-4 py-[0.4rem] xs:mr-[-0.6rem] rounded-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-xl relative right-8 text-[#4f2412]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
            <div class="flex items-center xs:hidden">
                <div class="mr-8 cursor-pointer lg:flex items-center hidden ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                    </svg>
                    <span>Upload</span>
                    <input type="hidden" type="file">
                </div>
                <button class="mr-6 bg-[#934626] p-2 text-white text-lg sm:px-5 px-3 rounded-md">Read free for 30 days</button>
                <img src="{{asset('img/index-gallery/gallery-2.png')}}" class="rounded-[50%] w-10 h-10" alt="">
            </div>
        </div>
        <ul class="hidden lg:flex justify-center items-center mt-6">
            <li class=" font-semibold mr-14 lg:text-md xl:text-lg"><a class="home-nav-link relative" href="{{route('home')}}">What is {{env('APP_NAME')}}? <span class="hidden absolute bottom-[-0.6rem] bg-[#934626] left-0 w-[2rem] h-[0.3rem]"></span> <i class="hidden absolute w-[0.1rem] h-full ml-7 bg-gray-200"></i> </a></li>
            <li class=" font-semibold mr-6 lg:text-md xl:text-lg"><a class="home-nav-link relative" href="{{route('books')}}">Ebooks <span class="{{request()->is('books') ? '' : 'hidden'}} absolute bottom-[-0.6rem] bg-[#934626] left-0 w-[2rem] h-[0.3rem]"></span> <i class="fa fa-angle-down text-gray-500 text-sm ml-[0.3rem]"></i> </a></li>
            <li class=" font-semibold mr-6 lg:text-md xl:text-lg"><a class="home-nav-link relative" href="{{route('audiobooks')}}">Audiobooks <span class="{{request()->is('audiobooks') ? '' : 'hidden'}} absolute bottom-[-0.6rem] bg-[#934626] left-0 w-[2rem] h-[0.3rem]"></span> <i class="fa fa-angle-down text-gray-500 text-sm ml-[0.3rem]"></i> </a></li>
            <li class=" font-semibold mr-6 lg:text-md xl:text-lg"><a class="home-nav-link relative" href="{{route('magazines')}}">Magazines <span class="{{request()->is('magazines') ? '' : 'hidden'}} absolute bottom-[-0.6rem] bg-[#934626] left-0 w-[2rem] h-[0.3rem]"></span> <i class="fa fa-angle-down text-gray-500 text-sm ml-[0.3rem]"></i> </a></li>
            <li class=" font-semibold mr-6 lg:text-md xl:text-lg"><a class="home-nav-link relative" href="{{route('podcasts')}}">Podcasts <span class="{{request()->is('podcasts') ? '' : 'hidden'}} absolute bottom-[-0.6rem] bg-[#934626] left-0 w-[2rem] h-[0.3rem]"></span> <i class="fa fa-angle-down text-gray-500 text-sm ml-[0.3rem]"></i> </a></li>
            <li class=" font-semibold mr-6 lg:text-md xl:text-lg"><a class="home-nav-link relative" href="{{route('sheetmusic')}}">Sheet Music <span class="{{request()->is('sheetmusic') ? '' : 'hidden'}} absolute bottom-[-0.6rem] bg-[#934626] left-0 w-[2rem] h-[0.3rem]"></span> <i class="fa fa-angle-down text-gray-500 text-sm ml-[0.3rem]"></i> </a></li>
            <li class=" font-semibold mr-6 lg:text-md xl:text-lg"><a class="home-nav-link relative" href="{{route('documents')}}">Documents <span class="{{request()->is('documents') ? '' : 'hidden'}} absolute bottom-[-0.6rem] bg-[#934626] left-0 w-[2rem] h-[0.3rem]"></span> <i class="fa fa-angle-down text-gray-500 text-sm ml-[0.3rem]"></i> </a></li>
            <li class=" font-semibold mr-6 lg:text-md xl:text-lg"><a class="home-nav-link relative" href="{{route('snapshots')}}">Snapshots <span class="{{request()->is('snapshots') ? '' : 'hidden'}} absolute bottom-[-0.6rem] bg-[#934626] left-0 w-[2rem] h-[0.3rem]"></span></a></li>
        </ul>
    </div>

    {{-- Header ends --}}

    {{-- Side Nav --}}

    <div id="sideNav" class="top-0 left-[-15rem] bg-gray-100 z-[100] w-60 h-full fixed p-2 font-Galdeano overflow-y-auto">
        <div class="flex items-center ml-[0.2rem]">
            <img src="{{asset('img/logos/logo-3.png')}}" class="w-[60px]" alt="logo">
            <p class="font-Mussica_Swash text-xl font-semibold ml-[-0.6rem] text-black">{{env('APP_NAME')}}</p>
            <i class="closeSideNav cursor-pointer fa fa-times relative right-[-3rem] text-gray-500 text-2xl"></i>
        </div>
        <div class="ml-[1.3rem] mt-7">
            <h1 class="font-bold text-amber-900 text-lg mb-5 relative"><a href="">What is {{env('APP_NAME')}} ? <i class="absolute h-[0.1rem] w-[3rem] ml-7 bottom-[-1rem] left-[-1.5rem]  bg-gray-200"></i> </a></h1>
            <ul>
                <li class=" font-semibold mb-7 text-lg pt-5"><a href="{{route('books')}}">Ebooks <i class="fa fa-angle-right relative text-gray-500 text-lg ml-[0.3rem]"></i> </a></li>
                <li class=" font-semibold mb-7 text-lg"><a href="{{route('audiobooks')}}">Audiobooks <i class="fa fa-angle-right relative text-gray-500 text-lg ml-[0.3rem]"></i> </a></li>
                <li class=" font-semibold mb-7 text-lg"><a href="{{route('magazines')}}">Magazines <i class="fa fa-angle-right relative text-gray-500 text-lg ml-[0.3rem]"></i> </a></li>
                <li class=" font-semibold mb-7 text-lg"><a href="{{route('podcasts')}}">Podcasts <i class="fa fa-angle-right relative text-gray-500 text-lg ml-[0.3rem]"></i> </a></li>
                <li class=" font-semibold mb-7 text-lg"><a href="{{route('sheetmusic')}}">Sheet Music <i class="fa fa-angle-right relative text-gray-500 text-lg ml-[0.3rem]"></i> </a></li>
                <li class=" font-semibold mb-7 text-lg"><a href="{{route('documents')}}">Documents <i class="fa fa-angle-right relative text-gray-500 text-lg ml-[0.3rem]"></i> </a></li>
                <li class=" font-semibold mb-7 text-lg"><a href="{{route('snapshots')}}">Snapshots <i class="fa fa-angle-right relative text-gray-500 text-lg ml-[0.3rem]"></i> </a></li>
            </ul>
        </div>
    </div>
    <div id="sideNav-overlay" class="hidden bg-[#583c30]/60 w-full h-full fixed top-0 z-[99]"></div>

    {{-- Side Nav ends --}}
