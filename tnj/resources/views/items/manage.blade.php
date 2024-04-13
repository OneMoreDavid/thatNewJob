<x-layout> 
    <x-card class="p-10">
        <header>
            <h1 class="text-3xl text-center font-bold my-6 uppercase" >
                What you're tracking:
            </h1>
        </header>


        <table class="w-full table-auto rounded-sm">
            <tbody>
                @unless($userItems->isEmpty())

                <tr>
                    <th>Job Title</th>
                    <th>Company</th>
                    <th class="invisible md:visible">Status</th>
                    <th>Update Item</th>
                    <th>Delete Item</th>
                  </tr>

                @foreach ($userItems as $item)
                    <tr class="border-gray-300">
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg text-center" >
                            <a href="/items/{{$item->id}}" class=" hover:text-colOne">
                                {{$item->job_title}}
                            </a>
                        </td>
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg text-center"> 
                            {{$item->company_name}}
                        </td>
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg invisible md:visible text-center"> 
                            {{$item->status}}
                        </td>
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg text-center" >
                        <a href="/items/{{$item->id}}/edit">
                            <i class="fa-solid fa-pencil hover:text-colOne"></i>
                        </a>
                        </td>
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg text-center" >
                        <form method="POST" action="/items/{{$item->id}}">
                            {{-- prevent cross site scripting again (do forms even work without this, need to check) --}}
                            @csrf
                            {{-- what do we actually want to do --}}
                            @method('DELETE')
                            <button class="text-red-600 hover:text-colOne" onclick="return confirm('Deleting an item is irriversible! Are you sure?')">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                        </td>
                    </tr>
                @endforeach
                    
                @else

                <tr class="border-grey-300">
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg" >
                        <div class='grid-cols-1'>
                            <div class="p-8 text-xl font-bold mb-4 flex justify-center"> 
                                <p>It looks like you're not making much use of the platform as it currently is. </p>
                            </div><br>
                            <div class="text-xl font-bold mb-4 flex justify-center"> 
                                <p>
                                    <a href="/items/create" class="bg-colTwo hover:bg-colOne text-white py-2 px-5" >Get Started</a>    
                                </p>
                            </div>
                        </div>
                    </td>
                </tr>
                @endunless
            </tbody>
        </table>
    </x-card>
</x-layout>
