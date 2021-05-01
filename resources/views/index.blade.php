@extends('layout')

@section('content')
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
                <th scope="row">{{$news->id}}</th>
                <td>{{$news->title}}</td>
                <td>{{$news->publish_date}}</td>
                <td>{{$news->content}}</td>
            </tr>

        </tbody>
    </table>
@endsection
