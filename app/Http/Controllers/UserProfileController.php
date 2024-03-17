<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\UserProfile;
use Auth;
use App\Models\User;

class UserProfileController extends Controller
{

    public function index()
    {
        // $UserProfiles = [];
        $UserProfiles = UserProfile::getAllOrderByUpdated_at();
        return view('UserProfile.index' ,compact('UserProfiles'));// すべてのユーザープロフィールを表示
    }


    public function create()
    {
        return view('UserProfile.create'); // 新しいユーザープロフィール作成用のフォームを表示
    }


    public function store(Request $request) // 新しいユーザープロフィールをデータベースに格納する
    {
        // バリデーション
        $validator = Validator::make($request->all(), [
            'Nickname' => 'required | max:50',
            'profile_image' => '',
            'SNS' => '',
            'Industry' => 'required | max:200',
            'JobDescription' => 'required | max:500',
            'Career' => 'required | max:400',
            'Qualification' => '',
            'Disk' => '',
            'Whyme' => '',
            'Product' => '',
            'Hobby' => 'required | max:200',
            'Birthplace' => '',
            'HolidayTime' => '',
            'OneWord' => '',
            'Contact' => 'required | max:200',
        ]);
        // バリデーション:エラー
        if ($validator->fails()) {
            return redirect()
            ->route('UserProfile.create')
            ->withInput()
            ->withErrors($validator);
        }
        // $result = UserProfile::create($request->all());

        $data = $request->merge(['user_id' => Auth::user()->id])->all();
        // dd(Auth::user());
        $result = UserProfile::create($data);
        return redirect()->route('UserProfile.index');
    }


    // 特定のユーザープロフィールの詳細を表示
    public function show($id)
    {
        $UserProfile = UserProfile::find($id);
        return response()->view('UserProfile.show', compact('UserProfile'));
    }


    // 特定のユーザープロフィールを編集
    public function edit($id)
    {
        $UserProfile = UserProfile::find($id);
        return response()->view('UserProfile.edit', compact('UserProfile'));
    }


    // 特定のユーザープロフィールをデータベースに更新する
    public function update(Request $request, $id)
    {
        //バリデーション
        $validator = Validator::make($request->all(), [
            'Nickname' => 'required | max:50',
            // 'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'SNS' => '',
            'Industry' => 'required | max:200',
            'JobDescription' => 'required | max:500',
            'Career' => 'required | max:400',
            'Qualification' => '',
            'Disk' => '',
            'Whyme' => '',
            'Product' => '',
            'Hobby' => 'required | max:200',
            'Birthplace' => '',
            'HolidayTime' => '',
            'OneWord' => '',
            'Contact' => 'required | max:200',
        ]);
        //バリデーション:エラー
        if ($validator->fails()) {
            return redirect()
            ->route('UserProfile.edit', $id)
            ->withInput()
            ->withErrors($validator);
        }
        //データ更新処理
        $result = UserProfile::find($id)->update($request->all());
        return redirect()->route('UserProfile.index');
    }


    public function destroy($id)// 特定のユーザープロフィールを削除
    {
        $result = UserProfile::find($id)->delete();
        return redirect()->route('UserProfile.index');
    }

    // ログインユーザーが作成したデータを認識させる
    public function mydata()
    {
      // Userモデルに定義したリレーションを使用してデータを取得する．
        $UserProfiles = User::query()
        ->find(Auth::user()->id)
        ->UserUserProfiles()
        ->orderBy('created_at','desc')
        ->get();
        return response()->view('UserProfile.index', compact('UserProfiles'));
    }

}
