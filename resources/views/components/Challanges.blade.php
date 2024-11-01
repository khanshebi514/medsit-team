<section id="revnu-id" class="py-5">
    <div class="w-full md:w-[70%] xl:w-[933px] m-auto bg-primary rounded-md p-2 md:p-16">
        <div>
            <h1 class="heading text-white">MedsIT Nexus overcomes the following everyday challenges physicians face in
                their revenue cycle management</h1>
            <div class="w-[100px] h-[2px] bg-pink-web mt-2"></div>
        </div>

        <div class="mt-10">
            <ul class="space-y-3">
                <li class="p-[10px] bg-white text-black rounded-lg outline-pink-web flex item-center gap-5">
                    <input type="radio" name="custom-radio" id="custom-radio" class="custom-radio"> Healthcare providers
                    facing denials in their claims
                </li>
                <li class="p-[10px] bg-white text-black rounded-lg outline-pink-web flex item-center gap-5">
                    <input type="radio" name="custom-radio" id="custom-radio" class="custom-radio"> Facing issues in
                    patients' upfront collections
                </li>
                <li class="p-[10px] bg-white text-black rounded-lg outline-pink-web flex item-center gap-5">
                    <input type="radio" name="custom-radio" id="custom-radio" class="custom-radio"> Struggling to
                    collect accounts receivable timely
                </li>
                <li class="p-[10px] bg-white text-black rounded-lg outline-pink-web flex item-center gap-5">
                    <input type="radio" name="custom-radio" id="custom-radio" class="custom-radio"> Facing medical
                    billing errors that are hearting your revenue
                </li>

            </ul>
        </div>
        <div class="mt-10">
            <div>
                <div class="flex flex-col md:flex-row gap-5">
                    @include('ui.Input', ['type' => 'text', 'placeholder' => 'Name', 'name' => 'full_name', 'width' => 'full'])
                    @include('ui.Input', ['type' => 'email', 'placeholder' => 'Email', 'name' => 'email', 'width' => 'full'])
                    @include('ui.Input', ['type' => 'number', 'placeholder' => 'Phone', 'name' => 'phone_number', 'width' => 'full'])
                </div>
            </div>
        </div>

        <div class="mt-5">
            <button class="bg-pink-web rounded-md w-full p-2 text-white hover:bg-gray-600">
                Book a Free Conslutation
            </button>
        </div>
    </div>

