@extends('layouts.app')

@section('content')

    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
          <h1 class="mb-4 font-black">Register form</h1>
          <form action="{{route('register')}}" method="post">
            @csrf
              <div class="form-control ">
            
             <div class="mb-4">
                <label for="name" class="sr-only p-4">Name</label>
                <input type="text" name="name" id="name" placeholder="Your name" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{old('name')}}">

                @error('name')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror
              </div>

             <div class="mb-4">
                <label for="username" class="sr-only p-4">Username</label>
                <input type="text" name="username" id="username" placeholder="Username" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{old('username')}}">

                @error('username')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror
              </div>
              
             <div class="mb-4">
                <label for="email" class="sr-only p-4">Email</label>
                <input type="text" name="email" id="email" placeholder="Your email" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{old('email')}}">
                @error('email')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror
              </div>
             <div class="mb-4">
                <label for="password" class="sr-only p-4">Password</label>
                <input type="password" name="password" id="password" placeholder="Your password" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{old('password')}}">
                @error('password')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror
              </div>
             <div class="mb-4">
                <label for="password_confirmation" class="sr-only p-4">Password Again</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{old('password_confirmation')}}">
              </div> 
 
              <div class="mb-4">
                 <button class="w-full bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
               </div> 
              </div>

          </form>
        </div>

    </div>
  
@endsection