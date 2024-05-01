<x-app-layout>

  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('利用者一覧') }}
    </h2>
  </x-slot>

  {{-- プロフィール一覧カード --}}
  {{-- <div class="min-h-screen" style="background-image: linear-gradient(-55deg, #f8af8f, transparent, #f8af8f);"> --}}
  {{-- <div class="min-h-screen" style="background-image: linear-gradient(0deg, transparent, #f8af8f);"> --}}
  {{-- <div class="min-h-screen" style="background-image: linear-gradient(-50deg, #f8af8f, #f7d08a, #f2f2f2);"> --}}
  <div class="min-h-screen" style="background-image: linear-gradient(180deg, #12152b, #36394a, #5c5b65, #928174, #aa7a69);">

    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
      <!-- Title -->
      <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
          <h2 class="text-2xl font-bold md:text-4xl md:leading-tight text-white">User</h2>
          <p class="mt-1 text-white">Creative People</p>
      </div>
      <!-- End Title -->

      <!-- Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
          @foreach ($UserProfiles as $UserProfile)
              <div class="flex flex-col rounded-xl p-4 md:p-6 shadow bg-white border border-gray-200 transition-all duration-300 hover:border-orange-300 hover:border-8" >
                <a href="{{ route('UserProfile.show',$UserProfile->id) }}">
                  <div class="flex items-center gap-x-4 mb-8">
                    {{-- 該当プロフィール画像表示 --}}
                    @if ($UserProfile->profile_image)
                      <div class="aspect-w-16 aspect-h-9 rounded overflow-hidden w-48 h-27" style="width: 211px; height: 118px; position: relative; overflow: hidden;">
                        {{-- 🔽縦長画像を縮小して表示ver --}}
                        <img src="{{ asset('storage/images/' . $UserProfile->profile_image) }}" alt="ProfileImage" class="w-full h-full object-contain rounded-md">
                        {{-- 🔽縦長画像の真ん中だけを切り取って表示ver --}}
                        {{-- <img src="{{ asset('storage/images/' . $UserProfile->profile_image) }}" alt="ProfileImage" style="width: 100%; height: 100%; object-fit: cover;"> --}}
                      </div>
                    @endif
                    <div class="grow">
                        <h3 class="font-medium text-xl text-gray-800">{{ $UserProfile->Nickname }}</h3>
                        <p class="text-sm uppercase text-gray-500">{{ $UserProfile->Industry }}</p>
                    </div>
                  </div>
                  <p class="mt-5 text-gray-500">{{ $UserProfile->OneWord }}</p>
                </a>
                {{-- <div class="flex mt-4">
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
                </div> --}}
              </div>
          @endforeach
      </div>
      <!-- End Grid -->
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
