<x-app-layout>
  <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://unpkg.com/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body>
      <section class="text-gray-600 body-font">
        <div class="container px-5 py-5 mx-auto">
          <div class="flex flex-wrap -m-4">
            @foreach ($posts as $post)
              <div class="p-4 md:w-1/3" >
                <div class="h-full border-2 border-gray-300 border-opacity-50 rounded-lg overflow-hidden p-1">
                  <div class="p-4 ">
                    <h2 class="tracking-widest text-xl title-font font-bold text-gray-900 mb-1 uppercase "> {{ $post->title }} </h2> 
                    <h1 class="title-font font-medium text-gray-400 mb-3">{{Str::limit ($post->content, 15) }}</h1>
                  </div>

                  <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{ asset('/storage/'. $post->picture) }}"/> 
                  
                  <div class="w-full">
                    <div class="w-full flex p-2">
                      <div class="pl-2 pt-2">
                        <p class="font-bold">{{ $post->user->name }}</p>
                        <p class="text-xs mb-2">{{ $post->created_at->format('d M Y') }}</p>     
                        <a href="{{route('posts.show', $post)}}" class="text-blue-800 mt-5 text-xl"><p style = "display: flex; max-width: 100%; border-top: solid 1px black;">>Consulter l'article<</p></a>        
                      </div>      
                    </div>
                  </div>
                </div>
              </div>   
            @endforeach
          </div>
        </div>
      </section>
    </body>
  </html>
</x-app-layout>