<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Geek's Compass</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
        {{-- ページ読み込みの最初にtailwindを全てに適応するために以下を記述 --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <header class="text-gray-600 body-font border-b border-gray-300 mb-4">
            <div class="container mx-auto flex flex-wraxp p-5 flex-col md:flex-row items-center">                       
                <img src="{{ asset('images/GeekCompass_logo.png') }}" class="text-black p-2 hover:cursor-pointer" alt="Logo" width="18.2%" height="5.5%" onclick="window.location.href = '/GeekCompass/welcome'">
                <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                    {{-- 利用方法リンク --}}
                    <a href="/GeekCompass/HowtoUse">
                        <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">利用方法
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </a>
                    {{-- 利用規約リンク --}}
                    <a href="/GeekCompass/terms&conditions">
                        <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">利用規約
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </a>
                    {{-- プライバシー・ポリシーリンク --}}
                    <a href="/GeekCompass/PrivacyPolicy">
                        <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">プライバシーポリシー
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </a>
                    {{-- About Us リンク --}}
                    <a href="/GeekCompass/OurTeam">
                        <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">About Us
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </a>
                </nav>
            </div>
        </header>    

        <main>
            <section class="text-gray-600 body-font">
                <div class="container px-5 py-24 mx-auto">
                    <div class="flex flex-col text-center w-full mb-20">
                    <h2 class="text-base text-gray-900 tracking-widest font-medium title-font mb-1">Geek's Compass</h2>
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">利用規約</h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">本サービス（第４条第１号で定義します）の利用者は、本規約の規定に従う必要があります。下記の全文に目を通していただきますようお願いいたします。本規約は運営側（第４条第２号で定義します）と利用者との契約にはすべて本規定が適用され遵守するものとします。</p>
                    </div>
                        
                    <div class="md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">第1条（規約への同意）</h2>
                        <p class="leading-relaxed text-base mb-4">本サービスをご利用になる前に、本規約を良くお読みください。利用者は、本規約の定めに従って本サービスを利用しなければなりません。利用者は、会員登録をしないかぎり本サービスを利用できません。利用者は会員登録をするにあたり、本規約に同意して頂くことが必要であり、会員登録が完了した時点で、本規約を内容とする本サービス利用契約（以下「本契約」といいます）が運営側との間で締結されます。</p>
                    </div>

                    <div class="md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">第2条（規約の適用）</h2>
                        <p class="leading-relaxed text-base mb-4">本規約は、国内外を問わず、すべての利用者に適用され、本規約の規定が利用者との本規約に基づく契約に適用される関連法令に反するとされる場合、当該規定は、その限りにおいて、 当該利用者との契約には適用されないものとします。但し、この場合でも、本規約の他の規定の効力には影響しないものとします。</p>
                    </div>

                    <div class="md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">第3条（本サービスの概要）</h2>
                        <p class="leading-relaxed text-base mb-4">本サービスは、利用者が抱える悩みや不安、不明点を軽減する為、コミュニティ内のユーザー同士でメンタリングを行うサービスです。なお、本サービスは悩みや不安、不明点の解消を完全に保証するものではありません。</p>
                    </div>

                    <div class="md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">第4条（定義）</h2>
                        <p class="leading-relaxed text-base mb-4">本規約では、以下の用語は以下の意味で利用するものとします。</p>
                            <li>
                            「本サービス」とは、運営側（以下、第２号で定義）が利用者に対して提供するコミュニティ内のユーザー同士でメンタリングを行うサービスである「Geek Compass」をいいます。
                            </li>
                            <li>
                            「運営側」とは、G’s ACADEMYの東京Lab15期を卒業した丸山と福岡Lab09期を卒業した山本のことを指します。
                            </li>
                            <li>
                            「利用者」とは、運営側が定めた本サービスの登録手続きに従い、本規約に対し同意の上、本サービスの会員登録を完了し、本サービスを利用する資格を持つ個人をいいます。
                            </li>
                            <li>
                            「本規約」とは、この利用規約のことをいいます。
                            </li>
                        <p class="leading-relaxed text-base mt-4">「登録事項」とは、登録希望者が本サービスの利用を希望するに際して、運営側が登録希望者に対して提供を求める、運営側の定める一定の情報をいいます。</p>
                    </div>

                    <div class="md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">第5条（本サービスの提供、無保証、変更および中止）</h2>
                        <p class="leading-relaxed text-base mb-4">運営側は、本サービスの提供を受けることができる利用者を、会員登録の有無、その他、 運営側が合理的に必要と判断する条件を満たした方に限定することができるものとします。
                            <br>
                            運営側は、運営側が合理的に必要と判断する場合、 あらかじめ利用者に通知することなく、いつでも、本サービスの全部または一部の内容を変更し、また、その提供を中止することができるものとします。本サービスの提供を終了する場合、運営側は事前に利用者に対して通知するものとします。
                            <br>
                            運営側は、本サービスに事実上または法律上の瑕疵（安全性、信頼性、 正確性、完全性、有効性、特定の目的への適合性、セキュリティなどに関する欠陥、エラーやバグ、 権利侵害などを含みますが、これらに限りません）がないことを保証しておりません。
                            <br>
                            運営側は、本サービスが、全てのパソコン、スマートフォン、タブレット端末等およびOSに対応することを保証しておりません。また、運営側は、本規定に基づき運営側が行った措置や利用者の環境により本サービスを利用できなかったことに基づき利用者に生じた損害について、一切の責任を負いません。
                            <br>
                            運営側は登録申請者が、以下の各号のいずれかの事由に該当する場合は、登録を拒否することがあり、その理由について一切開示義務を負いません。
                            運営側に提供した登録事項の全部又は一部につき虚偽、誤記又は記載漏れがあった場合。
                            反社会的勢力等（暴力団、暴力団員、暴力団関係企業・団体（二次団体等の関係者を含む）、総会屋、社会運動標榜団体、政治活動標榜団体、並びに暴力、威力、詐欺的手法を駆使して経済的利益を追求する集団又は個人、その他東京都暴力団排除条例に規定する暴力団関係者その他これに準ずる者を意味します。以下、同じ）である場合又は資金提供その他を通じて反社会的勢力等の維持、運営もしくは関与を行っていると運営側が判断した場合。
                            過去、運営側との契約に違反した者又はその関係者であると運営側が判断した場合。
                            その他、運営側が登録申請者を登録することを適当でないと判断した場合。
                        </p>
                    </div>

                    <div class="md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">第6条（利用資格）</h2>
                        <p class="leading-relaxed text-base mb-4">G’s ACADEMYの在校生、卒業生、メンター、スタッフや講師、その他のG’s ACADEMYの関係者に限ります。その他の方を本サービスに招待したい場合、運営側にご連絡ください。</p>
                    </div>

                    <div class="md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">第7条（利用者の責任および注意義務）</h2>
                        <p class="leading-relaxed text-base mb-1">利用者は、自己の責任に基づき本サービスを利用するものとし、利用者が公開するコンテンツについて、全て自己で責任を負うものとします。
                            <br>
                            利用者は運営側に対し、他人の著作物を使用したことや不利益を被った事などが原因で紛争、損害賠償の請求などが起こった場合の損害、責任について一切を免責するものとし、自らの責任をもって紛争に対処するものとします。
                            <br>
                            利用者は、自己の責任において、アカウントを１人１つまで登録、管理及び保管するものとし、これを第三者に利用させたり、貸与、譲渡、名義変更、売買等をしてはならないものとします。複数人が１つのアカウントを共同利用することもできません。利用者は、運営側に対し、アカウントを第三者に盗用されるなどにより、利用者のコンテンツの改変や改竄、個人情報等の無断閲覧などにより発生するあらゆる紛争、損害賠償の請求などについて一切を免責するものとします。
                            <br>
                            利用者は、本サービス利用中に知り得た他の利用者に関する情報（他の利用者のプロフィール情報、メンタリング内で知り得た情報を含みますが、これらに限りません。以下「利用者情報」といいます）について、守秘義務を負うものとします。利用者は、これらの情報につき、本サービスの利用以外の目的での使用、第三者に対する開示または漏洩、運営側の許可なく複製・複写のいずれもしてはいけません。また本サービスを使ったメンタリングで知見を共有する場合、提供者自身の判断と責任で行うこととします。本サービスを通して利用者に生じた損害について、運営側は一切の責任を負いません。
                            <br>
                            利用者は、本条で定める行為において運営側に損害を与えた場合は、運営側が当該利用者に対して損害賠償を請求する権利を有することを認めます。</p>
                            <br>
                            <li>
                            運営側は、以下のいずれかに該当する場合には、利用者に事前に通知することなく、本サービスの利用の全部又は一部を停止又は中断することができるものとします。
                            </li>
                            <li>
                            本サービスに係るコンピューター・システムの点検又は保守作業を定期的又は緊急に行う場合
                            </li>
                            <li>
                            コンピューター、通信回線等が事故により停止した場合
                            </li>
                            <li>
                            火災、停電、天災地変などの不可抗力により本サービスの運営ができなくなった場合
                            </li>
                            <li>
                            サービスの重要な機能に障害が発生した場合
                            </li>
                            <li>
                            その他、運営側が停止又は中断を必要と判断した場合
                            </li>
                            <li>
                            運営側は、本条に基づき運営側が行った措置に基づき利用者に生じた損害について一切の責任を負いません。
                            </li>
                            <p class="leading-relaxed text-base mt-4">運営側は、法令又は本規約の遵守状況等を確認する必要がある場合又は運営側が必要と判断した場合、利用の内容を確認することができます。利用者は、当該確認について何らの異議も述べず、かつ、運営側に対し何らの請求をすることもできません。</p>
                    </div>

                    <div class="md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">第8条（禁止事項）</h2>
                        <p class="leading-relaxed text-base mb-4 mt-4">（１）本サービスを本来の目的とは異なる目的で利用する行為</p>                         
                            <li>
                            無限連鎖講およびマルチ商法、またはそれに類するもの、その恐れのあるもの、あるいは運営側が無限連鎖講およびマルチ商法、またはそれに類するもの、その恐れのあるものと判断する内容を投稿、掲載、開示、送信等（以下「投稿等」といいます）する行為、またはそれらの勧誘行為
                            </li>
                            <li>
                            選挙運動、またはこれらに類似する行為および公職選挙法に抵触する行為
                            </li>
                            <li>
                            特定の宗教、思想等の啓発または勧誘行為
                            </li>
                            <li>
                            起業、企業投資以外の金銭のやり取りを目的とする行為
                            </li>    
                        <p class="leading-relaxed text-base mb-4 mt-4">（２）他の利用者に対する加害行為</p>
                            <li>
                            身体的被害・精神的被害を与える行為
                            </li>
                            <li>
                            脅迫、恫喝
                            </li>
                            <li>
                            詐欺行為、窃盗行為その他財産的損害を与える行為
                            </li>
                            <li>
                            誹謗中傷、嫌がらせ、ハラスメント
                            </li>
                        <p class="leading-relaxed text-base mb-4 mt-4">（３）本サービス利用中に知り得た情報を、本サービスの利用以外の目的で使用する行為</p>
                            <li>
                            運営側が許可した場合を除く、本サービス上の文字、画像、利用者のニックネーム、アイコン画像、自己紹介文を含むプロフィール情報その他の利用者の情報を無断で使用する行為（モザイク処理をしても、運営側が許可をしていない場合は無断使用と見なします）
                            </li>
                            <li>
                            他の利用者を含む第三者の個人情報や利用者情報を第三者に開示または漏洩する行為
                            </li>
                            <li>
                            他の利用者の利用者情報を、本サービスの利用以外の目的で使用する行為
                            </li>
                            <li>
                            他の利用者の利用者情報を、運営側の許可なく複製・複写する行為
                            </li>
                            <li>
                            利用者以外の自然人・法人・団体・組織等の第三者の個人情報の収集を行う行為
                            </li>
                        <p class="leading-relaxed text-base mb-4 mt-4">（４）運営側に対する、脅迫、誹謗中傷または攻撃的な言動その他不快感や精神的損害を与える行為</p>
                        <p class="leading-relaxed text-base mb-4">（５）本規約に反する行為</p>
                        <p class="leading-relaxed text-base mb-4">（６）本サービスに関連して、反社会的勢力に直接・間接に利益を提供する行為</p>
                        <p class="leading-relaxed text-base mb-4">（７）利用者以外の自然人・法人・団体・組織等の第三者（以下、「第三者」といいます）に自己のアカウントを譲渡して、本サービスを利用させる行為</p>
                        <p class="leading-relaxed text-base mb-4">（８）第三者に自己のアカウントのログインに必要な情報を閲覧可能な状態にしておく行為 </p>
                        <p class="leading-relaxed text-base mb-4">（９）第三者に成りすます行為</p>
                        <p class="leading-relaxed text-base mb-4">（１０）第三者の名誉や社会的信用を毀損したり、不快感や精神的な損害を与える行為</p>
                        <p class="leading-relaxed text-base mb-4">（１１）運営側、他の利用者またはその他の第三者の保有する著作権を含む知的財産権、肖像権その他一切の権利を侵害し、または侵害を誘発する行為</p>
                        <p class="leading-relaxed text-base mb-4">（１２）本サービスの運営を妨げる行為</p>
                            <li>
                            運営側が、本サービスの運営を妨げるおそれがあると判断する量のデータ転送、サーバーに負担をかける行為（不正な連続アクセスなど）
                            </li>
                            <li>
                            有害なコンピュータウィルス、コード、ファイル、プログラム等を開示する行為、もしくは開示されている場所について示唆する行為
                            </li>
                        <p class="leading-relaxed text-base mb-4 mt-4">（１３）ロボット、スパイダー、サイト検索もしくはデータ取得アプリケーション、またはその他の手動もしくは自動の装置またはプロセスを利用して、ウェブサイト、サービスもしくはそのコンテンツのナビゲーション構造もしくは表現を読み出し、索引を生成し、「データマイニング」し、アカウントを作成し、ログインし、または方法の如何を問わず複製もしくは回避すること。</p>
                        <p class="leading-relaxed text-base mb-4">（１４）本サービスに設けられた認証システム、セキュリティシステムを回避しようとする行為</p>
                        <p class="leading-relaxed text-base mb-4">（１５）本サービスにかかるシステムの全部又は一部の改変、改ざん、又は逆コンパイル、逆アセンブル等のリバースエンジニアリングをする行為。運営側又は第三者になりすます行為又は意図的に虚偽の情報を流布させる行為。</p>
                        <p class="leading-relaxed text-base mb-4">（１６）その他運営側が不適切であると判断する行為</p>
                        <p class="leading-relaxed text-base mb-4">利用者による前項の禁止行為が本サービス外で行われるものであったとしても、複数の利用者からの違反報告等がなされているなど、利用者がこれらの禁止行為を行った、又は行うおそれがあると運営側が合理的に判断できる場合には、運営側は違反処分を行うことができるものとします。
                        <br>
                        利用者は、本条の禁止行為を行うことにより運営側に損害を与えた場合は、運営側が当該利用者に対して損害賠償を請求する権利を有することを認めます。
                        <br>
                        なお、運営側は、本条に基づき運営側が行った措置に基づき利用者に生じた損害について一切の責任を負いません。</p>
                    </div>

                    <div class="md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">第9条（本サービスの利用制限）</h2>
                        <p class="leading-relaxed text-base mb-4">運営側は、本サービス以外での利用者の行為を監視することができませんが、本サービスから得た情報を、他人に対する嫌がらせや罵倒、危害を加える目的で使用したり、事前に明示的な同意を相手から得ずに他の利用者に連絡、宣伝、勧誘、販売したりすることも、本規約に対する違反になります。</p>
                    </div>

                    <div class="md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">第１０条（通信機器等の維持及びID・パスワードの管理）</h2>
                        <p class="leading-relaxed text-base mb-4">利用者は、本サービスの利用にあたり、必要となる通信機器、その他これらに付随する全ての機器の準備及び回線契約の締結、インターネット接続サービスへの加入等について、自己の費用と責任において行うものとします。
                        <br>
                        運営側は、利用者が本サービスを利用するためのネットワーク通信を行うことができる動作環境にあることを何ら保証しません。
                        <br>
                        運営側は、利用者が用いた通信機器、その他これらに付随して必要となる全ての機器、電気通信回線、インターネット接続サービスなどの不具合等によって、利用者が本サービスを受けられなかったとしても、何らの責任も負いません。
                        <br>
                        運営側は、利用者のID等の管理不十分、使用上の過誤、第三者の使用等によって生じた損害に関する責任は 利用者が負うものとし、運営側は何らの責任を負いません。
                        </p>
                    </div>

                    <div class="md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">第１１条（個人情報の取扱い）</h2>
                        <p class="leading-relaxed text-base mb-4">運営側は、利用者に関する個人情報を、運営側が別途定めるプライバシーポリシーに従って適切に取り扱います。</p>
                    </div>

                    <div class="md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">第１２条（サービスの利用停止、アカウント情報の削除、その他の削除について）</h2>
                        <p class="leading-relaxed text-base mb-4">利用者が本サービスに投稿などした内容と、本サービスを通して利用者が他の利用者に転送した内容について、利用者は単独で責任を負います。利用者が投稿した場合はいつでも、その内容が（a）正確かつ（b）本契約に違反せず、かつ（c）あらゆる点で誰にも害が及ばないことを、利用者は表明し保証したことになります｡</p>
                        <p class="leading-relaxed text-base mb-4">運営側は、提供するサービスを適正に運営するために、以下の場合にはあらかじめ通知することなく、データや内容を削除したり、サービスの全部または一部の利用をお断りしたり、利用者のアカウントを削除したりするといった措置を講じることができるものとします。</p>
                        <li>
                        利用者が本規約に定められている事項に違反した場合、もしくはそのおそれがあると運営側が合理的に判断した場合
                        </li>
                        <li>
                        アカウントが反社会的勢力またはその構成員や関係者によって登録または使用された場合、もしくはそのおそれがあると運営側が判断した場合
                        </li>
                        <li>
                        利用者が一定期間にわたってアカウントまたは特定のサービスを使用していない場合
                        </li>
                        <li>
                        その他、利用者との信頼関係が失われた場合など、運営側と利用者との契約関係の維持が困難であると運営側が判断した場合
                        </li>
                        <p class="leading-relaxed text-base mb-4 mt-4">また、アカウントを登録した利用者は、いつでも当該アカウントを削除することができます。ただし、利用者が誤ってアカウントを削除した場合、アカウントの復旧はできませんのでご注意ください。</p>
                    </div>

                    <div class="md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">第１３条（運営側に対する補償）</h2>
                        <p class="leading-relaxed text-base mb-4">利用者は、利用者が法令または本規約に違反して本サービスを利用したことに起因して（かかる趣旨のクレームを第三者より運営側が受けた場合を含みます）、運営側が直接的もしくは間接的に何らかの損害、損失または費用負担（弁護士費用の負担を含みます）を被った場合、運営側の請求にしたがって直ちにこれを賠償または補償しなければなりません。</p>
                    </div>

                    <div class="md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">第１４条（利用者のデータおよびコンテンツの取扱い）</h2>
                        <p class="leading-relaxed text-base mb-4">運営側の本サービスの保守や改良などの必要が生じた場合には、運営側は利用者が運営側の管理するサーバーに保存しているデータを、本サービスの保守や改良などに必要な範囲で複製等することができるものとします。
                        <br>
                        利用者が投稿などをした内容（画像データ、テキストを含みますが、これらに限られません。以下「投稿内容」といいます）については、利用者または当該投稿内容の著作権者に著作権が帰属します。投稿内容について、利用者は運営側に対して、日本の国内外で無償かつ非独占的に利用（複製、上映、公衆送信、展示、頒布、譲渡、貸与、翻訳、翻案、出版を含みます）する権利を期限の定めなく許諾（サブライセンス権を含みます）したものとみなします。ただし、利用者間のメッセージ内容についてはプライバシーを尊重し、本条の許諾対象には含まないものとします。なお、利用者は著作者人格権を行使しないものとします。
                        <br>
                        運営側は、他の利用者の投稿内容を利用したことによって利用者に生じた損害について、一切の保証をいたしません。</p>
                    </div>

                    <div class="md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">第１５条（権利義務などの譲渡）</h2>
                        <p class="leading-relaxed text-base mb-4">利用者は、本規約に基づくすべての契約について、その契約上の地位およびこれにより生じる権利義務の全部または一部を、第三者に譲渡または貸与することはできません。</p>
                    </div>

                    <div class="md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">第１６条（利用者間の紛争）</h2>
                        <p class="leading-relaxed text-base mb-4">利用者は、自己の責任に基づき本サービスを利用するものとし、本サービスの他の利用者との交流に関しては、単独で責任を負うものとします。運営側は、利用者と他の利用者との間で起きた紛争を監視する権利を留保しますが、義務はありません。</p>
                    </div>

                    <div class="md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">第１７条（本サービス及び利用規約の変更について）</h2>
                        <p class="leading-relaxed text-base mb-4">運営側は、必要に応じて本規約を変更することがあります。本規約を変更する場合、運営側は、変更内容に応じて適切な変更手続を実施します。</p>
                    </div>

                    <div class="md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">第１８条（準拠法）</h2>
                        <p class="leading-relaxed text-base mb-4">本規約は、日本法に準拠し、解釈されるものとします。</p>
                    </div>

                    <div class="md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">第１９条（管轄裁判所）</h2>
                        <p class="leading-relaxed text-base mb-4">利用者と運営側との間で本サービスに関連して訴訟の必要が生じた場合、東京地方裁判所を第一審の専属的合意管轄裁判所とします。</p>
                    </div>

                    <div class="md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">第２０条（附則）</h2>
                        <p class="leading-relaxed text-base mb-4 mt-4">2024年2月13日 制定・施行</p>
                    </div>
                        
                </div>
            </section>
        </main>

        <footer class="text-gray-600 body-font">
            <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col justify-center">
                <img src="{{ asset('images/GeekCompass_logo.png') }}" class="text-black p-2 hover:cursor-pointer" alt="Logo" width="9.9%" height="3%" onclick="window.location.href = '/GeekCompass/welcome'">
                <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2024 Geek's Compass —
                {{-- Xのアカウント情報 --}}
                <a href="https://twitter.com/marucy_official" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@marucy_official</a>
                <a href="https://twitter.com/sociality_nxt_0" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@sociality_nxt_0</a>
                </p>
            </div>
        </footer>

    </body>
</html>
