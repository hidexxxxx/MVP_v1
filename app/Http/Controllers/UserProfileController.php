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


    // プロフィール情報を保存
    public function store(Request $request)
    {
    // 画像ファイルの取得と保存
    $image = $request->file('ProfileImage');
    $filename = null;
    if ($image) {
        // ファイル名を生成
        $filename = time() . '_' . $image->getClientOriginalName();

        // 画像を指定のディレクトリに保存
        $image->move(public_path('storage/images'), $filename);

        // 以下でも可能
        // $image->move(storage_path('app/public/images'), $filename);
    }

    // バリデーション
    $validator = Validator::make($request->all(), [
        'Nickname' => 'required|max:50',
        'SNS' => '',
        'Industry' => 'required|max:200',
        'JobDescription' => 'required|max:500',
        'Career' => 'required|max:400',
        'Qualification' => '',
        'Disk' => '',
        'Whyme' => '',
        'Product' => '',
        'Hobby' => 'required|max:200',
        'Birthplace' => '',
        'HolidayTime' => '',
        'OneWord' => '',
        'Contact' => 'required|max:200',
    ]);

    // バリデーション:エラー
    if ($validator->fails()) {
        return redirect()
            ->route('UserProfile.create')
            ->withInput()
            ->withErrors($validator);
    }

    // ユーザープロフィールの作成
    $userProfile = new UserProfile();
    $userProfile->Nickname = $request->input('Nickname');
    $userProfile->profile_image = $filename;
    $userProfile->SNS = $request->input('SNS');
    $userProfile->Industry = $request->input('Industry');
    $userProfile->JobDescription = $request->input('JobDescription');
    $userProfile->Career = $request->input('Career');
    $userProfile->Qualification = $request->input('Qualification');
    $userProfile->Disk = $request->input('Disk');
    $userProfile->Whyme = $request->input('Whyme');
    $userProfile->Product = $request->input('Product');
    $userProfile->Hobby = $request->input('Hobby');
    $userProfile->Birthplace = $request->input('Birthplace');    $userProfile->HolidayTime = $request->input('HolidayTime');
    $userProfile->OneWord = $request->input('OneWord');
    $userProfile->Contact = $request->input('Contact');
    $userProfile->user_id = Auth::user()->id;

    $userProfile->save(); // ユーザープロフィールを保存

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
