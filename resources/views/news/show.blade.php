@extends('layouts.app')

@section('cover')
    <div class="cover">
        <div class="cover-inner">
            <div class="cover-contents">
                <h1>{{ $news->title }}</h1>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        @if (Auth::check())
            {!! $news->content !!}
            <br>
            {{ $news->cate }} <br>
            {{ $news->repo }}
        @else
            <?php $kiji = mb_strimwidth($news->content, 0, 200, "..."); ?>
            <?php echo $kiji; ?>
            ここからは<a href="{{ route('login') }}">login</a>が必要です
        @endif
    </div>
@endsection