</section>
<section class="py-10">
    <div class="container mt-10">
        <div class="grid grid-cols-1 md:grid-cols-2">

            <div>
                <h1 class="heading text-primary">MedsIT Nexus medical billing services are customized for
                    multi-specialty and specialty-specific physicians in healthcare sectors </h1>
                <div class="w-[100px] h-[2px] bg-pink-web mt-2"></div>
                <p class="textPara mt-3">Our medical billing staff  is excelled in  claims management  of the major
                    healthcare facilities, whether they are Free-standing or Institutional facilities, and a broad
                    spectrum of healthcare professionals such as physicians, Nurses, Allied Health Professionals, Dental
                    Specialists, Mental health professionals.</p>
                <div class="mt-5">
                    <div class="flex justify-start gap-8">
                        <button class="transform transition-transform p-3 bg-white border rounded-full text-primary">
                            <span>
                                <!-- Left Arrow Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-chevron-down" viewBox="0 0 16 16" style="transform: rotate(90deg);">
                                    <path
                                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 1 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </span>
                        </button>


                        <button class="transform transition-transform p-3 bg-white border rounded-full text-primary">
                            <span>
                                <!-- Right Arrow Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-chevron-down" viewBox="0 0 16 16" style="transform: rotate(-90deg);">
                                    <path
                                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 1 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </span>
                        </button>

                    </div>
                </div>
            </div>
            <div>
                <div class="max-w-[594px] min-h-[360px] m-auto rounded-md bg-[#F3F4F7] text-black">
                    <!-- start of tab content -->
                    <!-- Tab area -->

                    <div class="mb-4 border-b border-gray-200 dark:border-gray-700 h-[45%]">
                        <ul class="grid grid-cols-1 sm:grid-cols-3 -mb-px text-sm font-medium text-center h-full" id="default-tab" role="tablist">
                            <li class="me-2 w-full" role="presentation">
                                <button class="h-full w-full p-4 border-b-2 rounded-t-lg active-tab text-[16px] font-[600] flex flex-col items-center text-black gap-2"
                                    id="profile-tab" data-tabs-target="#profile" type="button" role="tab"
                                    aria-controls="profile" aria-selected="true"><img src="{{Vite::asset('resources/images/section-5/urgent-billing.png')}}" alt=""> Urgent Care 
                                    Billing</button>
                            </li>
                            <li class="me-2 w-full" role="presentation">
                                <button
                                    class="h-full w-full p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 text-[16px] font-[600] text-black flex flex-col items-center gap-2"
                                    id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                                    aria-controls="dashboard" aria-selected="false"><img src="{{Vite::asset('resources/images/section-5/emerg-room-bill.png')}}" alt=""> Emergency room billing</button>
                            </li>
                            <li class="me-2 w-full" role="presentation">
                                <button
                                    class="h-full w-full p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 text-[16px] font-[600] text-black flex flex-col items-center gap-2"
                                    id="settings-tab" data-tabs-target="#settings" type="button" role="tab"
                                    aria-controls="settings" aria-selected="false"><img src="{{Vite::asset('resources/images/section-5/emb-surg.png')}}" alt=""> Ambulatory Surgery Center Billing</button>
                            </li>
                        </ul>
                    </div>

                    <div id="default-tab-content">
                        <div class="p-4 rounded-lg dark:bg-gray-800" id="profile" role="tabpanel"
                            aria-labelledby="profile-tab">
                            <ul class="grid grid-cols-1 sm:grid-cols-2 gap-y-3">
                                <li class="flex justify-start items-center gap-3 tex"><img
                                        src="{{ Vite::asset('resources/images/Tick-Icons.png') }}"
                                        alt="Tick Icon">Family Medicine Billing</li>
                                <li class="flex justify-start items-center gap-3 tex"><img
                                        src="{{ Vite::asset('resources/images/Tick-Icons.png') }}"
                                        alt="Tick Icon">Internal medicine billing</li>
                                <li class="flex justify-start items-center gap-3 tex"><img
                                        src="{{ Vite::asset('resources/images/Tick-Icons.png') }}"
                                        alt="Tick Icon">Otolaryngology Medical Billing </li>
                                <li class="flex justify-start items-center gap-3 tex"><img
                                        src="{{ Vite::asset('resources/images/Tick-Icons.png') }}"
                                        alt="Tick Icon">Emergency medicine billing</li>
                                <li class="flex justify-start items-center gap-3 tex"><img
                                        src="{{ Vite::asset('resources/images/Tick-Icons.png') }}"
                                        alt="Tick Icon">Pediatrics Medical billing</li>
                            </ul>
                        </div>
                        <div class="hidden p-4 rounded-lg dark:bg-gray-800" id="dashboard" role="tabpanel"
                            aria-labelledby="dashboard-tab">
                            <ul class="grid grid-cols-1 sm:grid-cols-2 gap-y-3">
                                <li class="flex justify-start items-center gap-3 tex"><img
                                        src="{{ Vite::asset('resources/images/Tick-Icons.png') }}"
                                        alt="Tick Icon">Trauma Surgery Medical Billing</li>
                                <li class="flex justify-start items-center gap-3 tex"><img
                                        src="{{ Vite::asset('resources/images/Tick-Icons.png') }}"
                                        alt="Tick Icon">Pediatric Emergency Medicine</li>
                                <li class="flex justify-start items-center gap-3 tex"><img
                                        src="{{ Vite::asset('resources/images/Tick-Icons.png') }}"
                                        alt="Tick Icon">Neurology Medical Billing </li>
                                <li class="flex justify-start items-center gap-3 tex"><img
                                        src="{{ Vite::asset('resources/images/Tick-Icons.png') }}"
                                        alt="Tick Icon">Critical Care Medicine</li>
                                <li class="flex justify-start items-center gap-3 tex"><img
                                        src="{{ Vite::asset('resources/images/Tick-Icons.png') }}"
                                        alt="Tick Icon">Cardiology Medical Billing</li>
                            </ul>
                        </div>
                        <div class="hidden p-4 rounded-lg  dark:bg-gray-800" id="settings" role="tabpanel"
                            aria-labelledby="settings-tab">
                            <ul class="grid grid-cols-1 sm:grid-cols-2 gap-y-3">
                                <li class="flex justify-start items-center gap-3 tex"><img
                                        src="{{ Vite::asset('resources/images/Tick-Icons.png') }}"
                                        alt="Tick Icon">Outpatient Orthopedic 
                                        Surgeons</li>
                                <li class="flex justify-start items-center gap-3 tex"><img
                                        src="{{ Vite::asset('resources/images/Tick-Icons.png') }}"
                                        alt="Tick Icon">Gastroenterology Medical 
                                        Billing</li>
                                <li class="flex justify-start items-center gap-3 tex"><img
                                        src="{{ Vite::asset('resources/images/Tick-Icons.png') }}"
                                        alt="Tick Icon">General Surgery Medical Billing</li>
                                <li class="flex justify-start items-center gap-3 tex"><img
                                        src="{{ Vite::asset('resources/images/Tick-Icons.png') }}"
                                        alt="Tick Icon">Ophthalmology medical 
                                        billing</li>
                                <li class="flex justify-start items-center gap-3 tex"><img
                                        src="{{ Vite::asset('resources/images/Tick-Icons.png') }}"
                                        alt="Tick Icon">Pain Management Medical billings</li>
                            </ul>
                        </div>
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel"
                            aria-labelledby="contacts-tab">
                            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content for the
                                <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's associated
                                    content</strong>.
                            </p>
                        </div>
                    </div>

                    <!-- end of tab content -->
                </div>
            </div>

        </div>
    </div>
</section>

<section id="world-map" class="py-10">
    <div class="container mt-5">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div>
                <div>
                    <img src="{{Vite::asset('resources/images/world-map.png')}}" alt="">
                </div>
            </div>
            <div class="flex justify-start items-center p-10">
                <div class="space-y-4">
                    <h1 class="heading text-primary">Our remote medical billing options are available at your nearest
                        location</h1>
                    <div class="w-[100px] h-[2px] bg-pink-web"></div>
                    <p class="textPara">
                        MedsIT Nexus is a top-rated medical billing service in the USA. Our revenue cycle service
                        representatives cover almost every state and city in the nation. Our billing services are
                        efficiently optimized, elevating your practice to streamline your revenue cycle
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- JavaScript for tab functionality -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tabs = document.querySelectorAll('[role="tab"]');
        const tabContents = document.querySelectorAll('[role="tabpanel"]');

        tabs.forEach((tab) => {
            tab.addEventListener('click', () => {
                const target = document.querySelector(tab.getAttribute('data-tabs-target'));


                tabs.forEach((t) => {
                    t.setAttribute('aria-selected', 'false');
                    t.classList.remove('active-tab');
                });
                tabContents.forEach((tc) => tc.classList.add('hidden'));


                tab.setAttribute('aria-selected', 'true');
                tab.classList.add('active-tab');
                target.classList.remove('hidden');
            });
        });
    });
</script>