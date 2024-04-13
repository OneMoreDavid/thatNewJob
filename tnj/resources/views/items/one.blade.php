<x-layout>

    @auth
    <div class="bg-gray-50 border border-gray-200 rounded p-6">
        <div class="flex">

            <div >

                @if ($item['status'] == 'Aware')
                    
                    <img 
                        class="hidden w-48 mr-6 md:block px-5" 
                        src="{{asset('images/tnj-aware.png')}}"
                        alt="I have found this job that I am interested in" 
                    />

                @elseif ($item['status'] == 'Applied')

                    <img 
                        class="hidden w-48 mr-6 md:block px-5" 
                        src="{{asset('images/tnj-applied.png')}}" 
                        alt="I applied to this one" 
                    />


                @elseif ($item['status'] == 'Interview')

                    <img 
                        class="hidden w-48 mr-6 md:block px-5" 
                        src="{{asset('images/tnj-interview.png')}}"
                        alt="I have a chance; Interview" 
                    />


                @elseif ($item['status'] == 'Offer')

                    <img 
                        class="hidden w-48 mr-6 md:block px-5" 
                        src="{{asset('images/tnj-offer.png')}}"
                        alt="they love me; Offer Received" 
                    />


                @elseif ($item['status'] == 'Rejected')

                    <img 
                        class="hidden w-48 mr-6 md:block px-5" 
                        src="{{asset('images/tnj-reject.png')}}"
                        alt="This was not for me; Offer Rejected" 
                    />

                @elseif ($item['status'] == 'Accepted')

                    <img 
                        class="hidden w-48 mr-6 md:block px-5" 
                        src="{{asset('images/tnj-success.png')}}"
                        alt="I love it; Offer Accepted" 
                    />


                @else ()

                    <img 
                        class="hidden w-48 mr-6 md:block px-5" 
                        src="{{asset('images/tnj-closed.png')}}"
                        alt="not this time; Unsuccessful" 
                    />

                    
                @endif
                <br>
                
                <a href="/items/{{$item['id']}}/edit" class="absolute top-1/3 right-10 bg-colTwo hover:bg-colOne text-white py-2 px-5" >Update this job</a>
                {{-- THIS IS FOR TESTING ONLY - THIS DELETE WILL MOVE TO SOMEWHERE ELSE AFTER DEV STAGE FINISHED 
                <form 
                    method="POST" 
                    action="/items/{{$item['id']}}" 
                    class="absolute top-1/4 right-10 bg-colTwo hover:bg-colOne text-white py-2 px-5" 
                    >
                    @csrf
                    @method('DELETE')
                    <button>Delete this job</button>
                </form>    
                {{-- @endauth  --}}
            </div>
            <div>
                <h3 class="text-2xl">
                    <a href="/items/{{$item['id']}}">
                        {{$item['job_title']}}
                    </a>
                </h3>
                <div class="text-xl font-bold mb-4">{{$item['company_name']}}</div>
                <div class="text-lg font-bold mt-4">Status: {{$item['status']}}</div>
                <div class="text-lg mt-4"><p class="font-bold">Link to advert:</p>{{$item['link_to_advert']}}</div><br>
                <div class="text-lg mt-4"><p class="font-bold">How did you find this one?</p>{{$item['how_did_you_find_it']}}</div><br>
                <div class="text-lg mt-4"><p class="font-bold">Job type:</p>{{$item['job_type']}}</div>
            </div>
        </div>  
    </div>
    <div class="bg-gray-50 border border-gray-200 rounded p-6 ">
        <div>
            <div class="text-lg mt-4"><p class="font-bold">Job Description:</p>{{$item['job_description_notes']}}</div>
            <div class="text-lg mt-4"><p class="font-bold">Why do you want this one?</p>{{$item['why_do_you_want_it']}}</div>
        </div>
    </div>
    <div class="bg-gray-50 border border-gray-200 rounded p-6 ">
        <div class="flex space-x-10 justify-between">
            <div>
                <div class="text-lg mt-4"><p class="font-bold">Strong areas?</p>{{$item['strong_areas']}}</div>
                <div class="text-lg mt-4"><p class="font-bold">Weak areas?</p>{{$item['weak_areas']}}</div>
            </div>
            <div> 
                <div class="text-lg mt-4"><p class="font-bold">Benefits:</p>{{$item['benefits']}}</div>
                <div class="text-lg mt-4"><p class="font-bold">Salary:</p>{{$item['salary']}}</div>
            </div>
        </div>
    </div>
    <div class="bg-gray-50 border border-gray-200 rounded p-6 ">
        <div class="flex space-x-10 justify-between">
            <div>
                <div class="text-lg mt-4">👀 Aware: {{$item['awareness_date']}}</div>
                <div class="text-lg mt-4">✅ Applied: {{$item['applied_date']}}</div>

            </div>
            <div> 
                <div class="text-lg mt-4">☎️ Interview: {{$item['telephone_interview_date']}}</div>
                <div class="text-lg mt-4">🏢 Interview: {{$item['first_onsite_interview_date']}}</div>
              
            </div>
            <div> 
                <div class="text-lg mt-4">🤝 Offer: {{$item['offer_received_date']}}</div>
                <div class="text-lg mt-4">🎉 Accepted: {{$item['offer_accepted_date']}}</div>
            </div>
        </div>
    </div>
    <div class="bg-gray-50 border border-gray-200 rounded p-6">
        <div class="flex">
            <div>
                <div class="text-lg mt-4"><p class="font-bold">Interview Notes:</p>{{$item['interview_notes']}}</div>
                <div class="text-lg mt-4"><p class="font-bold">Feedback Received:</p>{{$item['feedback_received']}}</div>
                
            </div>
        </div>
    </div>
    @else
        
        @include('components.logged-out') 
        
    @endauth

</x-layout>
