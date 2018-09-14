<h1>mypage index</h1>

@include('commons.navbar')

<hr>
@include('commons.error_messages')
    
    <form method="POST" action="{{ route('user.update') }}">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <input type="hidden" name="id" value="{{ $ud->id }}">
    <input type="hidden" name="user_id" value="{{ $ud->user_id }}">
    name<br>
    <?php $name = $ud->name; ?> 
    <input type="text" name="name" value="{{ old('name', $name) }}"><br><br>
    
    ふりがな<br>
    <?php $furigana = $ud->furigana; ?> 
    <input type="text" name="furigana" value="{{ old('furigana', $furigana) }}"><br><br>
    
    住所<br>
    <?php $address = $ud->address; ?>
    <input type="text" name="address" value="{{ old('address', $address) }}"><br><br>
    
    電話<br>
    <?php $tel = $ud->tel; ?>
    <input type="text" name="tel" value="{{ old('tel', $tel) }}"><br><br>
    
    誕生日<br>
    <?php $year = $ud->birth_year; ?>
    <?php $mon = $ud->birth_mon; ?>
    <?php $day = $ud->birth_day; ?>
    <input type="text" name="birth_year" value="{{ old('birth_year', $year) }}">年
    <input type="text" name="birth_mon" value="{{ old('birth_mon', $mon) }}">月
    <input type="text" name="birth_day" value="{{ old('birth_day', $day) }}">日
    <br><br>
    
    性別<br>
    <?php $sex = $ud->sex; ?>
    <input type="text" name="sex" value="{{ old('sex', $sex) }}"><br><br>
    
    職業<br>
    <?php $job = $ud->job; ?>
    <input type="text" name="job" value="{{ old('job', $job) }}"><br><br>
    
    <input type='submit' value='送信'>
    </form>