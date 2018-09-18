@extends('layouts.app')
<h1>k_news_user Search</h1>

@section('content')
    {{ $keyword }} で検索した結果<br>
    <hr>
    @isset($results)
        @foreach($results as $result)
            {{ $result->title }}<br>
                <?php $kiji = mb_strimwidth($result->content, 0, 150, "..."); ?>
                <?php echo $kiji; ?>
                <a href="{{ route('news.show', ['id' => $result->id]) }}">続きを読む</a>
                <br>
        @endforeach
    @endisset
    <hr>
    <a href="{{ route('news.index') }}">news index</a><br>
    <a href="/">index</a>
@endsection