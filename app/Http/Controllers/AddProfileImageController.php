<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Redirect;
// use App\Models\UserProfile;
// use Illuminate\Support\Facades\Validator;

// class AddProfileImageController extends Controller
// {
//     public function AddProfileImage(Request $request)
//     {
//         // 1. アップロードされた画像を取得
//         $image = $request->file('ProfileImage');

//         // 2. バリデーションを行う
//         $rules = [
//             'ProfileImage' => 'required|image|mimes:jpeg,jpg,png|max:2048', // 最大サイズ2MB
//         ];

//         // バリデーションを実行
//         $validator = Validator::make($request->all(), $rules);

//         // バリデーションエラーがある場合はリダイレクトしてエラーメッセージを表示
//         if ($validator->fails()) {
//             return Redirect::back()->withErrors($validator)->withInput();
//         }

//         // 3. 画像を保存
//         // 一時的な場所から永続的な場所に移動する
//         $path = $image->store('public/profile_images');

//         // 4. データベースに画像のパスを保存
//         $userProfile = new UserProfile();
//         $userProfile->ProfileImage = $path;
//         $userProfile->save();

//         // リダイレクト先のURLを指定
//         $redirectUrl = route('user_profile.edit', ['id' => $userProfile->id]);

//         return Redirect::to($redirectUrl);
//     }
// }
