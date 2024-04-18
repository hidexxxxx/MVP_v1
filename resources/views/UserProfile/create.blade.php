<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Create New UserProfile') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-800 ">
          @include('common.errors')

          <form class="mb-6" action="{{ route('UserProfile.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- ニックネーム --}}
            <div class="flex flex-col mb-4">
              <x-input-label for="Nickname">
                {!! __('ニックネーム(50字以内)<span class="text-red-500 text-xl">*</span>') !!}
              </x-input-label>
              <x-text-input id="Nickname" class="block mt-1 w-full" type="text" name="Nickname" :value="old('Nickname')" required autofocus />
              <x-input-error :messages="$errors->get('Nickname')" class="mt-2" />
            </div>
            {{-- プロフィール写真 --}}
            <div class="flex flex-col mb-4">
              <x-input-label for="ProfileImage" :value="__('プロフィール画像')" />
              <input id="ProfileImage" type="file" name="ProfileImage" class="block mt-1 w-full" accept="image/*">
              <x-input-error :messages="$errors->get('ProfileImage')" class="mt-2" />
            </div>
              <!-- ProfileImage フィールドがアップロードされた場合に処理を行います -->
              @if(request()->file('ProfileImage'))
                <!-- アップロードされたプロフィール画像を表示 -->
                <img class="w-1/2 h-1/2" src="{{ asset(request()->file('ProfileImage')->store('public/profile_images')) }}" alt="Profile Image">
              @endif
            {{-- SNSの情報 --}}
            <div class="flex flex-col mb-4">
              <x-input-label for="SNS" :value="__('普段使用しているSNSのリンク')" />
              <x-text-input id="SNS" class="block mt-1 w-full" type="text" name="SNS" :value="old('SNS')" autofocus placeholder="例：https://twitter.com/xxxxxx" />
              <x-input-error :messages="$errors->get('SNS')" class="mt-2" />
            </div>
            {{-- 今いる業界 --}}
            <div class="flex flex-col mb-4">
              <x-input-label for="Industry">
                {!! __('今いる業界(30字以内)<span class="text-red-500 text-xl">*</span>') !!}
              </x-input-label>
              <x-text-input id="Industry" class="block mt-1 w-full" type="text" name="Industry" :value="old('Industry')" required autofocus placeholder="例：IT系 / メーカー / 金融 " />
              <x-input-error :messages="$errors->get('Industry')" class="mt-2" />
            </div>
            {{-- 仕事の内容 --}}
            <div class="flex flex-col mb-4">
              <x-input-label for="JobDescription">
                {!! __('現職の仕事内容<span class="text-red-500 text-xl">*</span>') !!}
              </x-input-label>
              <x-text-input id="JobDescription" class="block mt-1 w-full" type="text" name="JobDescription" :value="old('JobDescription')" required autofocus placeholder="例：クラウドネイティブアプリケーションの開発とデプロイメントを担当しています。主にマイクロサービスアーキテクチャとコンテナ化技術を活用しています。" />
              <x-input-error :messages="$errors->get('JobDescription')" class="mt-2" />
            </div>
            {{-- 経歴 --}}
            <div class="flex flex-col mb-4">
              <x-input-label for="Career">
                {!! __('これまでの職歴<span class="text-red-500 text-xl">*</span>') !!}
              </x-input-label>
              <x-text-input id="Career" class="block mt-1 w-full" type="text" name="Career" :value="old('Career')" required autofocus placeholder="例：IT企業でのソフトウェアエンジニアリングからスタートし、スタートアップでのクラウド関連のプロジェクトに参加しました。" />
              <x-input-error :messages="$errors->get('Career')" class="mt-2" />
            </div>
            {{-- 持っている資格 --}}
            <div class="flex flex-col mb-4">
              <x-input-label for="Qualification" :value="__('保有資格')" />
              <x-text-input id="Qualification" class="block mt-1 w-full" type="text" name="Qualification" :value="old('Qualification')" autofocus placeholder="例：AWS 認定ソリューションアーキテクト - プロフェッショナル、Docker認定アソシエイトなどのクラウド関連資格を保有" />
              <x-input-error :messages="$errors->get('Qualification')" class="mt-2" />
            </div>
            {{-- Disk診断の結果 --}}
            <div class="flex flex-col mb-4">
              <x-input-label for="Disk" :value="__('Disk診断結果(無記入でも可です。Disk診断は人間特性がわかり相手とのスムーズなコミュニケーション方法がわかります。)
                無料診断ツール▶️https://jp.vonvon.me/quiz/301')" />
              <x-text-input id="Disk" class="block mt-1 w-full" type="text" name="Disk" :value="old('Disk')" autofocus placeholder="例：C - 慎重型 (Conscientiousness)" />
              <x-input-error :messages="$errors->get('Disk')" class="mt-2" />
            </div>
            {{-- Whyme --}}
            <div class="flex flex-col mb-4">
              <x-input-label for="Whyme" :value="__('Whyme')" />
              <x-text-input id="Whyme" class="block mt-1 w-full" type="text" name="Whyme" :value="old('Whyme')" autofocus placeholder="現在のWhyMeでも当時のWhyMeでもあれば記載お願いします" />
              <x-input-error :messages="$errors->get('Whyme')" class="mt-2" />
            </div>
            {{-- プロダクトがあればURL --}}
            <div class="flex flex-col mb-4">
              <x-input-label for="Product" :value="__('ProductのURL')" />
              <x-text-input id="Product" class="block mt-1 w-full" type="text" name="Product" :value="old('Product')" autofocus placeholder="例：https://respair.sakura.ne.jp/GeekCompass/welcome" />
              <x-input-error :messages="$errors->get('Product')" class="mt-2" />
            </div>
            {{-- 趣味、好きなこと --}}
            <div class="flex flex-col mb-4">
              <x-input-label for="Hobby">
                {!! __('趣味(200字以内)<span class="text-red-500 text-xl">*</span>') !!}
              </x-input-label>
              <x-text-input id="Hobby" class="block mt-1 w-full" type="text" name="Hobby" :value="old('Hobby')" required autofocus placeholder="例：自然とアウトドア活動を楽しんでいます。山登りやキャンプ、写真撮影など、自然の美しさを探求することが私のリフレッシュ方法です。" />
              <x-input-error :messages="$errors->get('Hobby')" class="mt-2" />
            </div>
            {{-- 出身地 --}}
            <div class="flex flex-col mb-4">
              <x-input-label for="Birthplace" :value="__('出身地')" />
              <x-text-input id="Birthplace" class="block mt-1 w-full" type="text" name="Birthplace" :value="old('Birthplace')" autofocus placeholder="例：福岡県 / 東京都 / ..." />
              <x-input-error :messages="$errors->get('Birthplace')" class="mt-2" />
            </div>
            {{-- 休日の過ごし方 --}}
            <div class="flex flex-col mb-4">
              <x-input-label for="HolidayTime" :value="__('休日の過ごし方')" />
              <x-text-input id="HolidayTime" class="block mt-1 w-full" type="text" name="HolidayTime" :value="old('HolidayTime')" autofocus placeholder="例：昼間は自然に出かけてア散歩し、夜は美味しい食事とゆっくりした時間を過ごします。" />
              <x-input-error :messages="$errors->get('HolidayTime')" class="mt-2" />
            </div>
            {{-- 一言 --}}
            <div class="flex flex-col mb-4">
              <x-input-label for="OneWord">
                {!! __('ひとこと(45字以内)<span class="text-red-500 text-xl">*</span>') !!}
              </x-input-label>
              <x-text-input id="OneWord" class="block mt-1 w-full" type="text" name="OneWord" :value="old('OneWord')" autofocus placeholder="例：クラウドの未来を創る一員として、常に挑戦し続けます！" />
              <x-input-error :messages="$errors->get('OneWord')" class="mt-2" />
            </div>
            {{-- 連絡方法と連絡先 --}}
            <div class="flex flex-col mb-4">
              <x-input-label for="Contact">
                {!! __('連絡方法(200字以内)<span class="text-red-500 text-xl">*</span>') !!}
              </x-input-label>
              <x-text-input id="Contact" class="block mt-1 w-full" type="text" name="Contact" :value="old('Contact')" required autofocus placeholder="例：自分のX(https://twitter.com/sociality_nxt_0)までDMお願いします！" />
              <x-input-error :messages="$errors->get('Contact')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
              <x-primary-button class="ml-3">
                {{ __('Create') }}
              </x-primary-button>
            </div>

          </form>

        </div>
      </div>
    </div>
  </div>

  <footer class="text-gray-600 body-font">
    <div class="container px-5 py-8 mx-auto flex flex-col sm:flex-row justify-center items-center">
        <img src="{{ asset('images/LeapCompass.png') }}" class="p-2 hover:cursor-pointer" alt="Logo" style="width:15%; height:auto;" onclick="window.location.href = '/LeapCompass360/UserProfile'">
        <div class="flex flex-col sm:flex-row items-center">
            <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 py-2">© 2024 Leap Compass 360 —</p>

            {{-- 🔽デプロイサーバー下でのURL --}}
            <a href="/LeapCompass360/UserProfile/terms/TermsConditions" class="sm:ml-4">
                <button class="inline-flex items-center font-light text-gray-500 bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-sm tracking-tighter">利用規約</button>
            </a>

            {{-- 🔽デプロイサーバー下でのURL --}}
            <a href="/LeapCompass360/UserProfile/terms/PrivacyPolicy" class="sm:ml-4">
                <button class="inline-flex items-center font-light text-gray-500 bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-sm tracking-tighter">プライバシーポリシー</button>
            </a>

            {{-- 🔽デプロイサーバー下でのURL --}}
            <a href="/LeapCompass360/UserProfile/terms/OurTeam" class="sm:ml-4">
                <button class="inline-flex items-center font-light text-gray-500 bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-sm tracking-tighter">About Us</button>
            </a>
        </div>
    </div>
  </footer>

</x-app-layout>
