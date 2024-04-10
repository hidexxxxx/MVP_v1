<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('My Profile') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-800">
          <div class="mb-6">
            @foreach ($UserProfiles as $UserProfile)
              {{-- ニックネーム --}}
              <div class="flex flex-col mb-4">
                <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200">ニックネーム</p>
                <p class="py-2 px-3 text-gray-800 dark:text-gray-200" id="Nickname">{{$UserProfile->Nickname}}</p>
              </div>
              {{-- プロフィール写真 --}}
              <div class="flex flex-col mb-4">
                <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200">プロフィール写真</p>
                <img src="{{ asset('storage/images/' . $UserProfile->profile_image) }}" alt="ProfileImage" class="w-100 h-75">
                {{-- <img src="{{ asset('/LeapCompass360/public/storage/images/' . $UserProfile->profile_image) }}" alt="ProfileImage" class="w-100 h-75"> --}}
              </div>
              {{-- SNSの情報 --}}
              <div class="flex flex-col mb-4">
                <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200">SNSの情報</p>
                <p class="py-2 px-3 text-gray-800 dark:text-gray-200" id="SNS">{{$UserProfile->SNS}}</p>
              </div>
              {{-- 今いる業界 --}}
              <div class="flex flex-col mb-4">
                <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200">今いる業界</p>
                <p class="py-2 px-3 text-gray-800 dark:text-gray-200" id="Industry">{{$UserProfile->Industry}}</p>
              </div>
              {{-- 仕事の内容 --}}
              <div class="flex flex-col mb-4">
                <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200">仕事の内容</p>
                <p class="py-2 px-3 text-gray-800 dark:text-gray-200" id="JobDescription">{{$UserProfile->JobDescription}}</p>
              </div>
              {{-- 経歴 --}}
              <div class="flex flex-col mb-4">
                <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200">経歴</p>
                <p class="py-2 px-3 text-gray-800 dark:text-gray-200" id="Career">{{$UserProfile->Career}}</p>
              </div>
              {{-- 持っている資格 --}}
              <div class="flex flex-col mb-4">
                <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200">持っている資格</p>
                <p class="py-2 px-3 text-gray-800 dark:text-gray-200" id="Qualification">{{$UserProfile->Qualification}}</p>
              </div>
              {{-- Disk診断の結果 --}}
              <div class="flex flex-col mb-4">
                <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200">Disk診断の結果</p>
                <p class="py-2 px-3 text-gray-800 dark:text-gray-200" id="Disk">{{$UserProfile->Disk}}</p>
              </div>
              {{-- Whyme --}}
              <div class="flex flex-col mb-4">
                <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200">Whyme</p>
                <p class="py-2 px-3 text-gray-800 dark:text-gray-200" id="Whyme">{{$UserProfile->Whyme}}</p>
              </div>
              {{-- プロダクトがあればURL --}}
              <div class="flex flex-col mb-4">
                <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200">プロダクトがあればURL</p>
                <p class="py-2 px-3 text-gray-800 dark:text-gray-200" id="Product">{{$UserProfile->Product}}</p>
              </div>
              {{-- 趣味、好きなこと --}}
              <div class="flex flex-col mb-4">
                <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200">趣味、好きなこと</p>
                <p class="py-2 px-3 text-gray-800 dark:text-gray-200" id="Hobby">{{$UserProfile->Hobby}}</p>
              </div>
              {{-- 出身地 --}}
              <div class="flex flex-col mb-4">
                <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200">出身地</p>
                <p class="py-2 px-3 text-gray-800 dark:text-gray-200" id="Birthplace">{{$UserProfile->Birthplace}}</p>
              </div>
              {{-- 休日の過ごし方 --}}
              <div class="flex flex-col mb-4">
                <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200">休日の過ごし方</p>
                <p class="py-2 px-3 text-gray-800 dark:text-gray-200" id="HolidayTime">{{$UserProfile->HolidayTime}}</p>
              </div>
              {{-- 一言 --}}
              <div class="flex flex-col mb-4">
                <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200">一言</p>
                <p class="py-2 px-3 text-gray-800 dark:text-gray-200" id="OneWord">{{$UserProfile->OneWord}}</p>
              </div>
              {{-- 連絡方法と連絡先 --}}
              <div class="flex flex-col mb-4">
                <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200">連絡方法と連絡先</p>
                <p class="py-2 px-3 text-gray-800 dark:text-gray-200" id="Contact">{{$UserProfile->Contact}}</p>
              </div>
              <div class="flex">
                <!-- 🔽 条件分岐でログインしているユーザが投稿したのみ編集ボタンが表示される -->
                @if ($UserProfile->user_id === Auth::user()->id)
                  <!-- 編集ボタン -->
                  <form action="{{ route('UserProfile.edit',$UserProfile->id) }}" method="GET" class="text-left">
                    @csrf
                    <x-primary-button class="ml-3">
                      <svg class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="gray">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                      </svg>
                    </x-primary-button>
                  </form>
                @endif
              </div>
            @endforeach

            <div class="flex items-center justify-end mt-4">
              <a href="{{ url()->previous() }}">
                <x-secondary-button class="ml-3">
                  {{ __('Back') }}
                </x-primary-button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="text-gray-600 body-font">
    <div class="container px-5 py-8 mx-auto flex flex-col sm:flex-row justify-center items-center">
        <img src="{{ asset('images/LeapCompass.png') }}" class="p-2 hover:cursor-pointer" alt="Logo" style="width:15%; height:auto;" onclick="window.location.href = '/UserProfile'">
        <div class="flex flex-col sm:flex-row items-center">
        <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 py-2">© 2024 Leap Compass 360 —</p>

        {{-- publicフォルダ内のhtmlファイルを直接開く --}}
        {{-- <a href="/TermsConditions.html" class="sm:ml-4"> --}}
        <a href="/LeapCompass360/TermsConditions.html" class="sm:ml-4">
            <button class="inline-flex items-center font-light text-gray-500 bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-sm tracking-tighter">利用規約</button>
        </a>
        {{-- <a href="/PrivacyPolicy.html" class="sm:ml-4"> --}}
        <a href="/LeapCompass360/PrivacyPolicy.html" class="sm:ml-4">
            <button class="inline-flex items-center font-light text-gray-500 bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-sm tracking-tighter">プライバシーポリシー</button>
        </a>
        {{-- <a href="/OurTeam.html" class="sm:ml-4"> --}}
        <a href="/LeapCompass360/OurTeam.html" class="sm:ml-4">
            <button class="inline-flex items-center font-light text-gray-500 bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-sm tracking-tighter">About Us</button>
        </a>
        </div>
    </div>
  </footer>

</x-app-layout>
