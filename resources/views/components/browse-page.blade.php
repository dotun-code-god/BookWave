<div class="flex items-center justify-between mx-[3%] text-center sm:text-left sm:mx-[5%] sm:flex-row flex-col my-[5%] font-Galdeano">
    <div class="lg:w-[45%] w-full mb-6">
        <h1 class="sm:text-3xl text-2xl font-bold mb-4 {{$name != '' ? '' : 'hidden'}} ">Enjoy popular {{$name}} when you subscribe</h1>
        <h1 class="sm:text-3xl text-2xl font-bold mb-4 {{$name == '' && $nameInFull != null ? '' : 'hidden'}}">{{$nameInFull}}</h1>
        <p class="lg:text-lg sm:text-xl text-gray-700 mb-3">Get instant access to millions of eBooks, audiobooks, magazines, and more for only $8.99/month.</p>
        <button class="mb-3 mr-6 bg-[#934626] p-2 text-white text-lg sm:px-5 px-3 rounded-md">Read free for 30 days</button>
        <p class="text-md sm:ml-10">Cancel anytime</p>
    </div>
    <img class="w-[400px] lg:block sm:hidden" src="{{asset('img/books.e3a4e212.jpg')}}" class="" alt="">
</div>