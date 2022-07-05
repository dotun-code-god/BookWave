{{-- Header Section --}}
<x-headers title="Discover the Best Books on {{env('APP_NAME')}}"></x-headers>
{{-- Header Section ends --}}

   {{-- Browse Page --}}

    <x-browse-page name="books" nameInFull=""></x-browse-page>

    {{-- Browse Page ends --}}

    <div class="lg:mx-[5%] md:mx-[2%] mx-[1%] font-Galdeano">
        <div class="flex border-b border-gray-200 text-lg">
            <p class="mr-7 pb-3 hover:text-[rgb(79,36,18)] {{request()->is('books') ? 'font-bold text-[rgba(79,36,18,0.9)] border-b-4 border-[rgb(79,36,18)]' : ''}}"><a class="pb-3" href="{{route('books')}}">Overview</a></p>
            <p class="mr-7 pb-3 hover:text-[rgb(79,36,18)] {{request()->is('books/categories') ? 'font-bold text-[rgba(79,36,18,0.9)] border-b-4 border-[rgb(79,36,18)]' : ''}}"><a class="pb-3" href="{{route('books.categories')}}">Categories</a></p>
            <p class="mr-7 pb-3 hover:text-[rgb(79,36,18)] {{request()->is('books/editors_picks') ? 'font-bold text-[rgba(79,36,18,0.9)] border-b-4 border-[rgb(79,36,18)]' : ''}}"><a class="pb-3" href="{{route('books.editors_picks')}}">Editor's Picks</a></p>
        </div>

        <?php  
            if(request()->is('books')){
                ?>
                    <x-slides-display heading="BestSelling Books" paragraph=""></x-slides-display>
                    {{-- <x-slides-display heading="{{env('APP_NAME')}} Originals" paragraph="These original works from celebrated authors were produced by Scribd."></x-slides-display> --}}
                <?php
            }
            elseif(request()->is('books/categories')){
                ?>
                
                <?php
            }
            elseif(request()->is('books/editors_picks')){
                ?>
                
                <?php
            }
        ?>

    </div>



{{-- <x-footer></x-footer> --}}