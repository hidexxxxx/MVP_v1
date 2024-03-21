<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('検索結果') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:w-10/12 md:w-8/10 lg:w-8/12">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-800">
                    @if ($UserProfiles->isEmpty())
                    <p>No results found.</p>
                    @else
                    <h3 class="text-lg font-bold mb-4">Search Results</h3>
                    <ul class="divide-y divide-gray-200">
                        @foreach ($UserProfiles as $UserProfile)
                        {{-- Nicknameで検索結果を表示 --}}
                        <li class="py-4 border-b border-gray-200">
                            <a href="{{ route('UserProfile.show',$UserProfile->id) }}" class="text-blue-500 hover:underline">
                                <h3 class="text-left font-bold text-lg text-gray-dark dark:text-gray-200">{{ $UserProfile->Nickname }}</h3>
                                <img src="{{ asset('storage/images/' . $UserProfile->profile_image) }}" alt="ProfileImage" class="w-9 h-9 object-cover rounded mr-2">
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
