<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\UserProfile;

class UserProfileController extends Controller
{

    public function index()
    {
        return view('UserProfile.index');// すべてのユーザープロフィールを表示
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
        //
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
