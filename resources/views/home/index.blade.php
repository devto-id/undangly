<x-app-layout>
    <section class="py-12">
        <x-atoms.wrapper>
            <div class="flex flex-col-reverse md:flex-col gap-12">
                <div class="flex flex-col gap-6">
                    <h1 class="text-center text-4xl md:text-6xl w-full leading-[1.4] md:leading-[1.4] font-medium">
                        Undangan Digital:
                        <br>
                        Buat dulu, <strong class="font-black">bayar</strong> kemudian
                    </h1>

                    <div class="flex justify-center">
                        <a href="https://app.undangly.com"
                            class="bg-primary-600 hover:bg-primary-700 cursor-pointer md:text-lg font-bold text-white px-6 py-3 rounded-full shadow-lg shadow-primary-100">
                            Buat Undangan
                        </a>
                    </div>
                </div>

                <div class="w-full">
                    <img src="/images/demo.png"
                        class="w-full rounded-lg border-[8px] shadow-lg shadow-gray-50 border-gray-200 mx-auto" />
                </div>
            </div>


        </x-atoms.wrapper>

    </section>


    <section class="py-14">
        <x-atoms.wrapper>
            <h2 class="text-4xl md:text-5xl text-center font-semibold">
                Ratusan Template Undangan
            </h2>

            <p class="text-center mt-5">
                Pilih template undangan yang sesuai dengan tema acara kamu
            </p>
        </x-atoms.wrapper>

        <div class="swiper mySwiper mt-10">
            <div class="swiper-wrapper">
                @for ($i = 0; $i < 10; $i++)
                    <div class="swiper-slide">
                        <div class="px-2">
                            <div class="rounded-lg w-full aspect-square bg-gray-50 overflow-hidden shadow-lg">
                                <img src="https://picsum.photos/800/600?random={{ $i }}"
                                    class="object-cover h-full w-full" />
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>


        <div class="flex justify-center mt-10">
            <a
                class="bg-primary-600 hover:bg-primary-700 cursor-pointer md:text-lg font-bold text-white px-6 py-3 rounded-full shadow-lg shadow-primary-100">
                Lihat Semua Template
            </a>
        </div>
    </section>

    <section class="py-14 bg-neutral-100">
        <x-atoms.wrapper>
            <div class="flex flex-col-reverse md:flex-row gap-14 md:gap-16">
                <div class="md:w-6/12 md:mt-16">
                    <h2 class="text-4xl md:text-5xl text-start mb-10 font-semibold leading-[1.4] md:leading-[1.4]">
                        Ratusan Background Music Tersedia
                    </h2>
                    <p class="text-lg leading-[1.6]">
                        Dengan ratusan background music yang tersedia, kamu bisa memilih background music yang sesuai
                        dengan
                        tema
                        acara kamu. Kamu juga bisa mengupload background music sendiri.
                    </p>
                </div>

                <div class="md:w-6/12">
                    <img src="/images/video.png" class="" />
                </div>
            </div>

        </x-atoms.wrapper>
    </section>

    <section class="py-14">
        <x-atoms.wrapper>
            <div class="flex flex-col md:flex-row gap-14 md:gap-16">


                <div class="md:w-6/12">
                    <img src="/images/non-profit.png" class="" />
                </div>
                <div class="md:w-6/12 md:mt-20">
                    <h2 class="text-4xl md:text-5xl text-start mb-10 font-semibold leading-[1.4] md:leading-[1.4]">
                        Undang tamu sebanyak-banyaknya
                    </h2>
                    <p class="text-lg leading-[1.6]">
                        Undang semua orang yang kamu kenal dalam acara kamu tanpa khawatir tentang batasan jumlah
                        peserta atau biaya tambahan.
                    </p>
                </div>
            </div>

        </x-atoms.wrapper>
    </section>


    <section class="py-14 ">
        <x-atoms.wrapper>
            <div class="flex flex-col-reverse md:flex-row gap-14 md:gap-16">
                <div class="md:w-6/12 md:mt-16">
                    <h2 class="text-4xl md:text-5xl text-start mb-10 font-semibold leading-[1.4] md:leading-[1.4]">
                        Terima Kado & Ucapan Digital
                    </h2>
                    <p class="text-lg leading-[1.6]">
                        Dengan Undangly, kamu bisa dengan mudah menerima kado digital dan ucapan selamat dari tamu
                        undanganmu, menambah keseruan acara dan memberikan kenangan yang berkesan.
                    </p>
                </div>

                <div class="md:w-6/12">
                    <img src="/images/present.png" class="" />
                </div>
            </div>

        </x-atoms.wrapper>
    </section>

    <footer class="py-14">
        <x-atoms.wrapper>
            <p class="text-sm text-neutral-400">
                Copyright &copy; 2024 Undangly
            </p>
        </x-atoms.wrapper>
    </footer>

    <x-slot name="styles">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    </x-slot>

    <x-slot name="scripts">
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 2,
                spaceBetween: 0,

                breakpoints: {
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 0,
                    },
                },
            });
        </script>
    </x-slot>
</x-app-layout>
