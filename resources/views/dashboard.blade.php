<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <footer class="text-gray-600 body-font">
        <div class="container px-5 py-8 mx-auto flex flex-col sm:flex-row justify-center items-center">
        <img src="{{ asset('images/GeekCompass_logo.png') }}" class="p-2 hover:cursor-pointer" alt="Logo" style="width:9.9%; height:auto;" onclick="window.location.href = '/UserProfile'">
            <div class="flex flex-col sm:flex-row items-center">
                <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 py-2">© 2024 G's Compass —</p>
                <a href="/GeekCompass/terms&conditions" class="sm:ml-4">
                    <button class="inline-flex items-center font-light text-gray-500 bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-sm tracking-tighter">利用規約</button>
                </a>
                <a href="/GeekCompass/PrivacyPolicy" class="sm:ml-4">
                    <button class="inline-flex items-center font-light text-gray-500 bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-sm tracking-tighter">プライバシーポリシー</button>
                </a>
                <a href="/GeekCompass/OurTeam" class="sm:ml-4">
                    <button class="inline-flex items-center font-light text-gray-500 bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-sm tracking-tighter">About Us</button>
                </a>
            </div>
        </div>
    </footer>

</x-app-layout>
