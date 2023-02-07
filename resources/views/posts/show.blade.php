<title>{{'Yosmar B. - Blog | '.$post->name}}</title>

<x-app-layout> 
    <div class="container py-8 mx-auto">
        <h1 class="text-4xl font-bold text-gray-400">{{$post->name}}</h1>

        <div class="text-lg text-gray-900 mb-2 ">
            {!!$post->extract!!}
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            
            {{-- contenido principal --}}
            
            <div class="col-span-2">
                <figure>

                    <img class="w-full h-80 object-cover object-center" src=" @if($post->image){{url('storage/'.$post->image->url)}} @else https://cdn.pixabay.com/photo/2023/01/10/21/31/trees-7710539_960_720.jpg @endif" alt="">
                </figure>

                <div class="text-base text-gray-500 mt-4">
                    {!!$post->body!!}
                </div>

            </div>
            {{-- contenido relacionado --}}
            <aside>

                <h1 class="text-2xl font-bold text-gray-800 mb-4">Mas en {{$post->category->name}}</h1>

                <ul>
                    @foreach ($similares as $similar)
                        <li>
                            <a class="flex mb-3" href="{{route('posts.show', $similar)}}"> 
                                <img class="w-36 h-20 object-cover object-center" src="@if($similar->image){{$similar->image->url}} @else https://cdn.pixabay.com/photo/2023/01/10/21/31/trees-7710539_960_720.jpg @endif" alt="">
                                <span class="ml-2 text-indigo-700">{{$similar->name}}</span>
                            </a>
                            
                        </li>
                    @endforeach
                </ul>

            </aside>
        </div>
    </div>
</x-app-layout>