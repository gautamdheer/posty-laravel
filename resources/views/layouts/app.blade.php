    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posty</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body class="bg-gray-100">

        <nav class="p-6 bg-white flex justify-between mb-6">

        <ul class="flex item-center">
            <li><a href="/" class="p-3">Home</a></li>
            <li><a href="{{route('dashboard')}}" class="p-3">Dashboad</a></li>
            <li><a href="{{route('posts')}}" class="p-3">Post</a></li>
        </ul>
        
        <ul class="flex item-center">
            @guest
                
            <li><a href="{{route('login')}}" class="p-3">Login</a></li>
            <li><a href="{{route('register')}}" class="p-3">Register</a></li>
            
            @endguest
        
            @auth
            
            <li>
              
            {{-- <div class="flex items-center space-x-4">
                <img class="w-10 h-10 p-1 rounded-full ring-2 ring-gray-300 dark:ring-gray-500" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="Bordered avatar">

                <div class="font-sm dark:text-black">
                    <div>{{ Str::title(auth()->user()->name) }}</div>
                    <div class="text-sm text-gray-500 dark:text-gray-400">Joined in August</div>
                </div>
            </div> --}}

            <div class="flex">
            <div class="relative pr-3">
                <img class="w-10 h-10 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="">
                <span class="top-0 left-7 absolute  w-3.5 h-3.5 bg-green-400 border-2 border-white dark:border-gray-800 rounded-full"></span> 
            </div>
            <div>{{ Str::title(auth()->user()->name) }}</div>
            </div>
            </li>
            
            <li>
                    <form action="{{route('logout')}}" method="post" class="inline p-3">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
            
            </li>
            
            @endauth
            
        </ul>

        </nav>

    @yield('content')
    </body>
    </html>