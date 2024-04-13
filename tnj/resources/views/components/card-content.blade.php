{{-- 
    This component will display the actual content inside the coloured cards
    --}}

@props(['item'])

    <div >
        <h3 class="text-2xl">
            <a href="/items/{{$item['id']}}">
                {{$item['job_title']}}
            </a>
        </h3>
        <div class="text-xl font-bold mb-4">{{$item['company_name']}}</div>

        <div class="text-lg mt-4"><p class="font-bold">Job type:</p>{{$item['job_type']}}</div>
        <br>
        <x-status :status="$item['status']" />

    </div>
