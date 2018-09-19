@extends('layouts.app')
<h1>mypage edit</h1>

@section('content')
@include('commons.error_messages')
    <table class="table table-bordered">
    <form method="POST" action="{{ route('user.update') }}">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <input type="hidden" name="id" value="{{ $ud->id }}">
    <input type="hidden" name="user_id" value="{{ $ud->user_id }}">
    <tr>
        <td>名前</td>
        <td>
            <?php $name = $ud->name; ?> 
            <input type="text" name="name" size="40" value="{{ old('name', $name) }}">
        </td>
    </tr>
    <tr>
        <td>ふりがな</td>
        <td>
            <?php $furigana = $ud->furigana; ?> 
            <input type="text" name="furigana" size="40" value="{{ old('furigana', $furigana) }}">
        </td>
    </tr>
    <tr>
        <td>住所</td>
        <td>
            <?php $address = $ud->address; ?>
            <input type="text" name="address"  size="40" value="{{ old('address', $address) }}">
        </td>
    </tr>
    <tr>
        <td>電話</td>
        <td>
            <?php $tel = $ud->tel; ?>
            <input type="text" name="tel" size="40" value="{{ old('tel', $tel) }}">
        </td>
    </tr>
    <tr>
        <td>誕生日</td>
        <td>
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
        </td>
    </tr>
    <tr>
        <td>性別</td>
        <td>
            <?php $sex = $ud->sex; ?>
            <input type="radio" name="sex" value="men" @if(old('sex', $sex)=='men') checked  @endif>男性<br>
            <input type="radio" name="sex" value="woman" @if(old('sex', $sex)=='woman') checked  @endif>女性<br>
        </td>
    </tr>
    <tr>
        <td>職業</td>
        <td>
            <?php $job = $ud->job; ?>
            <input type="text" name="job" size="40" value="{{ old('job', $job) }}"><br><br>
        </td>
    </tr>
    <tr>
        <td colspan="2"><input type='submit' value='送信'></td>
    </tr>
    </form>
    </table>
@endsection