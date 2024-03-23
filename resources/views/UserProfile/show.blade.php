<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('詳細画面') }}
    </h2>
  </x-slot>


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
            {{-- プロフィール写真 --}}
            <div class="flex flex-col mb-4">
              <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200">プロフィール写真</p>
              <img src="{{ asset('storage/images/' . $UserProfile->profile_image) }}" alt="ProfileImage" class="w-100 h-75">
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


</x-app-layout>
