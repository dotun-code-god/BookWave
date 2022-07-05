{{-- Footer --}}
        <div class="bg-[#f0f2f9] py-8 px-16 xs:px-4 mb-3 pb-3 font-Galdeano relative">
            <div class=" grid md:grid-cols-3 sm:grid-cols-1">
                <div class="md:col-span-2">
                    <div class="grid grid-cols-4 xs:grid-cols-2 xs:text-center">
                        <div class="xs:mb-6">
                            <h1 class="text-xl mb-4">About</h1>
                            <ul>
                                <li class="text-gray-600 hover:text-amber-900 text-md mb-2"><a href="">About Scribd</a></li>
                                <li class="text-gray-600 hover:text-amber-900 text-md mb-2"><a href="">Press</a></li>
                                <li class="text-gray-600 hover:text-amber-900 text-md mb-2"><a href="">Our blog</a></li>
                                <li class="text-gray-600 hover:text-amber-900 text-md mb-2"><a href="">Join our team!</a></li>
                                <li class="text-gray-600 hover:text-amber-900 text-md mb-2"><a href="">Contact us</a></li>
                                <li class="text-gray-600 hover:text-amber-900 text-md mb-2"><a href="">Invite Friends</a></li>
                                <li class="text-gray-600 hover:text-amber-900 text-md mb-2"><a href="">Gifts</a></li>
                                <li class="text-gray-600 hover:text-amber-900 text-md mb-2"><a href="">{{env('APP_NAME')}} for enterprise</a></li>
                            </ul>
                        </div>
                        <div  class="xs:mb-6">
                            <h1 class="text-xl mb-4">Support</h1>
                            <ul>
                                <li class="text-gray-600 hover:text-amber-900 text-md mb-2"><a href="">Help / FAQ</a></li>
                                <li class="text-gray-600 hover:text-amber-900 text-md mb-2"><a href="">Accessibility</a></li>
                                <li class="text-gray-600 hover:text-amber-900 text-md mb-2"><a href="">Purchase help</a></li>
                                <li class="text-gray-600 hover:text-amber-900 text-md mb-2"><a href="">AdChoices</a></li>
                                <li class="text-gray-600 hover:text-amber-900 text-md mb-2"><a href="">Publishers</a></li>
                            </ul>
                        </div>
                        <div  class="xs:mb-6">
                            <h1 class="text-xl mb-4">Legal</h1>
                            <ul>
                                <li class="text-gray-600 hover:text-amber-900 text-md mb-2"><a href="">Terms</a></li>
                                <li class="text-gray-600 hover:text-amber-900 text-md mb-2"><a href="">Privacy</a></li>
                                <li class="text-gray-600 hover:text-amber-900 text-md mb-2"><a href="">Copyright</a></li>
                                <li class="text-gray-600 hover:text-amber-900 text-md mb-2"><a href="">Cookie Preferences</a></li>
                            </ul>
                        </div>
                        <div  class="xs:mb-6">
                            <h1 class="text-xl mb-4">Social</h1>
                            <ul>
                                <li class="text-gray-600 hover:text-amber-900 text-md mb-2"><a href=""><i class="hover:text-amber-900 fab fa-instagram"></i> Instagram</a></li>
                                <li class="text-gray-600 hover:text-amber-900 text-md mb-2"><a href=""><i class="hover:text-amber-900 fab fa-twitter"></i> Twitter</a></li>
                                <li class="text-gray-600 hover:text-amber-900 text-md mb-2"><a href=""><i class="hover:text-amber-900 fab fa-facebook"></i> Facebook</a></li>
                                <li class="text-gray-600 hover:text-amber-900 text-md mb-2"><a href=""><i class="hover:text-amber-900 fab fa-pinterest"></i> Pinterest</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-span-1 text-xl text-center">
                    <h1>Get our free apps</h1>
                    <div class="mx-auto">
                        <img class="my-3" src="{{asset('img/appstore_en.c01025ef.svg')}}" alt="">
                        <img class="my-3" src="{{asset('img/playstore_en.52ebe950.svg')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="bg-gray-300 w-[90%] h-[0.1rem] absolute mt-5"></div>
            <div class="flex justify-between md:flex-row sm:flex-col xs:flex-col mt-7 mb-3">
                <div class="mb-3">
                    <ul class="flex flex-wrap list-disc">
                        <span class="text-sm text-gray-600 hover:text-amber-900 p-0 m-0"><a href="">Books</a></span>
                        <li class="text-sm text-gray-600 hover:text-amber-900 px-2 ml-8 mr-3"><a href="">Audiobooks</a></li>
                        <li class="text-sm text-gray-600 hover:text-amber-900 px-2 mx-3"><a href="">Magazines</a></li>
                        <li class="text-sm text-gray-600 hover:text-amber-900 px-2 mx-3"><a href="">Podcasts</a></li>
                        <li class="text-sm text-gray-600 hover:text-amber-900 px-2 mx-3"><a href="">Sheet Music</a></li>
                        <li class="text-sm text-gray-600 hover:text-amber-900 px-2 mx-3"><a href="">Documents</a></li>
                        <li class="text-sm text-gray-600 hover:text-amber-900 px-2 mx-3"><a href="">Snapshots</a></li>
                    </ul>
                </div>
                <div>
                    <span class="text-gray-600 pr-3">Language: <strong>English</strong></span>
                    <span class="text-gray-600 hover:text-amber-900">Copyright © 2022 {{env('APP_NAME')}} Inc.</span>
                </div>
            </div>
        </div>
        {{-- Footer ends --}}

        {{-- Load Scripts --}}
            <x-load-scripts></x-load-scripts>
        {{-- Load Scripts ends --}}

    </body>

</html>
