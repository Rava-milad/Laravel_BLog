{{-- @extends('layout')


@section('content')
    @foreach ($posts as $post)
        <article class="{{ $loop->even ? 'foo' : '' }}">
            <a href="/posts/{{ $post->slug }}">
                <h1>{{ $post->title }}</h1>
            </a>

            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach
@endsection --}}
<x-layout>
    @foreach ($posts as $post)
        <article class="{{ $loop->even ? 'foo' : '' }}">
            <a href="/posts/{{ $post->slug }}">
                <h1>{!! $post->title !!}</h1>
            </a>
            <h3><a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }}</a></h3>

            <div>
                {!! $post->excerpt !!}
            </div>
        </article>
    @endforeach
</x-layout>
