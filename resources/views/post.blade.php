<x-layout>
    <article>
        <h1>{{ $post->title }}</h1>
        {!! $post->body !!}
        <a href="/">Get back</a>
    </article>
</x-layout>
