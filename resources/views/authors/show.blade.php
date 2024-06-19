<x-app-layout>

@if ($posts->count())

<h1 class="mt-10 text-3xl font-semibold">Latest post by {{ $authorName }}</h1>

<ul class="mt-10 space-y-10">

    @foreach ($posts as $post )

    <li>
        <div class="space-y-5 prose max-w-none text-justify">

            <h2 class="not-prose">

                <a class="hover:text-indigo-700 transition-colors durration-100" href="/posts/{{ $post->slug }}">{{ $post->title }}</a>

            </h2>

            <div>{{ $post->excerpt }}</div>
            
            <x-post-meta :post="$post" />
        </div>

    </li>

    @endforeach

</ul> 

@endif


</x-app-layout>