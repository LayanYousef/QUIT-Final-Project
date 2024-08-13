@props(['active' => false, 'type' => 'a'])

 <a class="flex lg:px-12 lg:py-3 md:py-3 justify-center items-center mt-3.5 border border-gray-700 w-full hover:bg-slate-600 hover:text-white"  {{$attributes}}>
    <p class="text-center text-xs sm:text-xs"  {{$attributes}}>{{ $slot }}</p>
</a>