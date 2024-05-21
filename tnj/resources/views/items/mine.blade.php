{{-- 
    This component will only get my items
    --}}
<x-layout>
    <div >
        @include('partials._search')
        <div bg-gray-50 border border-gray-200 rounded>

            <h3 class="text-2xl p-8">Active:</h3>

            <div class="md:grid md:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
                @foreach ($userItems as $item)

                    @if ($item['status'] != 'Unsuccessful' and $item['status'] != 'Reject')
                    
                        <div >
                            <x-item-card :item="$item" />
                        </div>
                    @endif

                @endforeach

            </div>
        </div>
        <div bg-gray-50 border border-gray-200 rounded>
            <h3 class="text-2xl p-8">Inactive:</h3>
            <div class="md:grid md:grid-cols-4 gap-4 space-y-4 md:space-y-0 mx-4">
                @foreach ($userItems as $item)

                    @if ($item['status'] == 'Unsuccessful' or $item['status'] == 'Reject')
                    
                        <div >
                            <x-item-card :item="$item" />
                        </div>
                    @endif

                @endforeach

            </div>
        </div>
        
    </div>

    {{-- <div class="mt-6 p-4">
        {{$userItems->links()}}
    </div> --}}

</x-layout>
    

