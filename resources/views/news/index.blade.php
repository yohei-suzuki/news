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
        <table class="table">
            <th>
                タイトル
            </th>
            <th>
                カテゴリ
            </th>
            <th>
                更新日時
            </th>
            @foreach($news as $d)
                <tr>
                    <td class="test-left">
                        <a href="{{ route('news.show', ['id' => $d->id]) }}">{{ $d->title }}</a>
                    </td>
                    <td class="test-left">
                        {{ $d->category_id }}           
                    </td>
                    <td class="test-left">
                        {{ $d->created_at }}
                    </td>
                </tr>
            @endforeach
        </table>
    @endisset
    {!! $news->render() !!}
    </div>

@endsection