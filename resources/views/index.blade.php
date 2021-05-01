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
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($news as $record)
            <tr>
                <th scope="row">{{$record->id}}</th>
                <td>
                    <a href="{{ route('news.show', $record) }}">{{$record->title}}</a>
                </td>
                <td>{{$record->publish_date}}</td>
                <td>{{$record->content}}</td>
                <td>
                    <form method="post" action="{{ route('news.destroy', $record)}}">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a class="btn btn-primary" href="{{route('news.edit', $record)}}" role="button">Edit</a>
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
