<x-layout>
    <h1>{{$featuredArticle->title}}</h1>
    <div class="featured">
        {{$featuredArticle->body}}
    </div>
    <a href="{{route('articles')}}">Articles</a>
    <a href="{{route('contact')}}">Contact</a>
    <a href="{{route('home')}}">Home</a>
</x-layout>