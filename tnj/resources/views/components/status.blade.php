@props(['status'])


@php
    $statusArr = [];
    if ($status == 'Aware') 
        $statusArr = array_merge($statusArr, array("👀")); 
    
    elseif ($status == 'Applied') 
        $statusArr = array_merge($statusArr, array("👀", "✅")); 
    
    elseif ($status == 'Interview') 
        $statusArr = array_merge($statusArr, array("👀", "✅", "👔")); 
    
    elseif ($status == 'Offer') 
        $statusArr = array_merge($statusArr, array("👀", "✅", "👔", "🤝")); 
    
    elseif ($status == 'Accepted') 
        $statusArr = array_merge($statusArr, array("👀", "✅", "👔", "🤝", "🎉")); 
    
    elseif ($status == 'Rejected') 
        $statusArr = array_merge($statusArr, array("👀", "✅", "👔", "🤝", "🙅")); 
    

    else 
        $statusArr = array_merge($statusArr, array("🚷")); 
    
@endphp

<ul class="flex">
    @foreach ($statusArr as $stat)
    <li class="flex items-center justify-center rounded-xl py-1 px-3 mr-2 text-2xl" >
        <a href="/?status={{$status}}">{{$stat}}</a>
    </li>
    @endforeach

</ul>