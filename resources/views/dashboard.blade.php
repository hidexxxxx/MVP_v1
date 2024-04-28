<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('利用方法') }}
        </h2>
    </x-slot>


    <main>
        <div class="lg:w-4/6 mx-auto">
            <div class="flex flex-col sm:flex-col mt-10 justify-center text-center mb-6">
                <h1 class="sm:text-2xl text-2xl font-medium title-font mb-6 mt-6 text-gray-900">
                    手順①〜③は本サービスで行い、
                    <br>
                    手順④と⑤は相手の連絡先に各自アポを取ってメンタリングください。
                </h1>
            </div>
        </div>

        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto flex flex-wrap">

                {{-- ①アカウント登録 --}}
                <div class="flex relative pt-10 pb-20 sm:items-center md:w-2/3 mx-auto">
                    <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                        <div class="h-full w-1 bg-gray-200 pointer-events-none">
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-slate-400 text-white relative z-10 title-font font-bold text-sm">1
                    </div>
                    <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                        <div class="flex-shrink-0 w-24 h-24 bg-sky-400 text-white rounded-full inline-flex items-center justify-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-12 h-12" viewBox="0 0 24 24">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            </svg>
                        </div>
                        <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                            <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">アカウント登録</h2>
                            <p class="leading-relaxed">まずはアカウントの登録をお願いします。</p>
                        </div>
                    </div>
                </div>

                {{-- ②プロフィール作成 --}}
                <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
                    <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                        <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                    </div>
                    <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-slate-400 text-white relative z-10 title-font font-bold text-sm">2
                    </div>
                    <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                        <div class="flex-shrink-0 w-24 h-24 bg-sky-400 text-white rounded-full inline-flex items-center justify-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-12 h-12" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                            <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">プロフィール作成</h2>
                            <p class="leading-relaxed">メンターを探す前にプロフィールカードを作成ください。</p>
                        </div>
                    </div>
                </div>

                {{-- ③メンター探し --}}
                <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
                    <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                        <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                    </div>
                    <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-slate-400 text-white relative z-10 title-font font-bold text-sm">3
                    </div>
                    <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                        <div class="flex-shrink-0 w-24 h-24 bg-sky-400 text-white rounded-full inline-flex items-center justify-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-white w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                                <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75"></path>
                            </svg>
                        </div>
                        <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                            <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">自分に合ったメンターを探す</h2>
                            <p class="leading-relaxed">プロフィールカード一覧を見て、メンタリングをお願いしたいユーザーを探します。</p>
                        </div>
                    </div>
                </div>

                {{-- ④メンタリング依頼 --}}
                <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
                    <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                        <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                    </div>
                    <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-slate-400 text-white relative z-10 title-font font-bold text-sm">4
                    </div>
                    <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                        <div class="flex-shrink-0 w-24 h-24 bg-sky-400 text-white rounded-full inline-flex items-center justify-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-12 h-12" viewBox="0 0 24 24">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                            </svg>
                        </div>
                        <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                            <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">※メンタリングの依頼</h2>
                            <p class="leading-relaxed">カードに記載してある連絡先にご自身で連絡を取り、メンタリングの依頼やスケジュール調整をしてください。</p>
                        </div>
                    </div>
                </div>

                {{-- ⑤メンタリング実施 --}}
                <div class="flex relative pb-10 sm:items-center md:w-2/3 mx-auto">
                    <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                        <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                    </div>
                    <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-slate-400 text-white relative z-10 title-font font-bold text-sm">5
                    </div>
                    <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                        <div class="flex-shrink-0 w-24 h-24 bg-sky-400 text-white rounded-full inline-flex items-center justify-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-white w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                                <path d="M3 18v-6a9 9 0 0118 0v6"></path>
                                <path d="M21 19a2 2 0 01-2 2h-1a2 2 0 01-2-2v-3a2 2 0 012-2h3zM3 19a2 2 0 002 2h1a2 2 0 002-2v-3a2 2 0 00-2-2H3z"></path>
                            </svg>
                        </div>
                        <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                            <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">※メンタリングを実施</h2>
                            <p class="leading-relaxed">Face to Faceでメンタリングが難しい場合は、ZoomやGather、Google meetなどのオンラインツールを使ってメンタリングください。</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- 運営からのお願い --}}
            <div class="lg:w-4/6 mx-auto">
                <div class="flex flex-col sm:flex-col mt-10 justify-center text-center mb-6">
                    <h1 class="sm:text-2xl text-2xl font-medium title-font mb-6 mt-6 text-gray-900">
                        ※時折、登録いただいたメールアドレス宛に、
                        <br>
                        運営からアンケートなどを送付させていただくことがございます。
                        <br>
                        <br>
                        サービス・品質の向上のため、是非回答のご協力お願いいたします🤗
                    </h1>
                </div>
            </div>

        </section>
    </main>

    <footer class="w-full text-gray-600 body-font">
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

</x-app-layout>
