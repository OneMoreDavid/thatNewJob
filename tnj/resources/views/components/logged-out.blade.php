{{-- 
    This component will just tell you the benefits of logging in
    --}}

<div>
    @include('partials._hero')
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        <x-card-what />
        <x-card-why />
        <x-card-recruit />
        <x-card-convert />
        <x-card-buy-coffee />
        <x-card-opensource />

    </div>
    
</div>

