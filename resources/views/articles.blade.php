<x-layout>
    <h1>Articles</h1>
    <div class="featured">
        <h1>{{$featuredArticle->title}}</h1>
        {{$featuredArticle->body}}
    </div>
    <ul>
        @foreach($articles as $article)
            <li>{{$article->title}}</li>
        @endforeach
    </ul>
    <a href="{{route('contact')}}">Contact</a>
    <a href="{{route('home')}}">Home</a>
</x-layout>