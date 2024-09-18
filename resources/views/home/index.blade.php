<x-app-layout>


    <div class="bg-gradient-to-tr from-green-50 via-gray-50 to-primary-100">

        <div class="bg-grid">
            <div class="w-[90%] mx-auto py-4 md:py-8 flex items-center justify-between">
                <a href="{{ url('/') }}">
                    <x-atoms.logo-full class="h-[42px]"></x-atoms.logo-full>
                </a>

                <div class="hidden md:flex items-center gap-4">
                    <a href="https://app.undangly.com/theme" class="text-sm font-semibold hover:text-primary py-2 px-2">
                        Tema Undangan
                    </a>

                    <a href="https://app.undangly.com/login" class="text-sm font-semibold hover:text-primary py-2 px-2">
                        Masuk
                    </a>

                    <a href="https://app.undangly.com/register"
                        class="text-sm font-semibold hover:text-primary py-2 px-2">
                        Daftar
                    </a>
                </div>
            </div>


            <section class="">
                <x-atoms.wrapper>
                    <div class="pb-[180px] pt-[80px]">
                        <div class="md:w-[80%] mx-auto flex flex-col items-center">
                            <h1
                                class="text-center font-extrabold text-4xl md:text-6xl leading-[1.2] md:leading-[1.2] mb-5">
                                Publikasikan undangan digital dalam 5 menit tanpa coding.
                            </h1>

                            <p class="text-center leading-[1.5] text-gray-600 text-lg md:w-[85%] mb-10">
                                Dengan builder canggih kami, Anda dapat membuat undangan digital yang menarik dan elegan
                                tanpa
                                ribet
                                dan cepat.
                            </p>

                            <a href="https://app.undangly.com/register"
                                class="inline-flex px-5 py-3 rounded-lg bg-black text-white hover:bg-gray-700 duration-300 font-semibold">
                                Coba sekarang
                            </a>
                        </div>
                    </div>
                </x-atoms.wrapper>
            </section>

            <section class="mt-[-100px]">
                <x-atoms.wrapper>
                    <div>
                        <video src="{{ url('/demo.mp4') }}" autoplay muted loop
                            class="rounded-xl bg-white w-full shadow"></video>
                    </div>
                </x-atoms.wrapper>
            </section>


            <section class="pt-[120px] pb-[60px] mt-[-60px] md:pt-[180px] md:pb-[100px] md:mt-[-100px]">
                <x-atoms.wrapper>
                    <div class="grid md:grid-cols-3 gap-4">

                        <x-organisms.feature-card title="Hitung Mundur"
                            description="Menghitung mundur rundown acara kamu, memberikan kesan persiapan yang mendebarkan dan membuat tamu merasa terlibat.">
                            <svg class="h-full" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32">
                                <path d="M15 19h2v2h-2z" fill="currentColor"></path>
                                <path d="M15 23h2v2h-2z" fill="currentColor"></path>
                                <path
                                    d="M23 11.67V4h3V2H6v2h3v7.67a2 2 0 0 0 .4 1.2L11.75 16L9.4 19.13a2 2 0 0 0-.4 1.2V28H6v2h20v-2h-3v-7.67a2 2 0 0 0-.4-1.2L20.25 16l2.35-3.13a2 2 0 0 0 .4-1.2zM21 4v7H11V4zm0 16.33V28H11v-7.67L14.25 16L12 13h8l-2.25 3z"
                                    fill="currentColor"></path>
                            </svg>
                        </x-organisms.feature-card>

                        <x-organisms.feature-card title="Peta Lokasi Acara"
                            description="Tampilkan peta interaktif yang menunjukkan lokasi acara sehingga tamu mudah menemukannya dengan bantuan GPS.">
                            <svg class="h-full" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32">
                                <path
                                    d="M28 16H18v-2h5v-4a2 2 0 0 1 2-2h1.5a1.5 1.5 0 0 0 .284-2.973l-.711-.136l-.075-.571a2.632 2.632 0 0 0-1.68-2.182a2.505 2.505 0 0 0-3.083 1.304l-.304.647l-.71-.077a2.018 2.018 0 0 0-2.17 2.434A2.098 2.098 0 0 0 20.126 8H21v2h-.782a4.15 4.15 0 0 1-4.206-3.686a4.005 4.005 0 0 1 3.741-4.306a4.5 4.5 0 0 1 8.074 1.252a3.505 3.505 0 0 1 2.142 3.71A3.628 3.628 0 0 1 26.317 10H25v4h3z"
                                    fill="currentColor"></path>
                                <path d="M18 18h4v2h-4z" fill="currentColor"></path>
                                <path d="M14 18v-2h-2v4h4v-2h-2z" fill="currentColor"></path>
                                <path d="M12 10h2v4h-2z" fill="currentColor"></path>
                                <path
                                    d="M17.885 30l-6.066-3.858L4 27.989V4h10v4h-2V6H6v19.461l6.181-1.46l5.934 3.775L22.818 26H26v-6h-2v-2h4v10h-4.818l-5.297 2z"
                                    fill="currentColor"></path>
                            </svg>
                        </x-organisms.feature-card>

                        <x-organisms.feature-card title="RSVP Online"
                            description="Memungkinkan tamu untuk mengonfirmasi kehadiran mereka secara online, memberikan kemudahan bagi pasangan pengantin untuk melihat daftar tamu.">
                            <svg class="h-full" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32">
                                <path d="M8 14h6v2H8z" fill="currentColor"></path>
                                <path d="M8 6h12v2H8z" fill="currentColor"></path>
                                <path d="M8 10h12v2H8z" fill="currentColor"></path>
                                <path d="M8 24h6v2H8z" fill="currentColor"></path>
                                <path
                                    d="M27 25h-6a3 3 0 0 0-3 3v2h2v-2a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2h2v-2a3 3 0 0 0-3-3z"
                                    fill="currentColor"></path>
                                <path d="M24 24a4 4 0 1 0-4-4a4 4 0 0 0 4 4zm0-6a2 2 0 1 1-2 2a2 2 0 0 1 2-2z"
                                    fill="currentColor"></path>
                                <path
                                    d="M14 30H6a2.002 2.002 0 0 1-2-2V4a2.002 2.002 0 0 1 2-2h16a2.002 2.002 0 0 1 2 2v10h-2V4H6v24h8z"
                                    fill="currentColor"></path>
                            </svg>
                        </x-organisms.feature-card>

                        <x-organisms.feature-card title="Galeri Foto"
                            description="Koleksi foto pre-wedding dan momen spesial yang dapat diakses tamu, membuat undangan lebih personal dan menarik.">
                            <svg class="h-full" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32">
                                <path d="M4 22H2V4a2.002 2.002 0 0 1 2-2h18v2H4z" fill="currentColor"></path>
                                <path d="M21 17a3 3 0 1 0-3-3a3.003 3.003 0 0 0 3 3zm0-4a1 1 0 1 1-1 1a1 1 0 0 1 1-1z"
                                    fill="currentColor"></path>
                                <path
                                    d="M28 7H9a2.002 2.002 0 0 0-2 2v19a2.002 2.002 0 0 0 2 2h19a2.002 2.002 0 0 0 2-2V9a2.002 2.002 0 0 0-2-2zm0 21H9v-6l4-3.997l5.586 5.586a2 2 0 0 0 2.828 0L23 22.003L28 27zm0-3.828l-3.586-3.586a2 2 0 0 0-2.828 0L20 22.172l-5.586-5.586a2 2 0 0 0-2.828 0L9 19.172V9h19z"
                                    fill="currentColor"></path>
                            </svg>
                        </x-organisms.feature-card>


                        <x-organisms.feature-card title="Musik Latar"
                            description="Sertakan musik latar yang romantis atau sesuai tema acara untuk meningkatkan suasana ketika tamu membaca undangan.">
                            <svg class="h-full" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32">
                                <path
                                    d="M25 4H10a2.002 2.002 0 0 0-2 2v14.556A3.955 3.955 0 0 0 6 20a4 4 0 1 0 4 4V12h15v8.556A3.954 3.954 0 0 0 23 20a4 4 0 1 0 4 4V6a2.002 2.002 0 0 0-2-2zM6 26a2 2 0 1 1 2-2a2.002 2.002 0 0 1-2 2zm17 0a2 2 0 1 1 2-2a2.003 2.003 0 0 1-2 2zM10 6h15v4H10z"
                                    fill="currentColor"></path>
                            </svg>
                        </x-organisms.feature-card>

                        <x-organisms.feature-card title="Timeline Acara"
                            description="Jelaskan detail rundown acara pernikahan seperti akad, resepsi, dan unduh mantu agar tamu tahu kapan dan di mana harus berada.">
                            <svg class="h-full" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32">
                                <path
                                    d="M26 4h-4V2h-2v2h-8V2h-2v2H6c-1.1 0-2 .9-2 2v20c0 1.1.9 2 2 2h20c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 22H6V12h20v14zm0-16H6V6h4v2h2V6h8v2h2V6h4v4z"
                                    fill="currentColor"></path>
                            </svg>
                        </x-organisms.feature-card>

                        <x-organisms.feature-card title="Ucapan & Doa dari Tamu"
                            description="Fitur yang memungkinkan tamu memberikan ucapan selamat atau doa yang akan tersimpan di halaman undangan.">
                            <svg class="h-full" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32">
                                <path
                                    d="M16 19a6.99 6.99 0 0 1-5.833-3.129l1.666-1.107a5 5 0 0 0 8.334 0l1.666 1.107A6.99 6.99 0 0 1 16 19z"
                                    fill="currentColor"></path>
                                <path d="M20 8a2 2 0 1 0 2 2a1.98 1.98 0 0 0-2-2z" fill="currentColor"></path>
                                <path d="M12 8a2 2 0 1 0 2 2a1.98 1.98 0 0 0-2-2z" fill="currentColor"></path>
                                <path
                                    d="M17.736 30L16 29l4-7h6a1.997 1.997 0 0 0 2-2V6a1.997 1.997 0 0 0-2-2H6a1.997 1.997 0 0 0-2 2v14a1.997 1.997 0 0 0 2 2h9v2H6a4 4 0 0 1-4-4V6a3.999 3.999 0 0 1 4-4h20a3.999 3.999 0 0 1 4 4v14a4 4 0 0 1-4 4h-4.835z"
                                    fill="currentColor"></path>
                            </svg>
                        </x-organisms.feature-card>

                        <x-organisms.feature-card title="Link Live Streaming"
                            description="Tampilkan tautan untuk tamu yang tidak bisa hadir secara fisik tetapi tetap ingin menyaksikan acara secara live streaming.">
                            <svg class="h-full" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32">
                                <path d="M8 12h9v2H8z" fill="currentColor"></path>
                                <path d="M8 17h5v2H8z" fill="currentColor"></path>
                                <path
                                    d="M21 26H4a2.002 2.002 0 0 1-2-2V8a2.002 2.002 0 0 1 2-2h17a2.002 2.002 0 0 1 2 2v4.057l5.419-3.87A1 1 0 0 1 30 9v14a1 1 0 0 1-1.581.814L23 19.944V24a2.002 2.002 0 0 1-2 2zM4 8v16.001L21 24v-6a1 1 0 0 1 1.581-.814L28 21.056V10.944l-5.419 3.87A1 1 0 0 1 21 14V8z"
                                    fill="currentColor"></path>
                            </svg>
                        </x-organisms.feature-card>

                        <x-organisms.feature-card title="Cerita Cinta"
                            description="Bagikan kisah perjalanan cinta pasangan mulai dari pertemuan pertama hingga akhirnya memutuskan untuk menikah.">
                            <svg class="h-full" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32">
                                <path
                                    d="M18 23h-2v-2a3.003 3.003 0 0 0-3-3H9a3.003 3.003 0 0 0-3 3v2H4v-2a5.006 5.006 0 0 1 5-5h4a5.006 5.006 0 0 1 5 5z"
                                    fill="currentColor"></path>
                                <path d="M11 6a3 3 0 1 1-3 3a3 3 0 0 1 3-3m0-2a5 5 0 1 0 5 5a5 5 0 0 0-5-5z"
                                    fill="currentColor"></path>
                                <path d="M2 26h28v2H2z" fill="currentColor"></path>
                                <path
                                    d="M27.303 8a2.662 2.662 0 0 0-1.908.806L25 9.21l-.395-.405a2.662 2.662 0 0 0-3.816 0a2.8 2.8 0 0 0 0 3.896L25 17l4.21-4.298a2.8 2.8 0 0 0 0-3.896A2.662 2.662 0 0 0 27.304 8z"
                                    fill="currentColor"></path>
                            </svg>
                        </x-organisms.feature-card>

                        <x-organisms.feature-card title="Daftar Tamu"
                            description="Pantau dan kelola siapa saja yang diundang. Lihat status RSVP dan kirim undangan ke tamu tertentu dengan mudah.">
                            <svg class="h-full" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32">
                                <path d="M26 6V2H2v10h9v18h19V6zM4 10V4h20v2H11v4zm24 18H13V8h15z" fill="currentColor">
                                </path>
                                <path d="M15 11h2v2h-2z" fill="currentColor"></path>
                                <path d="M19 11h7v2h-7z" fill="currentColor"></path>
                                <path d="M15 17h2v2h-2z" fill="currentColor"></path>
                                <path d="M19 17h7v2h-7z" fill="currentColor"></path>
                                <path d="M15 23h2v2h-2z" fill="currentColor"></path>
                                <path d="M19 23h7v2h-7z" fill="currentColor"></path>
                            </svg>
                        </x-organisms.feature-card>

                        <x-organisms.feature-card title="Kado Digital"
                            description="Tamu dapat memberikan hadiah secara digital melalui fitur ini, seperti transfer uang atau e-gift card, langsung dari undangan.">
                            <svg class="h-full" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32">
                                <path
                                    d="M26 10h-2.762A4.487 4.487 0 0 0 16 4.707A4.487 4.487 0 0 0 8.762 10H6a2.002 2.002 0 0 0-2 2v4a2.002 2.002 0 0 0 2 2v10a2.002 2.002 0 0 0 2 2h16a2.002 2.002 0 0 0 2-2V18a2.002 2.002 0 0 0 2-2v-4a2.002 2.002 0 0 0-2-2zm-9-2.5a2.5 2.5 0 1 1 2.5 2.5H17zM12.5 5A2.503 2.503 0 0 1 15 7.5V10h-2.5a2.5 2.5 0 0 1 0-5zM6 12h9v4H6zm2 6h7v10H8zm16.001 10H17V18h7zM17 16v-4h9l.001 4z"
                                    fill="currentColor"></path>
                            </svg>
                        </x-organisms.feature-card>

                        <x-organisms.feature-card title="Sebarkan melalui WhatsApp"
                            description="Kirim undangan digital langsung ke tamu melalui WhatsApp untuk kemudahan dan jangkauan lebih luas.">
                            <svg class="h-full" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32">
                                <path
                                    d="M27 25h-6a3 3 0 0 0-3 3v2h2v-2a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2h2v-2a3 3 0 0 0-3-3z"
                                    fill="currentColor"></path>
                                <path d="M20 20a4 4 0 1 0 4-4a4 4 0 0 0-4 4zm6 0a2 2 0 1 1-2-2a2 2 0 0 1 2 2z"
                                    fill="currentColor"></path>
                                <path d="M6 21v-1H4v1a7 7 0 0 0 7 7h3v-2h-3a5 5 0 0 1-5-5z" fill="currentColor"></path>
                                <path d="M19 10h7v2h-7z" fill="currentColor"></path>
                                <path d="M19 6h10v2H19z" fill="currentColor"></path>
                                <path d="M19 2h10v2H19z" fill="currentColor"></path>
                                <path
                                    d="M11 11H5a3 3 0 0 0-3 3v2h2v-2a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2h2v-2a3 3 0 0 0-3-3z"
                                    fill="currentColor"></path>
                                <path d="M8 10a4 4 0 1 0-4-4a4 4 0 0 0 4 4zm0-6a2 2 0 1 1-2 2a2 2 0 0 1 2-2z"
                                    fill="currentColor"></path>
                            </svg>
                        </x-organisms.feature-card>
                    </div>
                </x-atoms.wrapper>
            </section>
        </div>
    </div>

    <section class="mt-[60px] ">
        <x-atoms.wrapper>
            <div>
                <h2 class="text-4xl font-extrabold text-center mb-10">
                    Ratusan tema undangan berkelas.
                </h2>
            </div>

        </x-atoms.wrapper>
        <div class="flex flex-col gap-2 relative">
            <div class="flex gap-2 justify-center overflow-x-hidden">
                <img class="w-[25vw] shrink-0 aspect-square bg-gray-100"
                    src="https://satumomen.com/themes/galungan/galungan.webp" />
                <img class="w-[25vw] shrink-0 aspect-square bg-gray-100"
                    src="https://satumomen.com/themes/bonvoyage/bonvoyage.webp" />
                <img class="w-[25vw] shrink-0 aspect-square bg-gray-100"
                    src="https://satumomen.com/themes/colored-beach/colored-beach.webp" />
                <img class="w-[25vw] shrink-0 aspect-square bg-gray-100"
                    src="https://satumomen.com/themes/pelantikan-dewan/pelantikan-dewan.webp" />
                <img class="w-[25vw] shrink-0 aspect-square bg-gray-100"
                    src="https://satumomen.com/themes/betawi-vintage/betawi-vintage.jpg" />

            </div>

            <div class="flex gap-2 justify-center overflow-x-hidden ml-[-25vw]">
                <img class="w-[25vw] shrink-0 aspect-square bg-gray-100"
                    src="https://satumomen.com/themes/sakura-castle/sakura-castle.jpg" />
                <img class="w-[25vw] shrink-0 aspect-square bg-gray-100"
                    src="https://satumomen.com/themes/wisuda-harmoni/wisuda-harmoni.jpg" />
                <img class="w-[25vw] shrink-0 aspect-square bg-gray-100"
                    src="https://satumomen.com/themes/purple-marble/purple-marble.jpg" />
                <img class="w-[25vw] shrink-0 aspect-square bg-gray-100"
                    src="https://satumomen.com/themes/minimalist-blue/minimalist-blue.jpg" />
                <img class="w-[25vw] shrink-0 aspect-square bg-gray-100"
                    src="https://satumomen.com/themes/maroon-and-blue/maroon-and-blue.jpg" />

            </div>

            <div
                class="absolute z-[2] left-[50%] top-[50%] translate-x-[-50%] translate-y-[-50%] shadow-[0_0_20px_20px__rgba(255,255,255,1)]  md:shadow-[0_0_50px_50px__rgba(255,255,255,1)] rounded-xl">
                <a href="https://app.undangly.com/theme"
                    class="inline-flex px-5 py-3 rounded-lg bg-black text-white hover:bg-gray-700 duration-300 font-semibold">
                    Jelajahi tema
                </a>
            </div>
        </div>
    </section>

    <section class="mt-[60px]">
        <x-atoms.wrapper>
            <div>
                <h2 class="text-4xl font-extrabold text-center mb-10">
                    Dipercaya oleh ratusan pengguna.
                </h2>

                <div class="relative" x-data="{ open: false }">
                    <div
                        x-bind:class="open ? 'grid grid-cols-1 md:grid-cols-3 gap-3' :
                            'grid grid-cols-1 md:grid-cols-3 gap-4 max-h-[700px] overflow-hidden'">
                        @foreach ($reviews as $review)
                            <div class="flex flex-col bg-slate-100 p-4 rounded-xl">
                                <p class="font-semibold mb-2">
                                    {{ $review->name }}
                                </p>
                                <p>
                                    {{ $review->comment }}
                                </p>
                            </div>
                        @endforeach
                    </div>

                    <template x-if="!open">
                        <div
                            class="inset-x-0 z-[2] bottom-0 flex justify-center bg-gradient-to-t from-white pt-32 pb-8  absolute">
                            <button type="button" x-on:click="open = !open"
                                class="inline-flex px-5 py-3 rounded-lg bg-black text-white hover:bg-gray-700 duration-300 font-semibold">
                                Lihat semua ...
                            </button>
                        </div>
                    </template>
                </div>
            </div>
        </x-atoms.wrapper>
    </section>




</x-app-layout>
