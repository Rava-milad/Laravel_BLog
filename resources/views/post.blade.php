<x-layout>

    <article>
        <h1>{{ $post->title }}</h1>
        <h6>Author: <a href="#">{{ $post->user->name }}</a> </h6>
        <h5>Category: <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }}</a></h5>
        <div>
            {!! $post->body !!}
        </div>

        <a href="/">Go Home Dady</a>
    </article>
</x-layout>
