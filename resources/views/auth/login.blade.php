@extends('layouts.app')

@section('content')

    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
          <h1 class="mb-4 font-black">Login form</h1>
          @if (session('status'))
            <div class="bg-red-500 text-white rounded-lg mb-6 p-6 text-center">
              {{session('status')}}
            </div>
          @endif
          <form action="{{route('login')}}" method="post">
            @csrf
              <div class="form-control ">
            
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
                <div class="flex items-center">
                  <input type="checkbox" name="remember" id="remember"  class="mr-2 mt-1">
                  <label for="remember">Remember me</label>
                </div>
              </div>


              <div class="mb-4">
                <button class="bg-blue-400 hover:bg-blue-700 w-full text-white font-bold py-2 px-4 rounded">Login</button>
              </div> 
             </div>
           
          </form>
        </div>

    </div>
  
@endsection