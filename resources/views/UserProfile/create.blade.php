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

          <form class="mb-6" action="{{ route('UserProfile.store') }}" method="POST">
            @csrf
            {{-- ニックネーム --}}
            <div class="flex flex-col mb-4">
              <x-input-label for="Nickname" :value="__('Nickname')" />
              <x-text-input id="Nickname" class="block mt-1 w-full" type="text" name="Nickname" :value="old('Nickname')" required autofocus />
              <x-input-error :messages="$errors->get('Nickname')" class="mt-2" />
            </div>
            {{-- プロフィール写真 --}}
            <div class="flex flex-col mb-4">
              <x-input-label for="profile_image" :value="__('profile_image')" />
              {{-- <x-file-input id="profile_image" class="profile_image" type="file" name="profile_image" :value="old('profile_image')" autofocus /> --}}
              <x-input-error :messages="$errors->get('profile_image')" class="mt-2" />
            </div>
            {{-- SNSの情報 --}}
            <div class="flex flex-col mb-4">
              <x-input-label for="SNS" :value="__('SNS')" />
              <x-text-input id="SNS" class="block mt-1 w-full" type="text" name="SNS" :value="old('SNS')" autofocus />
              <x-input-error :messages="$errors->get('SNS')" class="mt-2" />
            </div>
            {{-- 今いる業界 --}}
            <div class="flex flex-col mb-4">
              <x-input-label for="Industry" :value="__('Industry')" />
              <x-text-input id="Industry" class="block mt-1 w-full" type="text" name="Industry" :value="old('Industry')" required autofocus />
              <x-input-error :messages="$errors->get('Industry')" class="mt-2" />
            </div>
            {{-- 仕事の内容 --}}
            <div class="flex flex-col mb-4">
              <x-input-label for="JobDescription" :value="__('JobDescription')" />
              <x-text-input id="JobDescription" class="block mt-1 w-full" type="text" name="JobDescription" :value="old('JobDescription')" required autofocus />
              <x-input-error :messages="$errors->get('JobDescription')" class="mt-2" />
            </div>
            {{-- 経歴 --}}
            <div class="flex flex-col mb-4">
              <x-input-label for="Career" :value="__('Career')" />
              <x-text-input id="Career" class="block mt-1 w-full" type="text" name="Career" :value="old('Career')" required autofocus />
              <x-input-error :messages="$errors->get('Career')" class="mt-2" />
            </div>
            {{-- 持っている資格 --}}
            <div class="flex flex-col mb-4">
              <x-input-label for="Qualification" :value="__('Qualification')" />
              <x-text-input id="Qualification" class="block mt-1 w-full" type="text" name="Qualification" :value="old('Qualification')" autofocus />
              <x-input-error :messages="$errors->get('Qualification')" class="mt-2" />
            </div>
            {{-- Disk診断の結果 --}}
            <div class="flex flex-col mb-4">
              <x-input-label for="Disk" :value="__('Disk')" />
              <x-text-input id="Disk" class="block mt-1 w-full" type="text" name="Disk" :value="old('Disk')" autofocus />
              <x-input-error :messages="$errors->get('Disk')" class="mt-2" />
            </div>
            {{-- Whyme --}}
            <div class="flex flex-col mb-4">
              <x-input-label for="Whyme" :value="__('Whyme')" />
              <x-text-input id="Whyme" class="block mt-1 w-full" type="text" name="Whyme" :value="old('Whyme')" autofocus />
              <x-input-error :messages="$errors->get('Whyme')" class="mt-2" />
            </div>
            {{-- プロダクトがあればURL --}}
            <div class="flex flex-col mb-4">
              <x-input-label for="Product" :value="__('Product')" />
              <x-text-input id="Product" class="block mt-1 w-full" type="text" name="Product" :value="old('Product')" autofocus />
              <x-input-error :messages="$errors->get('Product')" class="mt-2" />
            </div>
            {{-- 趣味、好きなこと --}}
            <div class="flex flex-col mb-4">
              <x-input-label for="Hobby" :value="__('Hobby')" />
              <x-text-input id="Hobby" class="block mt-1 w-full" type="text" name="Hobby" :value="old('Hobby')" required autofocus />
              <x-input-error :messages="$errors->get('Hobby')" class="mt-2" />
            </div>
            {{-- 出身地 --}}
            <div class="flex flex-col mb-4">
              <x-input-label for="Birthplace" :value="__('Birthplace')" />
              <x-text-input id="Birthplace" class="block mt-1 w-full" type="text" name="Birthplace" :value="old('Birthplace')" autofocus />
              <x-input-error :messages="$errors->get('Birthplace')" class="mt-2" />
            </div>
            {{-- 休日の過ごし方 --}}
            <div class="flex flex-col mb-4">
              <x-input-label for="HolidayTime" :value="__('HolidayTime')" />
              <x-text-input id="HolidayTime" class="block mt-1 w-full" type="text" name="HolidayTime" :value="old('HolidayTime')" autofocus />
              <x-input-error :messages="$errors->get('HolidayTime')" class="mt-2" />
            </div>
            {{-- 一言 --}}
            <div class="flex flex-col mb-4">
              <x-input-label for="OneWord" :value="__('OneWord')" />
              <x-text-input id="OneWord" class="block mt-1 w-full" type="text" name="OneWord" :value="old('OneWord')" autofocus />
              <x-input-error :messages="$errors->get('OneWord')" class="mt-2" />
            </div>
            {{-- 連絡方法と連絡先 --}}
            <div class="flex flex-col mb-4">
              <x-input-label for="Contact" :value="__('Contact')" />
              <x-text-input id="Contact" class="block mt-1 w-full" type="text" name="Contact" :value="old('Contact')" required autofocus />
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
</x-app-layout>
