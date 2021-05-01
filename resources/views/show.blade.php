@extends('layout')

@section('title', 'News')

@section('content')
    <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Id: {{$news->id}}</li>
            <li class="list-group-item">Title: {{$news->title}}</li>
            <li class="list-group-item">Date: {{$news->publish_date}}</li>
            <li class="list-group-item">Content: {{$news->content}}</li>
            <li class="list-group-item">Created: {{$news->created_at}}</li>
            <li class="list-group-item">Updated: {{$news->updated_at}}</li>
        </ul>
    </div>
    <form method="post" action="{{ route('news.destroy', $news)}}">
        <div class="btn-group mt-2" role="group" aria-label="Basic example">
            <a class="btn btn-primary" href="{{route('news.edit', $news)}}" role="button">Edit</a>
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
        </div>
    </form>

    <a class="btn btn-secondary btn-lg mt-2" href="{{route('news.index')}}" role="button">Back to News</a>
@endsection
