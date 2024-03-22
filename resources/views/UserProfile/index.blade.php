<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('利用者一覧') }}
    </h2>
  </x-slot>

  {{-- プロフィール一覧カード --}}
  <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Title -->
    <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
        <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">利用者一覧</h2>
        <p class="mt-1 text-gray-600 dark:text-gray-400">Creative people</p>
    </div>
    <!-- End Title -->

    <!-- Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($UserProfiles as $UserProfile)
            <div class="flex flex-col rounded-xl p-4 md:p-6 bg-white border border-gray-200 dark:bg-slate-900 dark:border-gray-700">
              <a href="{{ route('UserProfile.show',$UserProfile->id) }}">
                <div class="flex items-center gap-x-4">
                  {{-- 該当プロフィール画像表示 --}}
                  @if ($UserProfile->profile_image)
                      <img src="{{ asset('storage/images/' . $UserProfile->profile_image) }}" alt="ProfileImage" class="rounded w-44 h-33">
                  @endif
                  <div class="grow">
                      <h3 class="font-medium text-gray-800 dark:text-gray-200">{{ $UserProfile->Nickname }}</h3>
                      <p class="text-xs uppercase text-gray-500">{{ $UserProfile->Industry }}</p>
                  </div>
                </div>
                <p class="mt-3 text-gray-500">{{ $UserProfile->OneWord }}</p>
              </a>
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
            </div>
        @endforeach
    </div>
    <!-- End Grid -->
  </div>

</x-app-layout>
