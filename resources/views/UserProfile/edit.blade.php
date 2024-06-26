<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('プロフィール編集画面') }}
    </h2>
  </x-slot>

  <div class="min-h-screen" style="background-image: linear-gradient(180deg, #12152b, #36394a, #5c5b65, #928174, #aa7a69);">
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-3/5 lg:w-7/12">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          @include('common.errors')
          <h1><span class="text-red-500 text-xl">*</span>マークは入力必須欄💡</h1>

          <br>
          <br>

          <form class="mb-6" action="{{ route('UserProfile.update',$UserProfile->id) }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf

            {{-- ニックネーム --}}
            <div class="flex flex-col mb-4">
              <x-input-label for="Nickname">
                  {!! __('ニックネーム(50字以内)<span class="text-red-500 text-xl">*</span>') !!}
              </x-input-label>
              <x-text-input id="Nickname" class="block mt-1 w-full" type="text" name="Nickname" value="{{$UserProfile->Nickname}}" required autofocus />
              <x-input-error :messages="$errors->get('Nickname')" class="mt-2" />
            </div>

            {{-- 区切り線 --}}
            <hr class="mt-8 mb-8 border-gray-300">

            {{-- プロフィール写真 --}}
            <div class="flex flex-col mb-4">
              <x-input-label for="ChangedProfileImage" :value="__('プロフィール画像')" />
                <input id="ChangedProfileImage" class="block mt-1 w-full" type="file" name="ChangedProfileImage" accept="image/*">
                  @if($UserProfile->profile_image)
                    <img src="{{ asset('storage/images/' . $UserProfile->profile_image) }}" alt="ProfileImage" class="w-9 h-9 object-cover rounded mr-2">
                  @endif
              <x-input-error :messages="$errors->get('ChangedProfileImage')" class="mt-2" />
            </div>

            {{-- 区切り線 --}}
            <hr class="mt-8 mb-8 border-gray-300">

            {{-- SNSの情報 --}}
            <div class="flex flex-col mb-4">
              <x-input-label for="SNS" :value="__('普段使用しているSNSのリンク')" />
              <x-text-input id="SNS" class="block mt-1 w-full" type="text" name="SNS" value="{{$UserProfile->SNS}}" autofocus placeholder="(例)：https://twitter.com/xxxxxx" />
              <x-input-error :messages="$errors->get('SNS')" class="mt-2" />
            </div>

            {{-- 区切り線 --}}
            <hr class="mt-8 mb-8 border-gray-300">

            {{-- 今いる業界 --}}
            <div class="flex flex-col mb-4">
              <x-input-label for="Industry">
                  {!! __('今いる業界(30字以内)<span class="text-red-500 text-xl">*</span>') !!}
              </x-input-label>
              <x-text-input id="Industry" class="block mt-1 w-full" type="text" name="Industry" value="{{$UserProfile->Industry}}" required autofocus placeholder="(例)：IT系 / メーカー / 金融 " />
              <x-input-error :messages="$errors->get('Industry')" class="mt-2" />
            </div>

            {{-- 区切り線 --}}
            <hr class="mt-8 mb-8 border-gray-300">

            {{-- 🔽インデントを変えるとplaceholderのスペース表示が変わってしまうため、下記のインデント記述 --}}
            {{-- 仕事の内容 --}}
            <div class="flex flex-col mb-4">
            <x-input-label for="JobDescription">
                {!! __('現職の仕事内容<span class="text-red-500 text-xl">*</span>') !!}
            </x-input-label>
            <textarea id="JobDescription" class="block mt-1 w-full" name="JobDescription" rows="10" required autofocus placeholder="(例)：
新規プロジェクトのテクニカルリーダー職

    ▶️AI技術を用いた××向けの新規プロダクトの設計や開発を担当しています。
    ▶️プロジェクトの進行管理、チームメンバーの育成やモチベーション向上など、チーム全体のパフォーマンス管理。
    ▶️市場分析や顧客ニーズの分析を基にした経営層への新規プロジェクトの提案やビジネス戦略の策定。
            ">{{$UserProfile->JobDescription}}</textarea>
            <x-input-error :messages="$errors->get('JobDescription')" class="mt-2" />
            </div>

            {{-- 区切り線 --}}
            <hr class="mt-8 mb-8 border-gray-300">

            {{-- 経歴 --}}
            <div class="flex flex-col mb-4">
            <x-input-label for="Career">
                {!! __('これまでのざっくり経歴<span class="text-red-500 text-xl">*</span>') !!}
            </x-input-label>
            <textarea id="Career" class="block mt-1 w-full" name="Career" rows="14" required autofocus placeholder="(例)：
・一社目での開発職経験
    ▶️⚪︎⚪︎向けプロダクトの設計や開発を担当しました。特に好きだった領域は××の領域や△△の技術です。

・二社目での開発マネジメント経験
    ▶️××向けプロダクトの開発チームのマネージャーとして活動。プロジェクトの進行管理はもちろんのこと、チームメンバーのモチベーション向上にも力を入れました。

