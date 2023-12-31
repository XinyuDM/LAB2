<x-dropdown>
    <x-slot name="trigger">
        <button
        @click="show = ! show"
        class="py-2 pt-3 pr-9 text-sm w-full font-semibold lg:w-32 text-left flex lg:inline-flex">
         {{isset($currentCategory) ? ucwords($currentCategory->name): 'Categories' }}
        <x-icon name="down-arrow" class="absolute pointer-events-none"/>

        </button>
    </x-slot>

    <x-dropdown-item href="/?{{http_build_query(request()->except('category', 'page'))}}"
         :active="request()->routeIs('home')">All</x-dropdown-item>

    @php
        ['name' => 'John']
    @endphp

    @foreach ($categories as $category)
    {{-- {{ ? 'hg-blue-500 text-white' : ''}} --}}

    <x-dropdown-item
    href="/?category={{$category->slug}}&{{http_build_query(request()->except('category', 'page')) }}"
        :active='request()->is("categories/.{$category->slug}")'>
        {{ucwords($category->name) }}
    </x-dropdown-item>
    @endforeach
</x-dropdown>
