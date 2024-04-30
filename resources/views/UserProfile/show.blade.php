<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('詳細画面') }}
    </h2>
  </x-slot>

  <div class="min-h-screen" style="background-image: linear-gradient(180deg, #12152b, #36394a, #5c5b65, #928174, #aa7a69);">
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-800">
          <div class="mb-6">

            {{-- ニックネーム --}}
            <div class="flex flex-col mb-4">
              <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200">ニックネーム</p>
              <p class="py-2 px-3 text-gray-800 dark:text-gray-200" id="Nickname">{{$UserProfile->Nickname}}</p>
            </div>

            {{-- 区切り線 --}}
            <hr class="mt-6 mb-6 border-gray-300">

            {{-- プロフィール写真 --}}
            <div class="flex flex-col mb-4">
              <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200">プロフィール写真</p>
              <img src="{{ asset('storage/images/' . $UserProfile->profile_image) }}" alt="ProfileImage" class="w-100 h-75">
              {{-- <img src="{{ asset('/LeapCompass360/public/storage/images/' . $UserProfile->profile_image) }}" alt="ProfileImage" class="w-100 h-75"> --}}
            </div>

            {{-- 区切り線 --}}
            <hr class="mt-6 mb-6 border-gray-300">

            {{-- SNSの情報 --}}
            <div class="flex flex-col mb-4">
              <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200">SNSの情報</p>
              <p class="py-2 px-3 text-gray-800 dark:text-gray-200" id="SNS">{{$UserProfile->SNS}}</p>
            </div>

            {{-- 区切り線 --}}
            <hr class="mt-6 mb-6 border-gray-300">

            {{-- 今いる業界 --}}
            <div class="flex flex-col mb-4">
              <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200">今いる業界</p>
              <p class="py-2 px-3 text-gray-800 dark:text-gray-200" id="Industry">{{$UserProfile->Industry}}</p>
            </div>

            {{-- 区切り線 --}}
            <hr class="mt-6 mb-6 border-gray-300">

            {{-- 仕事の内容 --}}
            <div class="flex flex-col mb-4">
              <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200">仕事の内容</p>
              <div class="py-2 px-3 text-gray-800 dark:text-gray-200 block w-full" id="JobDescription">{!! nl2br(e($UserProfile->JobDescription)) !!}</div>
            </div>

            {{-- 区切り線 --}}
            <hr class="mt-6 mb-6 border-gray-300">

            {{-- 経歴 --}}
            <div class="flex flex-col mb-4">
              <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200">経歴</p>
              <div class="py-2 px-3 text-gray-800 dark:text-gray-200" id="Career">{!! nl2br(e($UserProfile->Career)) !!}</div>
            </div>

            {{-- 区切り線 --}}
            <hr class="mt-6 mb-6 border-gray-300">

            {{-- 持っている資格 --}}
            <div class="flex flex-col mb-4">
              <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200">持っている資格</p>
              <p class="py-2 px-3 text-gray-800 dark:text-gray-200" id="Qualification">{{$UserProfile->Qualification}}</p>
            </div>

            {{-- 区切り線 --}}
            <hr class="mt-6 mb-6 border-gray-300">

            {{-- Disk診断の結果 --}}
            <div class="flex flex-col mb-4">
              <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200">Disk診断の結果</p>
              <p class="py-2 px-3 text-gray-800 dark:text-gray-200" id="Disk">{{$UserProfile->Disk}}</p>
            </div>

            {{-- 区切り線 --}}
            <hr class="mt-6 mb-6 border-gray-300">

            {{-- Whyme --}}
            <div class="flex flex-col mb-4">
              <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200">Whyme</p>
              <p class="py-2 px-3 text-gray-800 dark:text-gray-200" id="Whyme">{{$UserProfile->Whyme}}</p>
            </div>

            {{-- 区切り線 --}}
            <hr class="mt-6 mb-6 border-gray-300">

            {{-- プロダクトがあればURL --}}
            <div class="flex flex-col mb-4">
              <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200">プロダクトがあればURL</p>
              <p class="py-2 px-3 text-gray-800 dark:text-gray-200" id="Product">{{$UserProfile->Product}}</p>
            </div>

            {{-- 区切り線 --}}
            <hr class="mt-6 mb-6 border-gray-300">

            {{-- 趣味、好きなこと --}}
            <div class="flex flex-col mb-4">
              <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200">趣味、好きなこと</p>
              <div class="py-2 px-3 text-gray-800 dark:text-gray-200" id="Hobby">{!! nl2br(e($UserProfile->Hobby)) !!}</div>
            </div>

            {{-- 区切り線 --}}
            <hr class="mt-6 mb-6 border-gray-300">

            {{-- 出身地 --}}
            <div class="flex flex-col mb-4">
              <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200">出身地</p>
              <p class="py-2 px-3 text-gray-800 dark:text-gray-200" id="Birthplace">{{$UserProfile->Birthplace}}</p>
            </div>

            {{-- 区切り線 --}}
            <hr class="mt-6 mb-6 border-gray-300">

            {{-- 休日の過ごし方 --}}
            <div class="flex flex-col mb-4">
              <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200">休日の過ごし方</p>
              <div class="py-2 px-3 text-gray-800 dark:text-gray-200" id="HolidayTime">{!! nl2br(e($UserProfile->HolidayTime)) !!}</div>
            </div>

            {{-- 区切り線 --}}
            <hr class="mt-6 mb-6 border-gray-300">

            {{-- 一言 --}}
            <div class="flex flex-col mb-4">
              <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200">一言</p>
              <p class="py-2 px-3 text-gray-800 dark:text-gray-200" id="OneWord">{{$UserProfile->OneWord}}</p>
            </div>

            {{-- 区切り線 --}}
            <hr class="mt-6 mb-6 border-gray-300">

            {{-- 連絡方法と連絡先 --}}
            <div class="flex flex-col mb-4">
              <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200">連絡方法と連絡先</p>
              <div class="py-2 px-3 text-gray-800 dark:text-gray-200" id="Contact">{!! nl2br(e($UserProfile->Contact)) !!}</div>
            </div>

            <div class="flex items-center justify-end mt-8">
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

  <footer class="w-full text-gray-600 body-font">
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
