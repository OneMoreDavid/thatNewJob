{{-- 
    This component will display other users cards as coloured boxes (non-clickable)
    THIS IS NOT CURRENTLY WORKING AND IS THEREFORE NOT LIVE
    --}}

@props(['item'])
    <div >
        {{-- <div class="text-lg font-bold mt-4"><x-status :status="$item['status']" /></div>  --}}
        <h3 class="text-2xl">{{$item['job_title']}}
            {{-- <a href="/items/{{$item['id']}}">
                {{$item['job_title']}}
            </a> --}}
        </h3>
        {{-- <div class="text-xl font-bold mb-4">{{$item['company_name']}}</div> --}}

        <div class="text-lg mt-4"><p class="font-bold">Job type:</p>{{$item['job_type']}}</div>
        <br>
        {{-- <x-status :status="$item['status']" /> --}}
    </div>
