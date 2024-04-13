<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>That New Job</title>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            colOne: "#97D077",      // green
                            colTwo: "#D5739D",      // pink
                            colThree: "#FFD966",    // yellow    
                            colFour: "#7EA6E0",     // blue
                            colFive: "#B3B3B3"      // grey
                        },
                    },
                },
            };
        </script>
</head>

<body class="mb-48">
    <nav class="flex justify-between items-center mb-4">
        <a href="/"
            ><img class="w-44" src="{{asset('images/tnj-logo.png')}}" alt="That New Job" class="logo"
        /></a>
        <ul class="flex space-x-6 mr-6 text-lg">
            @auth
            
                {{-- 
                    TEMP DISABLED = NEED TO REIMAGINE AS A LINK TO A PROFILE PAGE
                <li>
                    <span class="font-bold uppercase">
                        {{auth()->user()->name}}
                    </span>
                </li> 
                --}}
                <li>
                    <a href="/items/manage" class="hover:text-colOne"
                        ><i class="fa-solid fa-gear"></i>
                        My Jobs</a
                    >
                </li>
                <li>
                    <form class='inline' method='POST' action='/logout'>
                        @csrf
                        <button class='hover:text-colOne' type='submit'>
                            <i class='fa-solid fa-door-closed'></i> logout
                        </button></form>
                </li>
            @else
                              
                <li>
                    <a href="/register" class="hover:text-colOne"
                        ><i class="fa-solid fa-user-plus"></i> Register</a
                    >
                </li> 
                <li>
                    <a href="/login" class="hover:text-colOne"
                        ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login</a
                    >
                </li>
            @endauth
            
        </ul>
    </nav>

    <main>
        {{$slot}}
    </main>

    <footer class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-colFive text-black h-20 mt-24 opacity-90 md:justify-center">
        <a href="https://github.com/rnddave" class="hover:text-colTwo absolute top-1/3 left-10"><i class="fa-brands fa-github"></i></a>
        <p class="ms-20"> &copy; 2024 <a href="/" class='hover:text-colTwo'>{{env('APP_NAME')}}</a></p>
        @auth
        <a href="/items/create" class="absolute top-1/3 right-10 bg-colTwo hover:bg-colOne text-white py-2 px-5" >Track a new job</a>    
        @endauth 
    </footer>
    <x-flash-message />
</body>
</html>
