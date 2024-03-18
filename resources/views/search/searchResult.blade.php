<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('検索結果') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-800 ">
                    @if ($UserProfiles->isEmpty())
                        <p>No results found.</p>
                    @else
                        <h3 class="text-lg font-bold mb-4">Search Results</h3>
                        <ul>
                            @foreach ($UserProfiles as $UserProfile)
                                {{-- Nicknameで検索結果を表示 --}}
                                <li>
                                    <a href="{{ route('UserProfile.show',$UserProfile->id) }}">
                                        {{ $UserProfile->Nickname }}
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
