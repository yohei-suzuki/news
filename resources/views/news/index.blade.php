@extends('layouts.app')


@section('content')

    @isset($news)
        @foreach($news as $d)
            <a href="{{ route('news.show', ['id' => $d->id]) }}">{{ $d->id }}</a> {{ $d->title }} <br>
        @endforeach
    @endisset
    {!! $news->render() !!}
    <hr>

    <a href="/">index</a>
@endsection