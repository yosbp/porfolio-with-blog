<title>{{'Yosmar B. - Blog | '.$tag->name}}</title>

<x-app-layout>

    <div class="py-5 mx-auto max-w-5xl px-2 sm:px-6 lg:px-8">
        <h1 class="uppercase text-center text-3xl font-bold">Etiquetas: {{$tag->name}}</h1>

        @foreach ($posts as $post)
            <x-card-post :post="$post"> </x-card-post>
        @endforeach

        <div>
            {{$posts->links()}}
        </div>
    </div>
    
</x-app-layout>