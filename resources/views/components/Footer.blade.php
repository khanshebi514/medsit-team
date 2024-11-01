<footer>
    <div class="bg-primary border-b-2">
        <div class="container py-3">
            <div class="flex flex-col md:flex-row justify-center items-center gap-10">
                <p class="text-[24px] font-normal text-white">
                    Practice better when everything works together
                </p>
                <div class="flex justify-center items-center gap-1">
                    @include('ui.Input', ['type' => 'text', 'placeholder' => "name@example.com", 'name' => 'subscribe_email', 'width' => 'full'])
                    <button class="bg-pink-web py-2 px-5 text-nowrap text-white">
                        Let's Start
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-[#060F1E] py-10">
        <div class="container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 xl:grid-cols-5 gap-5">
            <!-- col-1 -services -->
            <div>
                <h2 class="text-2xl font-medium text-white uppercase">Services</h2>
                <ul class="mt-3 flex justify-start flex-col gap-1">
                    <x-Link-Item href="/" textLable="Medical Audit Services" />
                    <x-Link-Item href="/" textLable="Medical Credentialing Services" />
                    <x-Link-Item href="/" textLable="Medical Insurance Verification" />
                    <x-Link-Item href="/" textLable="Patient Help Desk" />
                    <x-Link-Item href="/" textLable="Reporting & Analytics" />
                </ul>
            </div>
            <!-- col-2 -solutions -->
            <div>
                <h2 class="text-2xl font-medium text-white uppercase">Solutions</h2>
                <ul class="mt-3 flex justify-start flex-col gap-1">
                    <x-Link-Item href="/" textLable="MedsLab" />
                    <x-Link-Item href="/" textLable="MedsTele" />
                    <x-Link-Item href="/" textLable="MedsCare" />

                </ul>
            </div>
            <!-- col-3 -about MedsIt -->
            <div>
                <h2 class="text-2xl font-medium text-white uppercase">About MedsIt</h2>
                <ul class="mt-3 flex justify-start flex-col gap-1">
                    <x-Link-Item href="/" textLable="About Us" />
                    <x-Link-Item href="/" textLable="Why MedsIt" />
                    <x-Link-Item href="/" textLable="Specialties" />
                    <x-Link-Item href="/" textLable="Contact Us" />
                    <x-Link-Item href="/" textLable="Career" />
                </ul>
            </div>
            <!-- col-4 -Learn -->
            <div>
                <h2 class="text-2xl font-medium text-white uppercase">About MedsIt</h2>
                <ul class="mt-3 flex justify-start flex-col gap-1">
                    <x-Link-Item href="/" textLable="Blog" />
                    <x-Link-Item href="/" textLable="Provider Checklist" />
                    <x-Link-Item href="/" textLable="Sitemap" />
                    <x-Link-Item href="/" textLable="Privacy Policy" />
                </ul>
            </div>

            <!-- col-4 -Get in Touch -->

            <div>
                <h2 class="text-2xl font-medium text-white uppercase">Get In Touch</h2>
                <div class="mt-3">
                    <p class="text-base font-medium text-white py-1">Phone</p>
                    <x-Link-Item href="https://wa.me/+15166651869" textLable="+1 (516) 665-1869" />
                    <!-- social icons -->
                    <div class="my-2">
                        <div class="flex justify-center md:justify-end items-center gap-3">
                            <div
                                class="bg-[#3B5998] w-[40px] h-[40px] rounded-full flex justify-center items-center p-1">
                                <a href="/facebook.com">
                                    <img src="{{Vite::asset('resources/images/fSymbol.png')}}" />
                                </a>
                            </div>

                            <div
                                class="bg-[#0976B4] w-[40px] h-[40px] rounded-full flex justify-center items-center p-1">
                                <a href="/facebook.com">
                                    <img src="{{Vite::asset('resources/images/liSymbol.png')}}" />
                                </a>
                            </div>

                            <div
                                class="bg-[#00ACED] w-[40px] h-[40px] rounded-full flex justify-center items-center p-1">
                                <a href="/facebook.com">
                                    <img src="{{Vite::asset('resources/images/x-twitter.png')}}" />
                                </a>
                            </div>

                            <div
                                class="bg-[#E4405F] w-[40px] h-[40px] rounded-full flex justify-center items-center p-1">
                                <a href="/facebook.com">
                                    <img src="{{Vite::asset('resources/images/inSymbol.png')}}" />
                                </a>
                            </div>

                            <div
                                class="bg-[#CD201F] w-[40px] h-[40px] rounded-full flex justify-center items-center p-1">
                                <a href="/facebook.com">
                                    <img src="{{Vite::asset('resources/images/ytSymbol.png')}}" />
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- images -->
                     <div class="mt-5 flex flex-col md:flex-row justify-start items-center gap-2">
                        <img src="{{Vite::asset('resources/images/Accredited.png')}}" class="w-[191px]">
                        <img src="{{Vite::asset('resources/images/HIPAA.png')}}" class="w-[191px]">
                     </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-primary border-b-2">
        <div class="container py-3">
            <p class="textPara text-center text-[#ffffff]">Copyright © 2024 MedsITNexus. All Rights Reserved by <span
                    class="font-semibold">MedsITNexus</span></p>
        </div>
    </div>
</footer>