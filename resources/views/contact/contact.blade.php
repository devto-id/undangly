<x-app-layout>


    <div class="bg-gradient-to-tr from-green-50 via-gray-50 to-primary-100">
        <div class="bg-grid">
            <div class="w-[90%] mx-auto py-4 md:py-8 flex items-center justify-between">
                <x-atoms.logo-full class="h-[42px]"></x-atoms.logo-full>

                <div class="hidden md:flex items-center gap-4">

                    <a href="https://app.undangly.com/theme" class="text-sm font-semibold hover:text-primary py-2 px-2">
                        Tema Undangan
                    </a>

                    <a href="#" class="text-sm font-semibold hover:text-primary py-2 px-2">
                        Kontak
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
        </div>
        <section class="bg-grid">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.2143963492836!2d106.9342617!3d-6.366294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6993428d3c5d9f%3A0x2f14cdfae737d0c2!2sJl.%20Lembur%202%2C%20Jatirangga%2C%20Kec.%20Jatisampurna%2C%20Kota%20Bks%2C%20Jawa%20Barat%2017434!5e0!3m2!1sid!2sid!4v1726552561058!5m2!1sid!2sid" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <x-atoms.wrapper>
                    <div class="h-[500px]">
                        <div class="contact w-[95%] h-[80%] mx-auto my-[10%] bg-gradient-to-tr from-green-50 via-gray-50 to-primary-100 rounded-md shadow-lg shadow-gray-300">
                            <div class="content flex w-fit p-10">
                                <div class="address w-[40%]">
                                    <div class="title font-bold text-xl mb-4">
                                        <h1>LOKASI :</h1>
                                    </div>
                                    <a class="contact-link flex" href="https://maps.app.goo.gl/bbb8HsBMW2Zpc1vm7" target="blank_">
                                        <div class="icon min-w-[50px] max-w-[50px] h-[50px] mr-4 rounded-full flex items-center justify-center text-2xl bg-gray-200">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>
                                        <p>Kranggan Lembur, Kel. Jatirangga, Kec. Jatisampurna, Kota Bekasi, Jawa Barat 17434</p>
                                    </a>
                                </div>
                                <div class="email w-[35%]">
                                    <div class="title font-bold text-xl mb-4">
                                        <h1>EMAIL :</h1>
                                    </div>
                                    <a class="contact-link flex items-center" href="https://mail.google.com/mail/?view=cm&fs=1&to=undangly.app@gmail.com" target="blank_">
                                        <div class="icon min-w-[50px] min-h-[50px] mr-4 rounded-full flex items-center justify-center text-2xl bg-gray-200">
                                            <i class="fa-regular fa-envelope"></i>
                                        </div>
                                        <p>undangly.app@gmail.com</p>
                                    </a>
                                </div>
                                <div class="sosmed w-[25%]">
                                    <div class="title font-bold text-xl mb-4">
                                        <h1>SOSIAL :</h1>
                                    </div>
                                    <a class="contact-link flex items-center" href="https://wa.me/6285718823638" target="blank_">
                                        <div class="icon min-w-[50px] min-h-[50px] mr-4 rounded-full flex items-center justify-center text-3xl bg-gray-200">
                                            <i class="fa-brands fa-whatsapp"></i>
                                        </div>
                                        <p>+62-857-1882-3638</p>
                                    </a>
                                    <a class="contact-link flex items-center my-4" href="https://www.instagram.com/undangly.app?utm_source=qr" target="blank_">
                                        <div class="icon min-w-[50px] min-h-[50px] mr-4 rounded-full flex items-center justify-center text-3xl bg-gray-200">
                                            <i class="fa-brands fa-instagram"></i>
                                        </div>
                                        <p>@undangly.app</p>
                                    </a>
                                    <a class="contact-link flex items-center" href="https://www.facebook.com/profile.php?id=61565833948636" target="blank_">
                                        <div class="icon min-w-[50px] min-h-[50px] mr-4 rounded-full flex items-center justify-center text-2xl bg-gray-200">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </div>
                                        <p>Undangly App</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </x-atoms.wrapper>    
        </section>
    </div>
    <footer class="">
        <x-atoms.wrapper>
            <div class="flex flex-col items-center py-10">
                <p class="text-center text-gray-600">
                    © 2024 Undangly. All rights reserved.
                </p>
            </div>
        </x-atoms.wrapper>
    </footer>


    

</x-app-layout>
