{{-- 
    This component relies on the $item prop 
    There is an if-else statement that will decide which colour card component to display
    the if-else is based on status
    --}}

@props(['item'])

<div >

    @if ($item['status'] == 'Aware')
                
        <x-card-aware :item="$item" />

    @elseif ($item['status'] == 'Applied')

        <x-card-applied :item="$item"/>

    @elseif ($item['status'] == 'Interview')

        <x-card-interview :item="$item"/>

    @elseif ($item['status'] == 'Offer')

        <x-card-offer :item="$item"/>

    @elseif ($item['status'] == 'Accepted')

        <x-card-offer :item="$item"/>

    @elseif ($item['status'] == 'Rejected')

        <x-card-closed :item="$item"/>

    @else ()

        <x-card-closed :item="$item" />
    
    @endif

</div>
