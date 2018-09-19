@extends('layouts.app')

@section('cover')
    <div class="cover">
        <div class="cover-inner">
            <div class="cover-contents">
                <h1>マイページ</h1>
            </div>
        </div>
    </div>
@endsection

@section('content')
    
        @if($userdetail)
            <a href="{{ route('user.edit') }}">edit</a><br>
            <table class="table table-bordered">
                <tr>
                    <td>名前</td>
                    <td>{{ $userdetail->name }}</td>
                </tr>
                <tr>
                    <td>ふりがな</td>
                    <td>{{ $userdetail->furigana }}</td>
                </tr>
                <tr>
                    <td>住所</td>
                    <td>{{ $userdetail->address }}</td>
                </tr>
                <tr>
                    <td>電話</td>
                    <td>{{ $userdetail->tel }} </td>
                </tr>
                <tr>
                    <td>生年月日</td>
                    <td>{{ $userdetail->birth_year }}年{{ $userdetail->birth_mon }}月{{ $userdetail->birth_day }}日</td>
                </tr>
                <tr>
                    <td>性別</td>
                    <td>{{ $userdetail->sex }}</td>
                </tr>
                <tr>
                    <td>職業</td>
                    <td>{{ $userdetail->job }}</td>
                </tr>
            </table>
        @else
            @include('commons.error_messages')
            <?php $user = Auth::user(); ?>
            <table class="table table-bordered">
            <form method="POST" action="{{ route('user.store') }}">
                {{ csrf_field() }}
                <input type="hidden" name="user_id" value="{{ $user->id }}">
                <tr>
                    <td>名前</td>
                    <td>
                        <?php $default_name = $user->name; ?> 
                        <input type="text" name="name" size="80" value="{{ old('name', $default_name) }}">
                        </td>
                </tr>
                <tr>
                    <td>ふりがな</td>
                    <td><input type="text" name="furigana" size="80" value="{{ old('furigana') }}"></td>
                </tr>
                <tr>
                    <td>住所</td>
                    <td><input type="text" name="address" size="80" value="{{ old('address') }}"></td>
                </tr>
                <tr>
                    <td>電話</td>
                    <td><input type="text" name="tel" size="80" value="{{ old('tel') }}"></td>
                </tr>
                <tr>
                    <td>誕生日</td>
                    <td>
                        <?php $year_end = date("Y"); ?>
                        <select name="birth_year">
                            @for ($i = 1970; $i <= $year_end; $i++)
                                <option value="{{ $i }}" @if(old('birth_year')==$i) selected  @endif>{{ $i }}</option>
                            @endfor
                        </select>
                        年
        
                        <select name="birth_mon">
                            @for ($i = 1; $i <= 12; $i++)
                                <option value="{{ $i }}" @if(old('birth_mon')==$i) selected  @endif>{{ $i }}</option>
                            @endfor
                        </select>
                        月
        
                        <select name="birth_day">
                            @for ($i = 1; $i <= 31; $i++)
                                <option value="{{ $i }}" @if(old('birth_day')==$i) selected  @endif>{{ $i }}</option>
                            @endfor
                        </select>
                        日
                    </td>
                </tr>
                <tr>
                    <td>性別</td>
                    <td>
                        <input type="radio" name="sex" value="men" @if(old('sex')=='men') checked  @endif>男性<br>
                        <input type="radio" name="sex" value="woman" @if(old('sex')=='woman') checked  @endif>女性<br>
                    </td>
                </tr>
                <tr>
                    <td>職業</td>
                    <td><input type="text" name="job" size="80" value="{{ old('job') }}"></td>
                </tr><tr>
                    <td colspan="2"><input type='submit' value='送信'></td>
                    <td></td>
                </tr>
            </form>
            </table>

        
                
            
        @endif

    

@endsection

