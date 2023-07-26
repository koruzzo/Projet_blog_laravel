<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
             {{ $post->title }}
        </h2>
    </x-slot>

<!-- component -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <section class="text-gray-600 body-font h-full">
        <div class="container px-5 py-5 mx-auto">
          <div class="flex flex-wrap -m-4 justify-center ">

    <div>
<div>

</div>

<div class="flex w-full justify-center"><h1 class="title-font text-lg text-3xl pb-5 text-gray-900 mb-3">{{$post->title}}</h1></div>
<div class="flex w-full pb-2 justify-center"><p class="font-bold">Par : {{ $post->user->name }}</p><p class="ml-3">le : {{ $post->created_at->format('d M Y') }}</p></div>


   
    <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{ asset('/storage/'. $post->picture) }}"/>
    <div class="flex items-center flex-wrap"><p class=" p-5" >{{$post->content}}</p></div>




      </div>
    </div>

 
<!--End here-->
          </div>
        </div>
      </section>

     
</body>
</html>

</x-app-layout>


