<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\UserProfile;

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
        $result = UserProfile::create($request->all());
        return redirect()->route('UserProfile.index');
    }


    // public function show(string $id) // 特定のユーザープロフィールの詳細を表示
    public function show($id)
    {
        $UserProfile = UserProfile::find($id);
        return response()->view('UserProfile.show', compact('UserProfile'));
    }


    public function edit(string $id) // 特定のユーザープロフィールを編集
    {
        //
    }


    public function update(Request $request, string $id)// 特定のユーザープロフィールをデータベースに更新する
    {
        //
    }


    public function destroy(string $id)// 特定のユーザープロフィールを削除
    {
        //
    }
}
