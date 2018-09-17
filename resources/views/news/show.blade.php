@include('commons.navbar')
@include('commons.search')
<hr>

<h3>{{ $news->title }}</h3>

@if (Auth::check())
    {{ $news->content }}
    <br>
    {{ $news->cate }} <br>
    {{ $news->repo }}

@else
    <?php $kiji = mb_strimwidth($news->content, 0, 200, "..."); ?>
    <?php echo $kiji; ?>
    ここからは<a href="{{ route('login') }}">login</a>が必要です
@endif
<hr>
<a href="{{ route('news.index') }}">news index</a><br>
<a href="/">index</a>