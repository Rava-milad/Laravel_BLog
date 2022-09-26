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
    {{--@foreach ($posts as $post)
        <article class="{{ $loop->even ? 'foo' : '' }}">
            <a href="/posts/{{ $post->slug }}">
                <h1>{!! $post->title !!}</h1>
            </a>
            <h3><a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }}</a></h3>

            <div>
                {!! $post->excerpt !!}
            </div>
        </article>
    @endforeach--}}
<x-layout>
    @include('_post-header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            <x-post-featured-card />
        <div class="lg:grid lg:grid-cols-2">
            <x-post-card />
            <x-post-card />
        </div>
        <div class="lg:grid lg:grid-cols-3">
            <x-post-card />
            <x-post-card />
            <x-post-card />
        </div>
    </main>
</x-layout>
