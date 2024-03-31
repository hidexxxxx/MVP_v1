<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('キーワード検索') }}
    </h2>
  </x-slot>

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

  <footer class="text-gray-600 body-font">
    <div class="container px-5 py-8 mx-auto flex flex-col sm:flex-row justify-center items-center">
        <img src="{{ asset('images/LeapCompass.png') }}" class="p-2 hover:cursor-pointer" alt="Logo" style="width:15%; height:auto;" onclick="window.location.href = '/UserProfile'">
        <div class="flex flex-col sm:flex-row items-center">
        <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 py-2">© 2024 Leap Compass 360 —</p>

        {{-- publicフォルダ内のhtmlファイルを直接開く --}}
        <a href="/TermsConditions.html" class="sm:ml-4">
            <button class="inline-flex items-center font-light text-gray-500 bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-sm tracking-tighter">利用規約</button>
        </a>
        <a href="/PrivacyPolicy.html" class="sm:ml-4">
            <button class="inline-flex items-center font-light text-gray-500 bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-sm tracking-tighter">プライバシーポリシー</button>
        </a>
        <a href="/OurTeam.html" class="sm:ml-4">
            <button class="inline-flex items-center font-light text-gray-500 bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-sm tracking-tighter">About Us</button>
        </a>
        </div>
    </div>
  </footer>

</x-app-layout>
