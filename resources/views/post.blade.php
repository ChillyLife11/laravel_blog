<x-layout>
    <article>
        <h1>{{ $post->title }}</h1>
        <p>{!! $post->body !!}</p>
        <a href="/">Get back</a>
    </article>
</x-layout>
