<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>
    <div class="flex justify-center items-center h-screen w-full bg-blue-400">
    <div class="w-1/2 bg-white rounded shadow-2xl p-8 m-4">
        <h1>@if(Session::has('status'))
            {{Session::get('status')}}
        @endif
        </h1>
        <h1 class="block w-full text-center text-gray-800 text-2xl font-bold mb-6">Edit Post</h1>
        <form action="" method="post">
            @csrf
            <div class="flex flex-col mb-4">
                <label class="mb-2 font-bold text-lg text-gray-900" for="title">Title</label>
                <input class="border py-2 px-3 text-grey-800" type="text" name="title" id="title" value="{{$post->title}}">
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 font-bold text-lg text-gray-900" for="body">Body</label>
                <textarea class="border py-2 px-3 text-grey-800" type="text" name="body" id="body">{{$post->body}}</textarea>
            </div>
            <button class="block bg-teal-400 hover:bg-teal-600 text-dark uppercase text-lg mx-auto p-4 rounded" type="submit">Update Post</button>
        </form>
    </div>
</div>
</x-app-layout>
