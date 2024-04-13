{{-- 
    This component will call a component depending on if you are logged in or not
    --}}

<x-layout>

    @auth
        @include('components.logged-in')
    @else
        @include('components.logged-out')
        
    @endauth
    
</x-layout>