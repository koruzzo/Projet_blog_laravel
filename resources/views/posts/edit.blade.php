<x-app-layout>

    <div class="my-5">
        @foreach ($errors->all() as $error)
            <span class=>{{$error}}</span> 
        @endforeach
    </div>

    <form action="{{ route('posts.update', $post) }}" method="post" enctype="multipart/form-data" class="p-4 mx-auto mt-5 w-2/4 flex justify-center flex-col " style="background-color: rgba(208, 208, 208, 0.075); border: 2px solid rgba(0, 0, 0, 0.048);"> 
        @method('put')
        @csrf
        <label for="title" value="Titre du Post" class="p-4"></label>
        <input id="title" name="title" class="rounded-lg" value="{{ $post->title }}">
        <label for="content" value="Contenu du Post" class="p-4"></label>
        <textarea id="content" name="content" class="rounded-lg" value="{{ $post->content }}">{{ $post->content }}</textarea>
        <label for="image" value="Image du Post" class="p-4">Image du Post</label>
        <input id="image" type="file" name="image" class="p-4">
        <button type="submit" class="font-semibold py-2 px-4 border bg-white rounded-lg">Modifier le Post</button>
    </form>
    
</x-app-layout>