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
    <a class="btn btn-primary btn-lg mt-2" href="{{route('news.edit', $news)}}" role="button">Edit</a>
    <a class="btn btn-primary btn-lg mt-2" href="{{route('news.index')}}" role="button">Back to News</a>
@endsection
