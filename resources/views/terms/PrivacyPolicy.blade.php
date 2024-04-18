<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Leap Compass 360</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>

        {{-- 🔽publicフォルダ内に直接htmlファイルを置く場合は以下 --}}
        {{-- <link href="/build/assets/app-DHWTqTvH.css" rel="stylesheet">
        <script src="/build/assets/app-mqEmiGqA.js"></script> --}}

        {{-- 🔽bladeファイルでtailwindをビルドさせる場合は以下 --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="antialiased">
        <header class="text-gray-600 body-font mb-4">
            <div class="container mx-auto flex flex-wraxp p-5 flex-col md:flex-row items-center">
                <img src="{{ asset('images/LeapCompass.png') }}" class="p-2 hover:cursor-pointer" alt="Logo" style="width:15%; height:auto;" onclick="window.location.href = '/LeapCompass360/UserProfile'">
            </div>
        </header>

        <main>
            <section class="text-gray-600 body-font">
                <div class="container px-5 py-24 mx-auto">
                    <div class="flex flex-col text-center w-full mb-20">
                    <h2 class="text-base text-gray-900 tracking-widest font-medium title-font mb-1">Leap Compass 360</h2>
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">プライバシーポリシー（個人情報の取り扱いについて）</h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Leap Compass 360 の運営側（以下「運営側」といいます。）は、利用者の個人情報保護の重要性について認識し、個人情報の保護に関する法律（以下「個人情報保護法」といいます。）を遵守すると共に、以下の個人情報の取り扱いに従い、適切な取扱い及び保護に努めます。</p>
                    </div>

                    <div class="md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">１）個人情報の定義</h2>
                        <p class="leading-relaxed text-base mb-4">個人情報とは、個人情報保護法第2条第1項により定義された個人情報、すなわち、生存する個人に関する情報であって、当該情報に含まれる記述等により特定の個人を識別することができるもの（他の情報と容易に照合することができ、それにより特定の個人を識別することができることとなるものを含みます。）を意味するものとします。</p>
                    </div>

                    <div class="md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">2）個人情報の利用目的</h2>
                        <p class="leading-relaxed text-base mb-4">運営側が、本サービス及びこれに関連して運営側が運営する各種サービス（以下「サービス等」といいます。）を管理及び運営するため。
                        <br>
                        利用者が運営側のサービスを利用するにあたり運営側が必要な連絡をするため。
                        <br>
                        運営側のサービスに関するご案内、お問い合せ等への対応のため
                        <br>
                        運営側からのアンケート、若しくはサービスに関するご案内（メールでの配信も含みます。）のため。
                        <br>
                        運営側のサービスに関する運営側の規約、ポリシー等（以下「規約等」といいます。）に違反する行為に対する対応のため。
                        <br>
                        運営側のサービスに関する規約等の変更などを通知するため。
                        <br>
                        運営側のサービスの改善、新サービスの開発等に役立てるため。
                        <br>
                        運営側のサービスに関連して、個人を識別できない形式に加工した統計データを作成するため。
                        <br>
                        運営側のサービスに関連する外部サービスと連携を行うため。
                        <br>
                        運営側のサービスの関するマーケティングに役立てるため。
                        <br>
                        その他、上記利用目的に付随する目的のため。</p>
                    </div>

                    <div class="md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">3）個人情報の第三者提供について</h2>
                        <p class="leading-relaxed text-base mb-4">運営側は、個人情報保護法その他の法令に基づき開示が認められる場合を除くほか、あらかじめ利用者の同意を得ないで、個人情報を第三者に提供しません。但し、次に掲げる場合は上記に定める第三者への提供には該当しません。</p>
                        <p class="leading-relaxed text-base mb-4">サービス等を提供するために、一部の業務を第三者に委託する場合。人の生命、身体又は財産の保護のために必要がある場合であって、利用者本人の同意を得ることが困難であると判断した場合。その他、個人情報保護法その他の法令で認められる場合。</p>
                    </div>

                    <div class="md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">4）個人情報の安全管理</h2>
                        <p class="leading-relaxed text-base mb-4">運営側は、個人情報の紛失、破壊、改ざん及び漏洩などのリスクに対して、個人情報の取扱いの全部又は一部を委託する場合は、委託先において個人情報の安全管理が図られるよう、必要かつ適切な監督を行います。</p>
                    </div>

                    <div class="md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">5）個人情報の開示</h2>
                        <p class="leading-relaxed text-base mb-4">運営側は、利用者から、個人情報保護法の定めに基づき個人情報の開示を求められたときは、利用者ご本人からのご請求であることを確認の上で、お客様に対し、遅滞なく開示を行います。（当該個人情報が存在しないときにはその旨を通知いたします）但し、個人情報保護法その他の法令により、運営側が開示の義務を負わない場合は、この限りではありません。</p>
                    </div>

                    <div class="md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">6）個人情報の利用停止等</h2>
                        <p class="leading-relaxed text-base mb-4">運営側は、利用者から、利用者の個人情報が、あらかじめ公表された利用目的の範囲を超えて取り扱われているという理由又は偽りその他不正の手段により取得されたものであるという理由により、個人情報保護法の定めに基づきその利用の停止又は消去（以下「利用停止等」といいます。）を求められた場合、又は個人情報がご本人の同意なく第三者に提供されているという理由により、個人情報保護法の定めに基づきその提供の停止（以下「提供停止」といいます。）を求められた場合において、そのご請求に理由があることが判明した場合には、利用者ご本人からのご請求であることを確認の上で、遅滞なく個人情報の利用停止等又は提供停止を行い、その旨をお客様に通知します。但し、個人情報保護法その他の法令により、運営側が利用停止等又は提供停止の義務を負わない場合は、この限りではありません。</p>
                    </div>

                    <div class="md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">7）Cookie（クッキー）その他の技術の利用</h2>
                        <p class="leading-relaxed text-base mb-4">運営側のサービスは、Cookie及びこれに類する技術を利用することがあります。これらの技術は、運営側による運営側のサービスの利用状況等の把握に役立ち、サービス向上に資するものです。Cookieを無効化されたいユーザーは、ウェブブラウザの設定を変更することによりCookieを無効化することができます。但し、Cookieを無効化すると、運営側のサービスの一部の機能をご利用いただけなくなる場合があります。</p>
                    </div>

                    <div class="md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">8）運営側が収集する情報</h2>
                        運営側は、利用者が良いメンタリングを実施でき不安や悩み、不明点の解消ができるお手伝いをさせていただくため、利用者の情報を取得します。アクセスログなどの利用者のサービス利用に関する情報のほか、利用者がソーシャルメディアアカウントを通して運営側サービスにアクセスした場合や、利用者がプロフィールを完成するためにソーシャルメディアのアカウントから情報をアップロードした場合などには、第三者から提供される情報も収集します。詳細は以下をご覧ください。
                        アカウントを作成する際には、利用者のログイン認証情報、電子メールアドレス、その他の情報などサービスを利用するために必要な基本情報を提供していただきます。
                        利用者のプロフィール登録が完了すると、利用者がサービスに入力される情報も運営側と共有されます。写真やビデオなどのコンテンツを追加する場合には、運営側は、利用者の許可を得た場合に限り、利用者のカメラや写真アルバムにアクセスする場合があります。
                        利用者が運営側のアンケート、フォーカスグループ、市場調査に参加されると、運営側の製品・サービスに対する利用者のご意見や推薦の言葉、運営側の質問に対する回答が運営側に提供されます。</p>

                        <p class="leading-relaxed text-base mb-4 mt-4">他者から提供される情報<br>
                        運営側が受け取る利用者情報は、利用者から直接提供されるもの以外に、他者から取得するものもあります。具体的には以下の情報です。</p>

                        <p class="leading-relaxed text-base mb-4 mt-4">利用者<br>
                        運営側のサービス利用者から、利用者に関する情報が提供される場合があります。</p>

                        <p class="leading-relaxed text-base mb-4 mt-4">ソーシャルメディア<br>
                        利用者は、ご自身のソーシャルメディアアカウントを通じて、運営側に情報を提供することができます。例えば、利用者がソーシャルメデイアアカウントやその他のアカウント（LINE、Facebook、Google、Appleなど）を介してアカウントを作成してログインする場合などがあります。利用者は、サービスの設定で、いつでもプロフィール情報を編集することができます。</p>

                        <p class="leading-relaxed text-base mb-4 mt-4">認証機能を提供する第三事業者<br>
                        利用者は、他の事業者から提供された利用者の識別コード（Apple IDなど）を使って運営側のサービスにログインする機能を与えられることがあります。利用者がこのような機能をご利用になる場合、運営側は、利用者または事業者から、利用者の識別コード、電子メールアドレス、または事業者が利用者を識別するために使用するその他の情報を取得します。</p>

                        <p class="leading-relaxed text-base mb-4 mt-4">利用情報<br>
                        運営側は、サービスにおける利用者の行動に関する情報を収集しています。例えば、利用者が運営側のサービスをどのように利用したのか（ログインした日時、使用していた機能、実行したアクション、利用者に表示された情報）といった情報や、利用者と他の利用者とのやり取り（お相手の情報、お相手とやり取りした日時、送受信したメッセージの数など）などを収集します。</p>

                        <p class="leading-relaxed text-base mb-4 mt-4">デバイス情報<br>
                        利用者が運営側サービスにアクセスされる際に使用されたデバイスから、デバイスに関する情報が収集されます。これにはハードウェアおよびソフトウェアの情報が含まれ、具体的には、IPアドレス、デバイスのIDおよび種類、アプリの設定や特徴、アプリのクラッシュに関する情報、または特定のデバイスやブラウザを識別できるクッキーやそれに類する情報と関連付けられた識別子などが含まれます。</p>
                    </div>

                    <div class="md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">9）お問合せ窓口</h2>
                        <p class="leading-relaxed text-base mb-4">開示等のお申出、ご意見、ご質問、苦情のお申出その他個人情報の取扱いに関するお問い合わせは、運営を行っている下記の丸山と山本の連絡先までご連絡お願い致します。
                        <br>
                        【email　受付】masato23.maruyama@gmail.com　&　hidetaka54522@gmail.com
                        <br>
                        【SNS（X）　受付】@marucy_official　&　@sociality_nxt_0</p>
                    </div>

                    <div class="md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">10）本ポリシーの変更</h2>
                        <p class="leading-relaxed text-base mb-4">運営側は、利用者の個人情報の取扱いに関する運用状況を適宜見直し、継続的な改善に努めるものとし、必要に応じて本ポリシーを変更することがあります。運営側が本ポリシーを変更した場合には、通知致します。</p>
                        <br>
                        <p class="leading-relaxed text-base mb-4">2024年2月13日 制定・施行</p>
                    </div>

                </div>
            </section>
        </main>

        <footer class="text-gray-600 body-font">
            <div class="container px-5 py-8 mx-auto flex flex-col sm:flex-row justify-center items-center">
                <img src="{{ asset('images/LeapCompass.png') }}" class="p-2 hover:cursor-pointer" alt="Logo" style="width:15%; height:auto;" onclick="window.location.href = '/LeapCompass360/UserProfile'">
                <div class="flex flex-col sm:flex-row items-center">
                    <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 py-2">© 2024 Leap Compass 360 —</p>

                    {{-- 🔽デプロイサーバー下でのURL --}}
                    <a href="/LeapCompass360/UserProfile/terms/TermsConditions" class="sm:ml-4">
                        <button class="inline-flex items-center font-light text-gray-500 bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-sm tracking-tighter">利用規約</button>
                    </a>

                    {{-- 🔽デプロイサーバー下でのURL --}}
                    <a href="/LeapCompass360/UserProfile/terms/PrivacyPolicy" class="sm:ml-4">
                        <button class="inline-flex items-center font-light text-gray-500 bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-sm tracking-tighter">プライバシーポリシー</button>
                    </a>

                    {{-- 🔽デプロイサーバー下でのURL --}}
                    <a href="/LeapCompass360/UserProfile/terms/OurTeam" class="sm:ml-4">
                        <button class="inline-flex items-center font-light text-gray-500 bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-sm tracking-tighter">About Us</button>
                    </a>
                </div>
            </div>
        </footer>


    </body>
</html>
