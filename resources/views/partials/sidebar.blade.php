@php
$cs = 'flex items-center gap-4 mb-3 text-gray-800 hover:text-white bg-gray-300 hover:bg-slate-700 p-3 transition duration-300 ease-in-out text-[20px] font-normal hover:font-semibold px-10';
@endphp

<aside class="w-1/4 bg-gray-200 h-auto">
    <span class="h-20 text-[30px] font-bold flex justify-center mt-8">RPRIPL</span>
    <div id="sidebarContent" class="hidden sm:block">
        <a href="/" class="{{ $cs }} {{ Request::is('/') ? 'bg-slate-700 text-white' : '' }}">
            <x-heroicon-s-home class="w-6 h-6" />
            <span>Home</span>
        </a>
        <a href="{{ route('property') }} " class="{{ $cs }} {{ Request::is('property') ? 'bg-slate-700 text-white' : '' }}">
            <x-tni-search-property class="w-6 h-6" />
            <span>Property</span>
        </a>
        <!-- Add more menu items as needed -->
    </div>
</aside>
