<x-app-layout>

    <section class="bg-gradient-to-tr from-white via-primary-50 to-yellow-50">
        <div class="bg-grid">

            <x-atoms.wrapper>
                <div class="py-[180px]">
                    <div class="md:w-[80%] mx-auto flex flex-col items-center">
                        <h1 class="text-center font-extrabold text-4xl md:text-6xl leading-[1.2] md:leading-[1.2] mb-5">
                            Publikasikan undangan digital dalam 5 menit tanpa coding.
                        </h1>

                        <p class="text-center leading-[1.5] text-gray-600 text-lg md:w-[85%] mb-10">
                            Dengan builder canggih kami, Anda dapat membuat undangan digital yang menarik dan elegan
                            tanpa
                            ribet
                            dan cepat.
                        </p>

                        <a href=""
                            class="inline-flex px-5 py-3 rounded-lg bg-black text-white hover:bg-gray-700 duration-300 font-semibold">
                            Coba sekarang
                        </a>
                    </div>
                </div>
            </x-atoms.wrapper>
        </div>
    </section>

    <section class="mt-[-60px]">
        <x-atoms.wrapper>
            <div>
                <video src="{{ url('/demo.mp4') }}" autoplay muted loop
                    class="rounded-xl bg-white w-full shadow "></video>
            </div>
        </x-atoms.wrapper>
    </section>


    <section class="mt-[120px]">
        <x-atoms.wrapper>
            <div>
                <h2 class="text-4xl font-extrabold text-center mb-10">
                    Dipercaya oleh ratusan pengguna.
                </h2>

                <div class="relative" x-data="{ open: false }">
                    <div
                        x-bind:class="open ? 'grid grid-cols-1 md:grid-cols-3 gap-3' :
                            'grid grid-cols-1 md:grid-cols-3 gap-3 max-h-[700px] overflow-hidden'">
                        @for ($i = 0; $i < 100; $i++)
                            <div class="flex flex-col bg-slate-100 p-4">
                                <p class="font-semibold mb-2">
                                    {{ fake('id_ID')->name }}
                                </p>
                                <p>
                                    {{ fake('id_ID')->paragraph }}
                                </p>
                            </div>
                        @endfor
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

    <section class="mt-[120px] ">
        <x-atoms.wrapper>
            <div>
                <h2 class="text-4xl font-extrabold text-center mb-10">
                    Ratusan tema undangan premium
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
                <button type="button"
                    class="inline-flex px-5 py-3 rounded-lg bg-black text-white hover:bg-gray-700 duration-300 font-semibold">
                    Jelajahi tema
                </button>
            </div>
        </div>
    </section>

    <footer>
        <x-atoms.wrapper>
            <div class="flex flex-col items-center py-10">
                <p class="text-center text-gray-600">
                    © 2024 Undangly. All rights reserved.
                </p>
            </div>
        </x-atoms.wrapper>
    </footer>

</x-app-layout>
