<form method="get" action="{{ route('news.search') }}">
    {{ csrf_field() }}
    <input type="test" name="word" value="{{ old('ward') }}">
    <input type="submit" value="検索">
</form>