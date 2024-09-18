<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="{{ config('seo.description') }}">
    <meta property="og:description" content="{{ config('seo.description') }}">
    <meta name="twitter:description" content="{{ config('seo.description') }}">

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@undangly" />
    <meta name="twitter:image" content="{{ url('/favicons/social-card-large-compressed.png') }}" />
    <meta name="twitter:creator" content="@undangly" />
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:type" content="article" />
    <meta property="og:image" content="{{ url('/favicons/social-card-large-compressed.png') }}" />

    <meta name="twitter:title" content="{{ config('seo.title') }}" />
    <meta property="og:title" content="{{ config('seo.title') }}" />

    <link rel="mask-icon" href="{{ url('/favicons/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-config" content="{{ url('/favicons/browserconfig.xml') }}">
    <link rel="shortcut icon" href="{{ url('/favicons/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ url('/favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ url('/favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ url('/favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('/favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ url('/favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ url('/favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ url('/favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ url('/favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('/favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ url('/favicons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ url('/favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ url('/favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ url('/favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    <title>{{ config('seo.title') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @isset($styles)
        {{ $styles }}
    @endisset
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-white">
        <main>
            {{ $slot }}
        </main>

        @php
            $payments = [
                url('images/payments/visa.png'),
                url('images/payments/mastercard.png'),
                url('images/payments/atm.png'),
                url('images/payments/bca.png'),
                url('images/payments/bni.png'),
                url('images/payments/bri.png'),
                url('images/payments/dana.png'),
                url('images/payments/gopay.png'),
                url('images/payments/linkaja.png'),
                url('images/payments/mandiri.png'),
                url('images/payments/ovo.png'),
                url('images/payments/permata.png'),
                url('images/payments/shopee.png'),
                url('images/payments/alfamart.png'),
            ];
        @endphp

        <footer class="py-20">
            <x-atoms.wrapper>
                <div class="flex flex-col md:flex-row gap-10 md:gap-0">
                    <div class="md:w-[50%] lg:w-[60%] md:pr-4">
                        <p class="font-bold mb-4">Tentang Undangly</p>
                        <p class="text-gray-500 leading-[1.8]">
                            Undangly adalah platform undangan digital yang memungkinkan pengguna untuk
                            membuat undangan yang elegan dan profesional dengan mudah. Tanpa perlu memiliki keahlian
                            teknis, pengguna dapat menyesuaikan desain, menambahkan detail acara, serta membagikan
                            undangan secara online melalui berbagai saluran. Undangly memberikan solusi praktis dan
                            modern bagi siapa pun yang ingin menghemat waktu dalam membuat undangan, baik untuk acara
                            pernikahan, ulang tahun, atau acara lainnya.
                        </p>
                    </div>
                    <div class="md:w-[25%] lg:w-[20%] md:pl-4">
                        <p class="font-bold mb-4">Tautan</p>
                        <div class="flex flex-col gap-1">
                            <p class="text-gray-500 leading-[1.8]">
                                <a href="" class="hover:underline">Panduan pengguna</a>
                            </p>
                            <p class="text-gray-500 leading-[1.8]">
                                <a href="" class="hover:underline">Jadi Reseller</a>
                            </p>

                            <p class="text-gray-500 leading-[1.8]">
                                <a href="" class="hover:underline">Kebijakan Privasi</a>
                            </p>
                            <p class="text-gray-500 leading-[1.8]">
                                <a href="" class="hover:underline">Syarat & Ketentuan</a>
                            </p>
                        </div>
                    </div>

                    <div class="md:w-[25%] lg:w-[20%] md:pl-4">
                        <p class="font-bold mb-4">Tetap Terhubung</p>
                        <div class="flex flex-col gap-1">
                            <p class="text-gray-500 leading-[1.8]">
                                <a href="https://wa.me/6285718823638" target="_blank"
                                    class="hover:underline">WhatsApp</a>
                            </p>

                            <p class="text-gray-500 leading-[1.8]">
                                <a href="https://www.instagram.com/undangly.app" target="_blank"
                                    class="hover:underline">Instagram</a>
                            </p>


                            <p class="text-gray-500 leading-[1.8]">
                                <a href="mailto:undangly.app@gmail.com" target="_blank"
                                    class="hover:underline">Email</a>
                            </p>
                            <p class="text-gray-500 leading-[1.8]">
                                <a href="https://www.facebook.com/profile.php?id=61565833948636" target="_blank"
                                    class="hover:underline">Facebook</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <p class="font-bold mb-4">Metode Pembayaran</p>

                    <div class="flex flex-wrap gap-4">
                        @foreach ($payments as $payment)
                            <img src="{{ $payment }}" class="h-[20px]" />
                        @endforeach
                    </div>
                </div>

                <div class="mt-20">
                    <p class="text-gray-500 leading-[1.8]">
                        © 2024 Undangly. All rights reserved.
                    </p>

                </div>
            </x-atoms.wrapper>

        </footer>
    </div>

    {{-- optional named slot scripts --}}

    @isset($scripts)
        {{ $scripts }}
    @endisset

</body>

</html>
