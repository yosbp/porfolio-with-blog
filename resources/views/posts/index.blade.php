<title>Yosmar B. Blog</title>

<x-app-layout>

    <div class="container py-8 mx-auto ">
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 ">
            @foreach ($posts as $post)
                <article class="w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2 @endif" style="background-image: url(@if($post->image) {{Storage::url($post->image->url)}} @else https://cdn.pixabay.com/photo/2023/01/10/21/31/trees-7710539_960_720.jpg @endif)">
                    <div class="w-full h-full px-8 flex flex-col justify-center">
                        <div>
                            @foreach ($post->tags as $tag)
                            <a href="{{route('posts.tag', $tag)}}" class="inline-block mb-3 px-3 h-6 bg-{{$tag->color}}-400 text-gray-500 rounded-full">{{$tag->name}}</a>                                
                            @endforeach
                        </div>
                        <h1 class="text-4xl leading-8 font-bold">
                            <a class="text-black" href="{{route('posts.show', $post)}}">{{$post->name}}</a>
                        </h1>
                    </div>
                </article>
            @endforeach
        </div>

        <div class="mt-4">
            {{$posts->links()}}
        </div>

    </div>

</x-app-layout>