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
                    <div class="aspect-w-16 aspect-h-9 rounded overflow-hidden w-48 h-27">
                      <img src="{{ asset('storage/images/' . $UserProfile->profile_image) }}" alt="ProfileImage" class="w-full h-full object-contain">
                    </div>
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
                      {{ __('EDIT') }}
                    </x-primary-button>
                  </form>
                @endif
              </div>
            </div>
        @endforeach
    </div>
    <!-- End Grid -->
  </div>

  <footer class="text-gray-600 body-font">
    <div class="container px-5 py-8 mx-auto flex flex-col sm:flex-row justify-center items-center">
        <img src="{{ asset('images/LeapCompass.png') }}" class="p-2 hover:cursor-pointer" alt="Logo" style="width:15%; height:auto;" onclick="window.location.href = '/LeapCompass360/UserProfile'">
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
        {{-- <a href="/LeapCompass360/OurTeam.html" class="sm:ml-4"> --}}
        <a href="/LeapCompass360/terms/OurTeam" class="sm:ml-4">
          <button class="inline-flex items-center font-light text-gray-500 bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-sm tracking-tighter">About Us</button>
        </a>
        </div>
    </div>
  </footer>


</x-app-layout>
