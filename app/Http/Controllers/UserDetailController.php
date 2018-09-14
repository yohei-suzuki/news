<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\UserDetail;
use App\User;

class UserDetailController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $user = Auth::user();
            
        $ud = UserDetail::where('user_id', '=', $user->id)->first();
            
        return view('mypage.index', ['userdetail' => $ud]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'   => 'required',
            'furigana' => 'required',
            'address'   => 'required|max:191',
            'tel'   => 'required|max:191',
            'birth_year' => 'required',
            'birth_mon' => 'required',
            'birth_day' => 'required',
            'sex' => 'required',
            'job' => 'required',
        ]);
        
        $ud = new UserDetail();
        $ud->user_id = $request->user_id;
        $ud->name = $request->name;
        $ud->furigana = $request->furigana;
        $ud->address = $request->address;
        $ud->tel = $request->tel;
        $ud->birth_year = $request->birth_year;
        $ud->birth_mon = $request->birth_mon;
        $ud->birth_day = $request->birth_day;
        $ud->sex = $request->sex;
        $ud->job = $request->job;
        $ud->save();
        
        $user = User::find($request->user_id);
        $user->name = $request->name;
        $user->save();
        
        $url = route('user.index');
        return redirect($url);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user = Auth::user();
        $ud = UserDetail::where('user_id', '=', $user->id)->first();
        
        return view('mypage.edit', ['ud' => $ud]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'name'   => 'required',
            'furigana' => 'required',
            'address'   => 'required|max:191',
            'tel'   => 'required|max:191',
            'birth_year' => 'required',
            'birth_mon' => 'required',
            'birth_day' => 'required',
            'sex' => 'required',
            'job' => 'required',
        ]);
        
        $ud = UserDetail::find($request->id);
        $ud->name = $request->name;
        $ud->furigana = $request->furigana;
        $ud->address = $request->address;
        $ud->tel = $request->tel;
        $ud->birth_year = $request->birth_year;
        $ud->birth_mon = $request->birth_mon;
        $ud->birth_day = $request->birth_day;
        $ud->sex = $request->sex;
        $ud->job = $request->job;
        $ud->save();
        
        $user = User::find($request->user_id);
        $user->name = $request->name;
        $user->save();
        
        $url = route('user.index');
        return redirect($url);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
