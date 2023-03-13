@extends('layouts.app')

@section('content')

    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
          <h1 class="mb-3 font-bold text-black text-red-600">Add Post</h1>
            <form action="{{ route('posts') }}" method="post" class="mb-4">
                @csrf

                <div class="mb-4">
                    <label for="body" class="sr-only p-4">Body</label>
                    <textarea cols="30" rows="4" name="body" id="body" placeholder="Post Something"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror">
              </textarea>

                    @error('body')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <button class=" bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Post</button>
                </div>

            </form>

            @if ($posts->count())
                @foreach ($posts as $post)
               
                    <a href="" class="font-bold">{{ Str::title($post->user->name) }}</a> <span
                        class="text-gray-500 text-sm">{{ $post->created_at->diffForHumans() }}</span>
                    <div class="mb-4">{{ $post->body }}</div>


                    <div class="flex item-center">
                      <form action="" class="mr-1">
                        @csrf
                          <button type="submit" class="text-blue-500">Likes</button>
                      </form>
                      <form action="" class="mr-1">
                        @csrf
                        <button type="submit" class="text-blue-500">Dislikes</button>
                      </form>
      
                    </div>

                @endforeach


                {{ $posts->links() }}
            @else
                <p>There is no posts.... </p>
            @endif


        </div>

    </div>

@endsection
