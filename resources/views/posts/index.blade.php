<x-app-layout>

@if ($posts->count())

    <x-post-items :posts="$posts" />

@endif


</x-app-layout>