<x-layout>
    <x-card class="p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Track a new Job
            </h2>
            <p class="mb-4">Jobs that you want the platform to help you track</p>
        </header>

        {{-- this is how we will post the data from the form --}}
        <form method="POST" action="/items" enctype="multipart/form-data">
            {{-- we need to prevent cross site scripting attacks using @csrf --}}
            @csrf 
            <div class="mb-6">
                <label
                    for="job_title"
                    class="inline-block text-lg mb-2"
                    >Job Title</label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="job_title"
                    value="{{old('job_title')}}"
                    placeholder="Job Title that you are tracking"/>

                @error('job_title')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="company_name"
                    class="inline-block text-lg mb-2"
                    >Company Name</label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="company_name"
                    value="{{old('company_name')}}"
                    placeholder="You can record the company name if you want"/>

                @error('company_name')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="status"
                    class="inline-block text-lg mb-2">
                    Status &ensp;      
                </label>
                <select id="status" name="status" >
                    <option value="">None</option>
                    <option value="Aware">Aware</option>
                    <option value="Applied">Applied</option>
                    <option value="Interview">Interview</option>
                    <option value="Offer">Offer</option>
                    <option value="Accepted">Accepted</option>
                    <option value="Rejected">Rejected</option>
                    <option value="Unsuccessful">Unsuccessful</option>
                </select>

                @error('status')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="awareness_date"
                    class="inline-block text-lg mb-2"
                >
                    When did you find this job?
                </label>
                <input
                    type="date"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="awareness_date"
                    value="{{old('awareness_date')}}"
                    placeholder="When did you find this one? "
                />
                @error('awareness_date')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="job_description_notes"
                    class="inline-block text-lg mb-2"
                >
                    Job Description
                </label>
                <textarea
                    class="border border-gray-200 rounded p-2 w-full"
                    name="job_description_notes"
                    value="{{old('job_description_notes')}}"
                    rows="4"
                    placeholder="Optional field to write or paste a job description for your records"
                ></textarea>
                @error('job_description_notes')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

           {{--  

            CURRENTLY HIDDEN - FUNCTIONALITY REMOVED FROM CONTROLLER

            <div class="mb-6">
                <label for="job_description_upload" class="inline-block text-lg mb-2">
                    Upload a job description (optional)
                </label>
                <input
                    type="file"
                    class="border border-gray-200 rounded p-2 w-full"
                    value="{{old('job_description_upload')}}"
                    name="job_description_upload"
                />
                @error('job_description_upload')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div> 

            --}}

            <div class="mb-6">
                <label
                    for="link_to_advert"
                    class="inline-block text-lg mb-2"
                    >Link to the job advert (optional)</label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="link_to_advert"
                    value="{{old('link_to_advert')}}"
                    placeholder="Optional link to the job advert to help you find it later"/>

                @error('link_to_advert')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="how_did_you_find_it"
                    class="inline-block text-lg mb-2"
                    >How did you find this job? (optional)</label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="how_did_you_find_it"
                    value="{{old('how_did_you_find_it')}}"
                    placeholder="e.g. LinkedIn, Indeed, Monster, Direct, Word of Mouth, etc"/>

                @error('how_did_you_find_it')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="job_type"
                    class="inline-block text-lg mb-2">
                    Job Type (optional future field)   &ensp;      
                </label>
                <select id="job_type" name="job_type">
                    <option value="">None</option>
                    <option value="IT Manager">IT Manager</option>
                    <option value="IT Project Manager">IT Project Manager</option>
                    <option value="Data Analytics">Data Analytics</option>
                    <option value="Data Engineer">Data Engineer</option>
                    <option value="Software Developer">Software Developer</option>
                    <option value="Junior">Junior</option>
                    <option value="Senior">Senior</option>
                    <option value="Other">Other</option>
                </select>

                @error('job_type')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="salary"
                    class="inline-block text-lg mb-2"
                    >Salary or Salary Range (optional)</label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="salary"
                    value="{{old('salary')}}"
                    placeholder="Optional, free text field, to help you compare the salary or range with similar jobs"/>

                @error('salary')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="benefits"
                    class="inline-block text-lg mb-2"
                >
                    Known Benefits
                </label>
                <textarea
                    class="border border-gray-200 rounded p-2 w-full"
                    name="benefits"
                    value="{{old('benefits')}}"
                    rows="4"
                    placeholder="Optional field - pension, work from home, hybrid, volunteer days, anything that might help you decide if this is the job for you"
                ></textarea>
                @error('benefits')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="why_do_you_want_it"
                    class="inline-block text-lg mb-2"
                >
                    Reasons you want this job:
                </label>
                <textarea
                    class="border border-gray-200 rounded p-2 w-full"
                    name="why_do_you_want_it"
                    value="{{old('why_do_you_want_it')}}"
                    rows="4"
                    placeholder="Optional field - what drew you to this one? (could help with forming interview answers etc)"
                ></textarea>
                @error('why_do_you_want_it')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label for="strong_areas" class="inline-block text-lg mb-2">
                    Looking at the description, what are your strengths? (Comma Separated)
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="strong_areas"
                    value="{{old('strong_areas')}}"
                    placeholder="Example: HTML, React, SQL, etc"
                />
                @error('strong_areas')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="weak_areas" class="inline-block text-lg mb-2">
                    Looking at the description, what are your weaknesses? (Comma Separated)
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="weak_areas"
                    value="{{old('weak_areas')}}"
                    placeholder="Example: Azure, Docker, Public Speaking, etc"
                />
                @error('weak_areas')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="applied_date"
                    class="inline-block text-lg mb-2"
                >
                    If you applied, when?
                </label>
                <input
                    type="date"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="applied_date"
                    value="{{old('applied_date')}}"
                    placeholder="When did you apply for this role? "
                />
                @error('applied_date')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="telephone_interview_date"
                    class="inline-block text-lg mb-2"
                >
                    Did you get a Telephone Interview? 
                </label>
                <input
                    type="date"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="telephone_interview_date"
                    value="{{old('telephone_interview_date')}}"
                    placeholder="Telephone Interview Date "
                />
                @error('telephone_interview_date')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="first_onsite_interview_date"
                    class="inline-block text-lg mb-2"
                >
                    Onsite Interview? 
                </label>
                <input
                    type="date"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="first_onsite_interview_date"
                    value="{{old('first_onsite_interview_date')}}"
                    placeholder="Onsite Interview Date "
                />
                @error('first_onsite_interview_date')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="interview_notes"
                    class="inline-block text-lg mb-2"
                >
                    Interview Notes:
                </label>
                <textarea
                    class="border border-gray-200 rounded p-2 w-full"
                    name="interview_notes"
                    value="{{old('interview_notes')}}"
                    rows="4"
                    placeholder="Optional field; things that went well, things to read up on for a follow-up interview, names of interviewers in case follow-up email etc"
                ></textarea>
                @error('interview_notes')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="feedback_received"
                    class="inline-block text-lg mb-2"
                >
                    Any feedback from any stages?
                </label>
                <textarea
                    class="border border-gray-200 rounded p-2 w-full"
                    name="feedback_received"
                    value="{{old('feedback_received')}}"
                    rows="4"
                    placeholder="Optional field; feedback might be received at any stage of the application process"
                ></textarea>
                @error('feedback_received')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="offer_received_date"
                    class="inline-block text-lg mb-2"
                >
                    Did you receive an offer for this one, if so, when?
                </label>
                <input
                    type="date"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="offer_received_date"
                    value="{{old('offer_received_date')}}"
                    placeholder="Offer Received Date "
                />
                @error('offer_received_date')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="offer_accepted_date"
                    class="inline-block text-lg mb-2"
                >
                    Did you accept the offer, if so, when?
                </label>
                <input
                    type="date"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="offer_accepted_date"
                    value="{{old('offer_accepted_date')}}"
                    placeholder="Offer Accepted Date "
                />
                @error('offer_accepted_date')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button
                    class="bg-colTwo hover:bg-colOne text-white rounded py-2 px-4"
                >
                    Save the Item
                </button>

                <a href="/" class="text-black ml-4 hover:text-colOne"> Back </a>
            </div>
        </form>
    </x-card>
</x-layout>