・三社目でのPM職経験
    ▶️C社では、複数のプロジェクトのマネジメントを担当し、プロジェクトの計画立案から実行、スケジュールや予算の管理も行いました。

・四社目での営業部門のリーダー職経験
    ▶️D社では、⚪︎⚪︎向けサービスの営業部門のリーダーとして活動。営業チームのマネジメントを通じて、売上目標の策定や達成のための戦略立案を行いました。また、個々の営業担当者の育成や成績評価、目標設定を行いながら、チームのパフォーマンス向上に努め、市場ニーズの分析や顧客フィードバックを基に、営業戦略の改善や新規サービスの開発にも取り組みました。
            ">{{$UserProfile->Career}}</textarea>
            <x-input-error :messages="$errors->get('Career')" class="mt-2" />
            </div>

            {{-- 区切り線 --}}
            <hr class="mt-8 mb-8 border-gray-300">

            {{-- 持っている資格 --}}
            <div class="flex flex-col mb-4">
              <x-input-label for="Qualification" :value="__('保有資格')" />
              <x-text-input id="Qualification" class="block mt-1 w-full" type="text" name="Qualification" value="{{$UserProfile->Qualification}}" autofocus placeholder="(例)：AWS 認定ソリューションアーキテクト - プロフェッショナル、Docker認定アソシエイトなどのクラウド関連資格を保有" />
              <x-input-error :messages="$errors->get('Qualification')" class="mt-2" />
            </div>

            {{-- 区切り線 --}}
            <hr class="mt-8 mb-8 border-gray-300">

            {{-- Disk診断の結果 --}}
            <div class="flex flex-col mb-4">
              <x-input-label for="Disk">
                {!! __('<p>Disk診断結果(無記入でも可です。)</p>
                <p>Disk診断は人間特性を知ることにより、相手とのスムーズなコミュニケーション方法がわかります。🔽無料診断ツールは以下のリンクへ！</p>
                <p> << <a href="https://jp.vonvon.me/quiz/301" target="_blank">https://jp.vonvon.me/quiz/301</a> >> </p>') !!}
              </x-input-label>
              <select id="Disk" class="block mt-1 w-full" name="Disk" autofocus>
                  <option value="未設定" {{ $UserProfile->Disk == '未設定' ? 'selected' : '' }}>未設定</option>
                  <option value="D - 主導型(Dominance)" {{ $UserProfile->Disk == 'D - 主導型(Dominance)' ? 'selected' : '' }}>D - 主導型 (Dominance)</option>
                  <option value="I - 社交型 (Influence)" {{ $UserProfile->Disk == 'I - 社交型 (Influence)' ? 'selected' : '' }}>I - 社交型 (Influence)</option>
                  <option value="S - 安定型 (Steadiness)" {{ $UserProfile->Disk == 'S - 安定型 (Steadiness)' ? 'selected' : '' }}>S - 安定型 (Steadiness)</option>
                  <option value="C - 慎重型 (Conscientiousness)" {{ $UserProfile->Disk == 'C - 慎重型 (Conscientiousness)' ? 'selected' : '' }}>C - 慎重型 (Conscientiousness)</option>
              </select>
              <x-input-error :messages="$errors->get('Disk')" class="mt-2" />
            </div>

            {{-- 区切り線 --}}
            <hr class="mt-8 mb-8 border-gray-300">

            {{-- Whyme --}}
            <div class="flex flex-col mb-4">
              <x-input-label for="Whyme" :value="__('Whyme')" />
              <x-text-input id="Whyme" class="block mt-1 w-full" type="text" name="Whyme" value="{{$UserProfile->Whyme}}" autofocus placeholder="現在のWhyMeでも当時のWhyMeでもあれば記載お願いします" />
              <x-input-error :messages="$errors->get('Whyme')" class="mt-2" />
            </div>

            {{-- 区切り線 --}}
            <hr class="mt-8 mb-8 border-gray-300">

            {{-- プロダクトがあればURL --}}
            <div class="flex flex-col mb-4">
              <x-input-label for="Product" :value="__('ProductのURL')" />
              <x-text-input id="Product" class="block mt-1 w-full" type="text" name="Product" value="{{$UserProfile->Product}}" autofocus placeholder="(例)：https://respair.sakura.ne.jp/GeekCompass/welcome" />
              <x-input-error :messages="$errors->get('Product')" class="mt-2" />
            </div>

            {{-- 区切り線 --}}
            <hr class="mt-8 mb-8 border-gray-300">

            {{-- 趣味、好きなこと --}}
            <div class="flex flex-col mb-4">
              <x-input-label for="Hobby">
                  {!! __('趣味(200字以内)<span class="text-red-500 text-xl">*</span>') !!}
              </x-input-label>
              <textarea id="Hobby" class="block mt-1 w-full" name="Hobby" rows="3" required autofocus placeholder="(例)：自然とアウトドア活動を楽しんでいます。山登りやキャンプ、写真撮影など、自然の美しさを探求することが私のリフレッシュ方法です。">{{$UserProfile->Hobby}}</textarea>
              <x-input-error :messages="$errors->get('Hobby')" class="mt-2" />
            </div>

            {{-- 区切り線 --}}
            <hr class="mt-8 mb-8 border-gray-300">

            {{-- 出身地 --}}
            <div class="flex flex-col mb-4">
              <x-input-label for="Birthplace" :value="__('出身地')" />
              <x-text-input id="Birthplace" class="block mt-1 w-full" type="text" name="Birthplace" value="{{$UserProfile->Birthplace}}" autofocus placeholder="(例)：福岡県 / 東京都 / ..." />
              <x-input-error :messages="$errors->get('Birthplace')" class="mt-2" />
            </div>

            {{-- 区切り線 --}}
            <hr class="mt-8 mb-8 border-gray-300">

            {{-- 休日の過ごし方 --}}
            <div class="flex flex-col mb-4">
              <x-input-label for="HolidayTime" :value="__('休日の過ごし方')" />
              <textarea id="HolidayTime" class="block mt-1 w-full" name="HolidayTime" rows="3" autofocus placeholder="(例)：昼間は自然に出かけてア散歩し、夜は美味しい食事とゆっくりした時間を過ごします。">{{$UserProfile->HolidayTime}}</textarea>
              <x-input-error :messages="$errors->get('HolidayTime')" class="mt-2" />
            </div>

            {{-- 区切り線 --}}
            <hr class="mt-8 mb-8 border-gray-300">

            {{-- 一言 --}}
            <div class="flex flex-col mb-4">
              <x-input-label for="OneWord">
                  {!! __('ひとこと(45字以内)<span class="text-red-500 text-xl">*</span>') !!}
              </x-input-label>
              <x-text-input id="OneWord" class="block mt-1 w-full" type="text" name="OneWord" value="{{$UserProfile->OneWord}}" required autofocus placeholder="(例)：クラウドの未来を創る一員として、常に挑戦し続けます！" />
              <x-input-error :messages="$errors->get('OneWord')" class="mt-2" />
            </div>

            {{-- 区切り線 --}}
            <hr class="mt-8 mb-8 border-gray-300">

            {{-- 連絡方法と連絡先 --}}
            <div class="flex flex-col mb-4">
              <x-input-label for="Contact">
                  {!! __('連絡方法(200字以内)<span class="text-red-500 text-xl">*</span>') !!}
              </x-input-label>
              <textarea id="Contact" class="block mt-1 w-full" name="Contact" rows="3" required autofocus placeholder="(例)：自分のX(https://twitter.com/sociality_nxt_0)までDMお願いします！">{{$UserProfile->Contact}}</textarea>
              <x-input-error :messages="$errors->get('Contact')" class="mt-2" />
            </div>

            {{-- 戻るボタン --}}
            <div class="flex items-center justify-end mt-8">
              <a href="{{ url()->previous() }}">
                <x-secondary-button class="ml-3">
                  {{ __('Back') }}
                </x-secondary-button>
              </a>

              {{-- アップデートボタン --}}
              <x-primary-button class="ml-3">
                {{ __('Update') }}
              </x-primary-button>

            </form>

              <!-- 削除ボタン -->
              <form action="{{ route('UserProfile.destroy',$UserProfile->id) }}" method="POST" class="text-left">
                @method('delete')
                @csrf
                <x-danger-button class="ml-3">
                  <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="white">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                  </svg>
                </x-danger-button>
              </form>

        </div>
      </div>
    </div>
  </div>

  <footer class="w-full text-gray-600 body-font mt-10">
    <div class="container px-5 py-8 mx-auto flex flex-col sm:flex-row justify-center items-center">
        <img src="{{ asset('images/LeapCompass.png') }}" class="p-2 hover:cursor-pointer" alt="Logo" style="width:15%; height:auto;" onclick="window.location.href = '/LeapCompass360/UserProfile'">
        <div class="flex flex-col sm:flex-row items-center">
          <p class="text-sm text-gray-700 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-700 py-2">© 2024 Leap Compass 360 —</p>

          {{-- 🔽デプロイサーバー下でのURL --}}
          <a href="/LeapCompass360/UserProfile/terms/TermsConditions" class="sm:ml-4">
              <button class="inline-flex items-center font-light text-gray-700 bg-transparent border-0 py-1 px-3 focus:outline-none ">利用規約</button>
          </a>

          {{-- 🔽デプロイサーバー下でのURL --}}
          <a href="/LeapCompass360/UserProfile/terms/PrivacyPolicy" class="sm:ml-4">
              <button class="inline-flex items-center font-light text-gray-700 bg-transparent border-0 py-1 px-3 focus:outline-none">プライバシーポリシー</button>
          </a>

          {{-- 🔽デプロイサーバー下でのURL --}}
          <a href="/LeapCompass360/UserProfile/terms/OurTeam" class="sm:ml-4">
            <button class="inline-flex items-center font-light text-gray-700 bg-transparent border-0 py-1 px-3 focus:outline-none">About Us</button>
          </a>
        </div>
    </div>
  </footer>

  </div>


</x-app-layout>
