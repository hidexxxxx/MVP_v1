<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\UserProfile;

class UserProfileController extends Controller
{

    public function index()
    {
        $UserProfiles = [];
        return view('UserProfile.index' ,compact('UserProfiles'));// すべてのユーザープロフィールを表示
    }


    public function create()
    {
        return view('UserProfile.create'); // 新しいユーザープロフィール作成用のフォームを表示
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) // 新しいユーザープロフィールをデータベースに格納する
    {
        // バリデーション
        $validator = Validator::make($request->all(), [
            'Nickname' => 'required | max:50',
            'profile_image' => '',
            'SNS' => '',
            'Industry' => 'required | max:200',
            'Job-Description' => 'required | max:500',
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

    /**
     * Display the specified resource.
     */
    public function show(string $id) // 特定のユーザープロフィールの詳細を表示
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) // 特定のユーザープロフィールを編集
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)// 特定のユーザープロフィールをデータベースに更新する
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)// 特定のユーザープロフィールを削除
    {
        //
    }
}
