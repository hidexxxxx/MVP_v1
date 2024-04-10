<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\UserProfile;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Storage;


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
            // $image->move(public_path('storage/images'), $filename);
            // $image->storeAs('public/images', $filename);
            $image->storeAs('../storage/app/public/images', $filename);
            // 以下でも可能
            // $image->move(storage_path('app/public/images'), $filename);
        }
        // バリデーション
        $validator = Validator::make($request->all(), [
            'Nickname' => 'required|max:50',
            // 'ProfileImage' => 'image|mimes:jpeg,png,jpg,gif',
            'ProfileImage' => 'image|mimes:jpeg,png,jpg,gif|max:3000',
            'SNS' => '',
            'Industry' => 'required|max:30',
            'JobDescription' => 'required',
            'Career' => 'required',
            'Qualification' => '',
            'Disk' => '',
            'Whyme' => '',
            'Product' => '',
            'Hobby' => 'required|max:200',
            'Birthplace' => '',
            'HolidayTime' => '',
            'OneWord' => 'required|max:45',
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
        $userProfile->Birthplace = $request->input('Birthplace');
        $userProfile->HolidayTime = $request->input('HolidayTime');
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


    public function update(Request $request, $id)
    {
        // バリデーション
        $validator = Validator::make($request->all(), [
            'Nickname' => 'required|max:50',
            // 'ChangedProfileImage' => 'image|mimes:jpeg,png,jpg,gif',
            'ChangedProfileImage' => 'image|mimes:jpeg,png,jpg,gif|max:3000',
            'SNS' => '',
            'Industry' => 'required|max:30',
            'JobDescription' => 'required',
            'Career' => 'required',
            'Qualification' => '',
            'Disk' => '',
            'Whyme' => '',
            'Product' => '',
            'Hobby' => 'required|max:200',
            'Birthplace' => '',
            'HolidayTime' => '',
            'OneWord' => 'required|max:45',
            'Contact' => 'required|max:200',
        ]);
        // バリデーション:エラー
        if ($validator->fails()) {
            return redirect()
                ->route('UserProfile.edit', $id)
                ->withInput()
                ->withErrors($validator);
        }
        $userProfile = UserProfile::find($id);
        // 新しい画像がアップロードされた場合は、古い画像を削除してから保存し、パスを更新する
        if ($request->hasFile('ChangedProfileImage')) {
            // 古い画像を削除
            if ($userProfile->profile_image) {
                Storage::disk('public')->delete($userProfile->profile_image);
            }
            // 新しい画像を保存
            $changedImage = $request->file('ChangedProfileImage');
            $filename = time() . '_' . $changedImage->getClientOriginalName();
            // $changedImage->storeAs('public/images', $filename); // ファイルをstorage/app/public/imagesに保存
            $changedImage->storeAs('../storage/app/public/images', $filename);
            $userProfile->profile_image = $filename; // データベースのパスを更新
        }
        // その他のプロフィール情報を更新
        $userProfile->fill($request->except('profile_image'))->save();
        return redirect()->route('UserProfile.index');
    }


    // プロフィールデータの消去
    public function destroy($id)
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
        return response()->view('UserProfile.mypage', compact('UserProfiles'));
    }

}
