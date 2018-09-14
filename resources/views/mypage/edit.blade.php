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
    <?php $year_end = date("Y"); ?>
    <select name="birth_year">
    @for ($i = 1970; $i <= $year_end; $i++)
        <option value="{{ $i }}" @if(old('birth_year', $year)==$i) selected  @endif>{{ $i }}</option>
    @endfor
    </select>
    年
    
    <?php $mon = $ud->birth_mon; ?>
    <select name="birth_mon">
    @for ($i = 1; $i <= 12; $i++)
        <option value="{{ $i }}" @if(old('birth_mon', $mon)==$i) selected  @endif>{{ $i }}</option>
    @endfor
    </select>
    月
    
    <?php $day = $ud->birth_day; ?>
    <select name="birth_day">
    @for ($i = 1; $i <= 31; $i++)
        <option value="{{ $i }}" @if(old('birth_day', $day)==$i) selected  @endif>{{ $i }}</option>
    @endfor
    </select>
    日
    
    <br><br>
    
    性別<br>
    <?php $sex = $ud->sex; ?>
    <input type="text" name="sex" value="{{ old('sex', $sex) }}"><br><br>
    
    職業<br>
    <?php $job = $ud->job; ?>
    <input type="text" name="job" value="{{ old('job', $job) }}"><br><br>
    
    <input type='submit' value='送信'>
    </form>
    
<?php

function birth_year($year){
    $start = 1926;
    $end = 2010;
    print '<select name="birth_year">';
    for($i = $start; $i <= $end; $i++){
        if($i == $year){
            
            print "<option value=\"$i\" @if(Input::old('birth_year')==$i selected @endif>$i</option>" ;
        } else {
            print "<option value=\"$i\">$i</option>";
        }
    }
    print "</select>";
    
    
}

?>