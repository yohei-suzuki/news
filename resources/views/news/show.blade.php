@include('commons.navbar')
<hr>

id : {{ $news->id }} <br>
title : {{ $news->title }} <br>

@if (Auth::check())
    {{ $news->content }} <br>
    <br>
    {{ $news->cate }} <br>
    {{ $news->repo }}

@else
    ここからは<a href="{{ route('login') }}">login</a>が必要です
@endif
<hr>
<a href="{{ route('news.index') }}">news index</a><br>
<a href="/">index</a>