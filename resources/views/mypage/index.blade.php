<h1>mypage index</h1>

@include('commons.navbar')

<hr>
@if($userdetail)
    <a href="{{ route('user.edit') }}">edit</a><br>
    {{ $userdetail->name }} <br>
    {{ $userdetail->furigana }} <br>
    {{ $userdetail->address }} <br>
    {{ $userdetail->tel }} <br>
    {{ $userdetail->birth_year }} <br>
    {{ $userdetail->birth_mon }} <br>
    {{ $userdetail->birth_day }} <br>
    {{ $userdetail->sex }} <br>
    {{ $userdetail->job }} <br>
@else
    @include('commons.error_messages')
    <?php $user = Auth::user(); ?>
    <form method="POST" action="{{ route('user.store') }}">
    {{ csrf_field() }}
    <input type="hidden" name="user_id" value="{{ $user->id }}">
    name<br>
    <?php $default_name = $user->name; ?> 
    <input type="text" name="name" value="{{ old('name', $default_name) }}"><br><br>
    
    ふりがな<br>
    <input type="text" name="furigana" value="{{ old('furigana') }}"><br><br>
    
    住所<br>
    <input type="text" name="address" value="{{ old('address') }}"><br><br>
    
    電話<br>
    <input type="text" name="tel" value="{{ old('tel') }}"><br><br>
    
    誕生日<br>
    <input type="text" name="birth_year" value="{{ old('birth_year') }}">年
    <input type="text" name="birth_mon" value="{{ old('birth_mon') }}">月
    <input type="text" name="birth_day" value="{{ old('birth_day') }}">日
    <br><br>
    
    性別<br>
    <input type="text" name="sex" value="{{ old('sex') }}"><br><br>
    
    職業<br>
    <input type="text" name="job" value="{{ old('job') }}"><br><br>
    
    <input type='submit' value='送信'>
    </form>
@endif

<hr>

<a href="/">index</a>
