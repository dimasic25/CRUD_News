@extends('layout')

@section('title', isset($news) ? 'Update record' : 'Create new record')

@section('content')
    <form method="post"
          @if(isset($news))action="{{ route('news.update', $news) }}"
          @else
          action="{{ route('news.store') }}
          @endif>
        @csrf
          @isset($news)
          @method('put')
          @endisset
              <div class=" form-group">
    <label for="formGroupExampleInput">Title</label>
    <input name="title"
           value="{{isset($news) ? $news->title : null}}" type="text" class="form-control"
           id="formGroupExampleInput" placeholder="Title">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Content</label>
        <textarea name="content"
                  class="form-control"
                  id="exampleFormControlTextarea1" rows="3">{{isset($news) ? $news->content : null}}</textarea>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Date</label>
        <input name="publish_date"
               value="{{isset($news) ? $news->publish_date : 'yyyy-mm-dd hours:minutes:seconds'}}" type="datetime"
               class="form-control"
               id="formGroupExampleInput">
    </div>

    <button class="btn btn-primary btn-lg" type="submit">{{isset($news) ? 'Update' : 'Create'}}</button>
    <a class="btn btn-secondary btn-lg" href="{{route('news.index')}}" role="button">Back to News</a>
    </form>
@endsection
