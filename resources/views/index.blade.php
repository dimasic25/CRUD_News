@extends('layout')

@section('title', 'News')

@section('content')
    <a class="btn btn-primary" href="{{route('news.create')}}" role="button">Create new record</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Publish date</th>
            <th scope="col">Content</th>
        </tr>
        </thead>
        <tbody>
        @foreach($news as $record)
            <tr>
                <th scope="row">{{$record->id}}</th>
                <td>{{$record->title}}</td>
                <td>{{$record->publish_date}}</td>
                <td>{{$record->content}}</td>
                <td>
                    <a class="btn btn-primary" href="{{route('news.edit', $record)}}" role="button">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
