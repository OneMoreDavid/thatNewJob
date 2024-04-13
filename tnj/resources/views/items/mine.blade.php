{{-- 
    This component will only get my items
    --}}
<x-layout>
    <div >
        @include('partials._search')

        Active:

        <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
            @foreach ($userItems as $item)

                @if ($item['status'] != 'Unsuccessful' and $item['status'] != 'Reject')
                
                    <div >
                        <x-item-card :item="$item" />
                    </div>
                @endif

            @endforeach

        </div>
        
        Inactive:
        <div class="lg:grid lg:grid-cols-4 gap-4 space-y-4 md:space-y-0 mx-4">
            @foreach ($userItems as $item)

                @if ($item['status'] == 'Unsuccessful' or $item['status'] == 'Reject')
                
                    <div >
                        <x-item-card :item="$item" />
                    </div>
                @endif

            @endforeach

        </div>
        
    </div>

    {{-- <div class="mt-6 p-4">
        {{$userItems->links()}}
    </div> --}}

</x-layout>
    

