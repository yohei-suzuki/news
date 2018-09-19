@extends('layouts.app')

@section('cover')
    <div class="cover">
        <div class="cover-inner">
            <div class="cover-contents">
                <h1>ニュースを配信します</h1>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
    @isset($news)
        @foreach($news as $d)
            <a href="{{ route('news.show', ['id' => $d->id]) }}">{{ $d->id }}</a> {{ $d->title }} <br>
        @endforeach
    @endisset
    {!! $news->render() !!}
    </div>

@endsection