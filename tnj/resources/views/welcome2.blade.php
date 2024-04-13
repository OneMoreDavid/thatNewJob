<x-layout>

    @auth
        @include('components.logged-in')
    @else
        @include('components.logged-out')
    @endauth
    
</x-layout>