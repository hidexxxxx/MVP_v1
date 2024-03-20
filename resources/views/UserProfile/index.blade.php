<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('プロフィール一覧') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-10/12 md:w-8/10 lg:w-8/12">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white dark:bg-gray-800 border-b border-grey-200 dark:border-gray-800">
          <table class="text-center w-full border-collapse">
            <thead>
              <tr>
                <th class="py-4 px-6 bg-gray-lightest dark:bg-gray-darkest font-bold uppercase text-lg text-gray-dark dark:text-gray-200 border-b border-grey-light dark:border-grey-dark">プロフィール一覧</th>
              </tr>
            </thead>
            {{-- 一覧表示 --}}
            <tbody>
              @foreach ($UserProfiles as $UserProfile)
                  <tr class="hover:bg-gray-lighter">
                      <td class="py-4 px-6 border-b border-gray-light dark:border-gray-600">
                        <a href="{{ route('UserProfile.show',$UserProfile->id) }}">
                          <div class="flex items-center">
                            @if ($UserProfile->ProfileImage)
                                <img src="{{ asset('storage/' . $UserProfile->ProfileImage) }}" alt="" class="w-8 h-8 rounded-full mr-2">
                            @endif
                            <h3 class="text-left font-bold text-lg text-gray-dark dark:text-gray-200">{{ $UserProfile->Nickname }}</h3>
                        </div>
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
                      </td>
                  </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
