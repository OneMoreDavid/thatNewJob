{{-- 
    This component creates a 2-column view then uses a 'for-each' loop 
    to display items using the x-item-card component 
    (or tell you you have none)
    --}}

<div >
    @include('partials._search')

        <div class='grid-cols-1'>
            <div class="p-8 text-xl font-bold mb-4 flex justify-center"> 
                <p>It looks like you're new around here, or that you're not making much use of the platform as it currently is. </p>
            </div><br>
            <div class="text-xl font-bold mb-4 flex justify-center"> 
                <p>
                    <a href="/items/create" class="bg-colTwo hover:bg-colOne text-white py-2 px-5" >Get Started</a>    
                </p>
            </div>
        </div>

        

</div>