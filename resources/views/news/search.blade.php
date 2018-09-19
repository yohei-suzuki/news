@extends('layouts.app')

@section('cover')
    <div class="cover">
        <div class="cover-inner">
            <div class="cover-contents">
                <h1>検索</h1>
            </div>
        </div>
    </div>
@endsection

@section('content')
    {{ $keyword }} で検索した結果<br>
    @isset($results)
        @foreach($results as $result)
            <h3>{{ $result->title }}</h3>
                <?php $kiji = mb_strimwidth($result->content, 0, 150, "..."); ?>
                <?php echo $kiji; ?>
                <a href="{{ route('news.show', ['id' => $result->id]) }}">続きを読む</a>
                <br>
        @endforeach
    @endisset
@endsection