@extends('layouts.app')

@section('cover')
    <div class="cover">
        <div class="cover-inner">
            <div class="cover-contents">
                
            </div>
        </div>
    </div>
@endsection

@section('content')
        <h1>{{ $news->title }}</h1>
        @if (Auth::check())
            {!! $news->content !!}
            <br>
            【記者：{{ $news_repoter->name }}】<br>
            【カテゴリ：{{ $news_category->name }}】<br>
            【更新：{{ $news->created_at }}】
        @else
            <?php $kiji = mb_strimwidth($news->content, 0, 200, "..."); ?>
            <?php echo $kiji; ?>
            ここからは<a href="{{ route('login') }}">login</a>が必要です
        @endif
    
@endsection