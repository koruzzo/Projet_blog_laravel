<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Créer un post') }}
        </h2>
    </x-slot>

        <div class="my-5">
            @foreach ($errors->all() as $error)
            <span class=>{{$error}}</span>
            @endforeach
        </div>

        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data" class="p-4 mx-auto mt-5 w-2/4 flex justify-center flex-col " style="background-color: rgba(157, 157, 157, 0.075); border: 2px solid rgba(0, 0, 0, 0.048);"> 
            @csrf

            <label for="title" value="Titre du Post" class="p-4">Titre:</label>
            <input id="title" name="title" class="rounded-lg">

            <label for="content" value="Contenu du Post" class="p-4">Contenu:</label>
            <textarea id="content" name="content" class="rounded-lg"></textarea>

            <label for="image" value="Image du Post" class="p-4">Image:</label>
            <input id="image" type="file" name="image" class="p-4 ">
            
            <button type="submit" class="font-semibold py-2 mx-auto px-4 border bg-white rounded-lg">Publier!</button>
        </form>

</x-app-layout>