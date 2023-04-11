<x-layout>
    <h1>Home</h1>
    <a href="{{route('home', ['shout' => 'Hello World'])}}">Say hello...</a>
    <h2>{{ request()->has('shout') ? request()->get('shout') : '' }}</h2>
    <h2>{{ request()->route('shout') }}</h2>
    <h2>{{ $shout ?? '' }}</h2>
    <a href="{{route('articles')}}">Articles</a>
    <a href="{{route('contact')}}">Contact</a>
</x-layout>