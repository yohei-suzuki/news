<h1>news index</h1>

@include('commons.navbar')
@include('commons.search')
<hr>
@isset($news)
    @foreach($news as $d)
        <a href="{{ route('news.show', ['id' => $d->id]) }}">{{ $d->id }}</a> {{ $d->title }} <br>
    @endforeach
@endisset
{!! $news->render() !!}
<hr>

<a href="/">index</a>
