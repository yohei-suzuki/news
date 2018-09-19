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
    
        【{{ $news->created_at }}】
        @if (Auth::check())
            {!! $news->content !!}
            <br>
            【記者：{{ $news_repoter->name }}】　
            【カテゴリ：{{ $news_category->name }}】 
        @else
            <?php $kiji = mb_strimwidth($news->content, 0, 200, "..."); ?>
            <?php echo $kiji; ?>
            ここからは<a href="{{ route('login') }}">login</a>が必要です
        @endif
    
@endsection