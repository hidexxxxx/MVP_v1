<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('キーワード検索') }}
    </h2>
  </x-slot>

  <div class="min-h-screen" style="background-image: linear-gradient(-55deg, #e2b8a5, transparent, #e2b8a5);">
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-800 ">
          @include('common.errors')
          <form class="mb-6" action="{{ route('search.result') }}" method="GET">
            @csrf
            <div class="flex flex-col mb-4">
              <x-input-label for="keyword" :value="__('Keyword')" />
              <x-text-input id="keyword" class="block mt-1 w-full" type="text" name="keyword" :value="old('keyword')" autofocus />
            </div>
            <div class="flex items-center justify-end mt-4">
              <x-primary-button class="ml-3">
                {{ __('Search') }}
              </x-primary-button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <footer class="w-full text-gray-600 body-font fixed bottom-0">
    <div class="container px-5 py-8 mx-auto flex flex-col sm:flex-row justify-center items-center">
        <img src="{{ asset('images/LeapCompass.png') }}" class="p-2 hover:cursor-pointer" alt="Logo" style="width:15%; height:auto;" onclick="window.location.href = '/LeapCompass360/UserProfile'">
        <div class="flex flex-col sm:flex-row items-center">
          <p class="text-sm text-gray-700 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 py-2">© 2024 Leap Compass 360 —</p>

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
