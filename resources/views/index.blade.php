<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{env('APP_NAME')}}</title>
        {{-- Load Styles  --}}
            <x-load-styles></x-load-styles>
        {{-- Load Styles ends --}}
    </head>
    
    <body>
        {{-- Header Section --}}
        <div class="relative">
            <div class="flex items-center ml-6 absolute top-[-0.5rem] xs:top-[-0.7rem] text-white z-[60]" id="static-nav">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 trigger-sideNav w-[1.3rem] cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <img src="{{asset('img/logos/logo-3.png')}}" class="w-[80px] mt-[-6px] xs:m-0 xs:ml-[-8px]" alt="logo">
                <p class="font-Mussica_Swash font-bold text-2xl xs:text-xl xs:ml-[-10px]"><a href="{{route('home')}}"> {{env('APP_NAME')}}</a></p>
            </div>
            <div id="header" class="bg-[#583c30]/0 h-16 text-white flex justify-between z-50 top-0 fixed w-full items-center mx-auto"> 
                <div class="flex items-center ml-6">
                    <svg class="trigger-sideNav w-[1.3rem] cursor-pointer" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="24" viewBox="0 0 172 172" style=" fill:#undefined;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M14.33333,35.83333v14.33333h143.33333v-14.33333zM14.33333,78.83333v14.33333h143.33333v-14.33333zM14.33333,121.83333v14.33333h143.33333v-14.33333z"></path></g></g></svg>
                    <img src="{{asset('img/logos/logo-3.png')}}" class="w-[80px] mt-[-6px] xs:m-0 xs:ml-[-8px]" alt="logo">
                    <p class="font-Mussica_Swash font-bold text-2xl xs:text-xl xs:ml-[-10px]"><a href="{{route('home')}}"> {{env('APP_NAME')}}</a></p>
                </div>
                <div>
                    <button class="bg-[#d0b052] hidden free-trial hover:border-4 border-4 border-[#d0b052] hover:bg-transparent font-semibold mr-8 py-1 px-8 box-border rounded-lg text-lg xs:text-sm">Start your free trial</button>
                </div>
            </div>
            {{-- Side Nav --}}

            <div id="sideNav" class="top-0 text-gray-500 left-[-15rem] bg-gray-100 z-[100] w-60 h-full fixed p-2 font-Galdeano overflow-y-auto">
                <div class="flex items-center ml-[-0.3rem]">
                    <img src="{{asset('img/logos/logo-3.png')}}" class="w-[60px]" alt="logo">
                    <p class="font-Mussica_Swash text-xl ml-[-0.6rem] text-black">{{env('APP_NAME')}}</p>
                    <i class="closeSideNav cursor-pointer fa fa-times relative right-[-3rem] text-gray-500 text-2xl"></i>
                </div>
                <div class="mt-2 flex items-center">
                    <input type="text" class="border border-gray-300 rounded-md ml-[0.6rem] pl-2 pr-8 py-1 w-48" placeholder="Search">
                    <i class="fa fa-search relative right-7"></i>
                </div>
                <div class="bg-gray-200 w-[90%] h-[0.1rem] absolute mt-8"></div>
                <div class="mt-12 text-md ml-[0.6rem]">
                    <a class="pr-3 hover:text-amber-900" href="">Explore</a>
                    <a href="" class="pr-3 hover:text-amber-900">Upload</a>
                    <a href="" class="pr-3 hover:text-amber-900">FAQ</a>
                </div>
                <div class="ml-[0.6rem] mt-5">
                    <h1 class="font-bold text-amber-900">BROWSE BY</h1>
                    <div class="flex justify-between mr-6">
                        <ul>
                            <li><a class="hover:text-amber-900" href="">Books</a></li>
                            <li><a class="hover:text-amber-900" href="">Magazines</a></li>
                            <li><a class="hover:text-amber-900" href="">Documents</a></li>
                        </ul>
                        <ul>
                            <li><a class="hover:text-amber-900" href="">Audiobooks</a></li>
                            <li><a class="hover:text-amber-900" href="">Podcasts</a></li>
                            <li><a class="hover:text-amber-900" href="">Sheet Music</a></li>
                        </ul>
                    </div>
                </div>
                <div class="ml-[0.6rem] mt-5">
                    <h1 class="font-bold text-amber-900">INTERESTS</h1>
                    <ul>
                        <li><a class="hover:text-amber-900" href="">Career & Growth</a></li>
                        <li><a class="hover:text-amber-900" href="">Business</a></li>
                        <li><a class="hover:text-amber-900" href="">Finance & Money Management</a></li>
                        <li><a class="hover:text-amber-900" href="">Politics</a></li>
                        <li><a class="hover:text-amber-900" href="">Sports & Recreation</a></li>
                        <li><a class="hover:text-amber-900" href="">Games & Activities</a></li>
                        <li><a class="hover:text-amber-900" href="">Comics & Graphic Novels</a></li>
                        <li><a class="hover:text-amber-900" href="">Social Science</a></li>
                        <li><a class="hover:text-amber-900" href="">True Crime</a></li>
                        <li><a class="hover:text-amber-900" href="">Travel</a></li>
                    </ul>
                </div>
                <div class="bg-gray-200 w-[90%] h-[0.1rem] absolute mt-6"></div>
                <div class="mt-12 ml-[0.6rem]">
                    <p>Download our app to read books on any device</p>
                    <div>
                        <img class="my-3" src="{{asset('img/appstore_en.c01025ef.svg')}}" alt="">
                        <img class="my-3" src="{{asset('img/playstore_en.52ebe950.svg')}}" alt="">
                    </div>
                </div>
                <div class="flex items-center ml-6">
                    <i class="hover:text-blue-800 cursor-pointer fab fa-twitter text-3xl mr-3"></i>
                    <i class="hover:text-blue-800 cursor-pointer fab fa-facebook text-3xl"></i>
                </div>
            </div>
            <div id="sideNav-overlay" class="hidden bg-[#583c30]/60 w-full h-full fixed top-0 z-[99]"></div>

            {{-- Side Nav ends --}}
            <div id="slider" class="nivoSlider">
                <img src="{{asset('img/slider-1.jpg')}}" alt="books library" class="w-full h-full object-cover transform scale-x-[-1]" title="#slider-1-caption1">
                <img src="{{asset('img/slider-2.jpg')}}" alt="books library" class="w-full h-full object-cover transform scale-x-[-1]" title="#slider-1-caption2">
                <img src="{{asset('img/slider-3.jpg')}}" alt="books library" class="w-full h-full object-cover transform scale-x-[-1]" title="#slider-1-caption3">

            </div>
            <div id="slider-1-caption1" class="nivo-caption w-full h-full">
                <div class="mt-32 ml-14 font-YuseiMagic text-white xs:text-center xs:ml-0">
                    <p class="text-5xl xs:text-4xl font-bold pb-4 wow animate__fadeInUp" data-wow-duration="1500ms" >Endless entertainment</p>
                    <p class="text-5xl xs:text-4xl font-bold pb-4 wow animate__fadeInUp" data-wow-duration="2000ms" >and knowledge</p>
                    <p class="text-lg xs:text-sm pb-5 wow animate__fadeInUp" data-wow-duration="2900ms" >Read or listen anytime, anywhere.</p>
                    <button class='bg-white text-black p-3 px-12 box-border rounded-lg text-lg xs:text-sm mb-4 wow animate__rotateInDownRight' data-wow-duration="3600ms">Start Reading now</button>
                    <p class="wow animate__fadeInLeft xs:text-md" data-wow-duration="2900ms">Only $8.99/month after. Cancel anytime.</p>
                </div>
            </div>
            </div>
            <div id="slider-1-caption2" class="nivo-caption w-full h-full">
                <div class="mt-32 ml-14 font-YuseiMagic text-white xs:text-center xs:ml-0">
                    <p class="text-5xl xs:text-4xl font-bold pb-4 wow animate__fadeInDown" data-wow-duration="2000ms">The best and most</p>
                    <p class="text-5xl xs:text-4xl font-bold pb-4 wow animate__fadeInUp"data-wow-duration="2500ms">convenient deal for</p>
                    <p class="text-5xl xs:text-4xl font-bold pb-4 wow animate__fadeInLeft" data-wow-duration="3100ms">online reading</p>
                    <p class="text-lg xs:text-sm pb-5 wow animate__bounceIn" data-wow-duration="3000ms">Read or listen anytime, anywhere.</p>
                    <button class='bg-white text-black p-3 px-12 box-border rounded-lg text-lg mb-4 xs:text-sm wow animate__rotateInDownRight' data-wow-duration="3600ms">Start Reading now</button>
                    <p class="wow animate__bounceInDown xs:text-md" data-wow-duration="2900ms">Only $8.99/month after. Cancel anytime.</p>
                </div>
            </div>
            </div>
            <div id="slider-1-caption3" class="nivo-caption w-full h-full">
                <div class="mt-32 ml-14 font-YuseiMagic text-white xs:text-center xs:ml-0">
                    <p class="text-5xl xs:text-4xl font-bold pb-4 wow animate__flipInX" data-wow-duration="2000ms">The Best Books</p>
                    <p class="text-5xl xs:text-4xl font-bold pb-4 wow animate__fadeInUp" data-wow-duration="2500ms">and audiobooks are</p>
                    <p class="text-5xl xs:text-4xl font-bold pb-4 wow animate__fadeInUp" data-wow-duration="3000ms">waiting for you</p>
                    <p class="text-lg xs:text-sm pb-5 wow animate__fadeInUp" data-wow-duration="3600ms">Read or listen anytime, anywhere.</p>
                    <button class='bg-white text-black p-3 px-12 box-border rounded-lg text-lg xs:text-sm mb-4 wow fadeInUp wow animate__rotateInDownRight' data-wow-duration="3600ms">Start Reading now</button>
                    <p class="wow animate__fadeInLeft xs:text-md" data-wow-duration="2900ms">Only $8.99/month after. Cancel anytime.</p>
                </div>
            </div>
        </div>
        {{-- Header Section ends --}}

        {{-- Middle section --}}

            <div class="flex mx-auto flex-col my-20 justify-center items-center font-Galdeano max-w-[70%] xs:w-full">
                <h2 class="md:text-4xl sm:text-3xl xs:text-2xl xs:text-center font-semibold mb-0">All in One Simple Subscription</h2>
                <div class="grid md:grid-cols-3 lg:grid-cols-6 sm:grid-cols-2 xs:grid-cols-2 mt-6">
                    <div class="flex flex-col items-center p-6 mr-3 my-3">
                        <i class="fa fa-book-open text-amber-900 fa-2x"></i>
                        <p class="text-xl">Books</p>
                    </div>
                    <div class="flex flex-col items-center p-6 m-3">
                        <i class="fa fa-headphones text-amber-900 fa-2x"></i>
                        <p class="text-xl">AudioBooks</p>
                    </div>
                    <div class="flex flex-col items-center p-6 m-3">
                        <i class="fa fa-book text-amber-900 fa-2x"></i>
                        <p class="text-xl">Magazines</p>
                    </div>
                    <div class="flex flex-col items-center p-6 m-3">
                        <i class="fa fa-microphone text-amber-900 fa-2x"></i>
                        <p class="text-xl">Podcasts</p>
                    </div>
                    <div class="flex flex-col items-center p-6 m-3">
                        <i class="fa fa-music text-amber-900 fa-2x"></i>
                        <p class="text-xl">SheetsMusic</p>
                    </div>
                    <div class="flex flex-col items-center p-6 m-3">
                        <i class="fa fa-file-contract text-amber-900 fa-2x"></i>
                        <p class="text-xl">Documents</p>
                    </div>
                </div>
                <div class="slick-slider w-[80%] mt-10 text-center">
                    <div class="">
                        <img class="w-16" src="{{asset('img/quote.png')}}" alt="">
                        <h2 class="text-3xl text-amber-900 font-semibold">A room without books is like a body without a soul.</h2>
                        <p class="text-lg">Business Insider</p>
                    </div>
                    <div class="">
                        <img class="w-16" src="{{asset('img/quote.png')}}" alt="">
                        <h2 class="text-3xl text-amber-900 font-semibold">Take a good book to bed with you—books do not snore.</h2>
                        <p class="text-lg">Business Insider</p>
                    </div>
                    <div class="">
                        <img class="w-16" src="{{asset('img/quote.png')}}" alt="">
                        <h2 class="text-3xl text-amber-900 font-semibold">A book is a gift you can open again and again</h2>
                        <p class="text-lg">Business Insider</p>
                    </div>
                </div>
            </div>
        
        {{-- Middle section ends --}}

        {{-- Books Gallery --}}
            <div class="gallery-gradient w-full h-full p-6 mb-16 text-center">
                <h2 class="text-white uppercase text-2xl">The Best Books and audiobooks are all waiting for you</h2>
                <div class="gallery w-[80%] mx-auto grid lg:grid-cols-7 md:grid-cols-5 sm:grid-cols-3 xs:grid-cols-2 justify-center content-center gap-2 mt-5">
                    <div class="slick-slider">
                        <img class="mb-2 xs:mb-0" src="{{asset('img/index-gallery/gallery-1.png')}}" alt="">
                        <img class="mb-2 xs:mb-0" src="{{asset('img/index-gallery/gallery-2.png')}}" alt="">
                        <img class="mb-2 xs:mb-0" src="{{asset('img/index-gallery/gallery-3.png')}}" alt="">
                        <img class="mb-2 xs:mb-0" src="{{asset('img/index-gallery/gallery-22.png')}}" alt="">
                    </div>
                    <div class="slick-slider">
                        <img class="mb-2 xs:mb-0" src="{{asset('img/index-gallery/gallery-4.png')}}" alt="">
                        <img class="mb-2 xs:mb-0" src="{{asset('img/index-gallery/gallery-5.png')}}" alt="">
                        <img class="mb-2 xs:mb-0" src="{{asset('img/index-gallery/gallery-6.png')}}" alt="">
                        <img class="mb-2 xs:mb-0" src="{{asset('img/index-gallery/gallery-23.png')}}" alt="">
                    </div>
                    <div class="slick-slider">
                        <img class="mb-2 xs:mb-0" src="{{asset('img/index-gallery/gallery-7.png')}}" alt="">
                        <img class="mb-2 xs:mb-0" src="{{asset('img/index-gallery/gallery-8.png')}}" alt="">
                        <img class="mb-2 xs:mb-0" src="{{asset('img/index-gallery/gallery-9.png')}}" alt="">
                        <img class="mb-2 xs:mb-0" src="{{asset('img/index-gallery/gallery-24.png')}}" alt="">
                    </div>
                    <div class="slick-slider">
                        <img class="mb-2 xs:mb-0" src="{{asset('img/index-gallery/gallery-10.png')}}" alt="">
                        <img class="mb-2 xs:mb-0" src="{{asset('img/index-gallery/gallery-11.png')}}" alt="">
                        <img class="mb-2 xs:mb-0" src="{{asset('img/index-gallery/gallery-12.png')}}" alt="">
                        <img class="mb-2 xs:mb-0" src="{{asset('img/index-gallery/gallery-25.png')}}" alt="">
                    </div>
                    <div class="slick-slider">
                        <img class="mb-2 xs:mb-0" src="{{asset('img/index-gallery/gallery-13.png')}}" alt="">
                        <img class="mb-2 xs:mb-0" src="{{asset('img/index-gallery/gallery-14.png')}}" alt="">
                        <img class="mb-2 xs:mb-0" src="{{asset('img/index-gallery/gallery-15.png')}}" alt="">
                        <img class="mb-2 xs:mb-0" src="{{asset('img/index-gallery/gallery-26.png')}}" alt="">
                    </div>
                    <div class="slick-slider">
                        <img class="mb-2 xs:mb-0" src="{{asset('img/index-gallery/gallery-16.png')}}" alt="">
                        <img class="mb-2 xs:mb-0" src="{{asset('img/index-gallery/gallery-17.png')}}" alt="">
                        <img class="mb-2 xs:mb-0" src="{{asset('img/index-gallery/gallery-18.png')}}" alt="">
                        <img class="mb-2 xs:mb-0" src="{{asset('img/index-gallery/gallery-27.png')}}" alt="">
                    </div>
                    <div class="slick-slider">
                        <img class="mb-2 xs:mb-0" src="{{asset('img/index-gallery/gallery-19.png')}}" alt="">
                        <img class="mb-2 xs:mb-0" src="{{asset('img/index-gallery/gallery-20.png')}}" alt="">
                        <img class="mb-2 xs:mb-0" src="{{asset('img/index-gallery/gallery-21.png')}}" alt="">
                        <img class="mb-2 xs:mb-0" src="{{asset('img/index-gallery/gallery-28.png')}}" alt="">
                    </div>
                </div>
                <div>
                    <button class="bg-[#583c30] hover:bg-[#d0b052] text-white my-3 font-semibold mr-8 py-1 px-8 box-border rounded-lg text-lg xs:text-sm">Start your free trial now</button>
                </div>
            </div>
        {{-- Books Gallery ends --}}

<x-footer></x-footer>