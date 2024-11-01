<section>
    <div class="container">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div>
                <img src="{{Vite::asset('resources/images/Group-9536.png')}}" alt="">
            </div>
            <div>
                <h2 class="heading text-primary">Exceptional Features of Our <br>Medical Billing Services</h2>
                <div class="w-[20%] h-[2px] bg-pink-web mt-3">
                </div>
                <div class="mt-5">
                    <h3 class="text-primary font-semibold text-2xl">Streamlined Medical Claims Billing Services</h3>
                    <p class="textPara text-gray-600 mt-3">
                        MedsIT Nexus medical billing services are highly proficient in executing medical claims
                        processes. With the following top-notch features, our services have a competitive edge in the
                        billing industry
                    </p>
                    <ul class="mt-5 space-y-5">
                        <li class="flex justify-start items-center gap-2"><img
                                src="{{Vite::asset('resources/images/bullet-point 1.png')}}" alt="">We implemented a
                            transparent upfront collection process</li>
                        <li class="flex justify-start items-center gap-2"><img
                                src="{{Vite::asset('resources/images/bullet-point 1.png')}}" alt="">We have deployed
                            customized methodologies for tracking claim denials, ensuring the increased first-pass claim
                            rates</li>
                        <li class="flex justify-start items-center gap-2"><img
                                src="{{Vite::asset('resources/images/bullet-point 1.png')}}" alt="">Our internal billing
                            systems have enhanced quality control to eliminate claim errors, ensuring success in the
                            financial state of your practice</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 mt-[100px]">
            <div>

                <div class="mt-5">
                    <h3 class="text-primary font-semibold text-2xl">Specialized billing services</h3>
                    <p class="textPara text-gray-600 mt-3">
                        MedsIT Nexus is a renowned medical billing agency for its specialized billing and coding
                        services. With the following features, our revenue cycle services are well-versed in meeting the
                        unique needs of various medical specialties
                    </p>
                    <ul class="mt-5 space-y-5">
                        <li class="flex justify-start items-center gap-2"><img
                                src="{{Vite::asset('resources/images/bullet-point 1.png')}}" alt="">Our professionals
                            are excelled in utilizing advanced billing software and EHR systems to automate and optimize
                            the billing processes</li>
                        <li class="flex justify-start items-center gap-2"><img
                                src="{{Vite::asset('resources/images/bullet-point 1.png')}}" alt="">Our medical billers
                            and coders are specialized in various medical specialties such as Cardiology, Orthopedics,
                            Dermatology</li>
                        <li class="flex justify-start items-center gap-2"><img
                                src="{{Vite::asset('resources/images/bullet-point 1.png')}}" alt="">With our outsourced
                            medical billing services, your practice will be fairly and promptly compensated for its
                            services
                        </li>
                    </ul>
                </div>
            </div>
            <div class="justify-self-end">
                <img src="{{Vite::asset('resources/images/billing-services.png')}}" alt="">
            </div>
        </div>
    </div>
</section>
<section class="bg-bg-gray py-10">
    <div class="container">
        <div class="flex justify-center items-center flex-col gap-3">
            <h3 class="heading text-primary text-center">Healthcare Institutions We Serve</h3>
            <p class="textPara text-gray-600">A closer look at the healthcare systems and professionals for whom our
                medical billing services are
                intended</p>

            <div class="w-[100px] h-[2px] bg-pink-web mt-3"></div>
        </div>

        <div class="mt-10">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
                <!-- single item -->
                @include('ui.ServiceCard', ['title' => 'Hospitals', 'description' => "Streamline revenue cycle of your healthcare organization with MedsIT Nexus's billing services", 'iconUrl' => 'resources/images/section-5/hospital-1.png', 'bg_color' => '263974'])
                <!-- end of single item -->

                <!-- single item -->
                @include('ui.ServiceCard', ['title' => 'Private & Small Practices', 'description' => "Enhance practice profitability with MedsIT Nexus's specialized billing solutions", 'iconUrl' => 'resources/images/section-5/private-small-practice.png', 'bg_color' => 'FC5D61'])
                <!-- end of single item -->


                <!-- single item -->
                @include('ui.ServiceCard', ['title' => 'Physicians', 'description' => "Our team is experienced in processing claims for specialized, primary care and surgical physicians.", 'iconUrl' => 'resources/images/section-5/pysician.png', 'bg_color' => '1B325D'])
                <!-- end of single item -->

                <!-- single item -->
                @include('ui.ServiceCard', ['title' => 'Emergency Room Centers', 'description' => "Experience smooth billing processes for both free-standing and inpatient ER facility", 'iconUrl' => 'resources/images/section-5/emergency-room.png', 'bg_color' => '2DBE89'])
                <!-- end of single item -->


                <!-- single item -->
                @include('ui.ServiceCard', ['title' => 'Ambulatory Surgery Centers', 'description' => "MedsIT Nexus enhances the billing process of your surgical centers to maximize the reimbursements", 'iconUrl' => 'resources/images/section-5/amb-surgery.png', 'bg_color' => '102C57'])
                <!-- end of single item -->

                <!-- single item -->
                @include('ui.ServiceCard', ['title' => 'Urgent Care Centers', 'description' => "Boost your walk-in clinic revenue with MedsIT Nexus’ seamless billing management", 'iconUrl' => 'resources/images/section-5/urgent-care.png', 'bg_color' => '263974'])
                <!-- end of single item -->
            </div>
        </div>
    </div>
</section>

<section>
    <div class="bg-[#1B325D08]">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div>
                    <img src="{{Vite::asset('resources/images/billing-partner.png')}}" alt=""
                        class="w-[70%] object-cover">
                </div>
                <div>
                    <div class="grid grid-cols-1">
                        <h2 class="heading text-primary text-end">Trust MedsIT Nexus as your billing partner, ranking
                            among the top-rated companies that do medical <span
                                class=" py-2 border-b-2 border-pink-web">billing</span> </h2>

                        <div class="p-2 rounded-3xl bg-white drop-shadow w-full sm:w-[40%] justify-self-end mt-10">
                            <li class="flex justify-start items-center gap-3 textPara"><img
                                    src="{{Vite::asset('resources/images/tick-mark.png')}}" alt=""
                                    class="w-[60px] h-[60px]"> <span
                                    class="text-pink-web font-semibold text-base">99%</span> clean claim rate</li>
                        </div>
                        <div class="p-2 rounded-3xl bg-white drop-shadow w-full sm:w-[60%] justify-self-end mt-5">
                            <li class="flex justify-start items-center gap-3 textPara"><img
                                    src="{{Vite::asset('resources/images/inflation.png')}}" alt=""
                                    class="w-[60px] h-[60px]"> <span
                                    class="text-pink-web font-semibold text-base">10%</span> revenue Raise and cash flow
                            </li>
                        </div>

                        <div class="p-2 rounded-3xl bg-white drop-shadow w-full sm:w-[80%] justify-self-end mt-5">
                            <li class="flex justify-start items-center gap-3 textPara"><img
                                    src="{{Vite::asset('resources/images/all-hour.png')}}" alt=""
                                    class="w-[60px] h-[60px]"> <span class="text-pink-web font-semibold text-base">24
                                    hours</span>Of Minimal Claim turnaround time</li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- second section -->
    <div class="bg-[#F2F6FF] py-10">
        <div class="container grid grid-cols-1 md:grid-cols-2">
            <div>
                <div class="space-y-3">
                    <h2 class="heading text-primary">
                        The one and only revenue cycle management firm that fulfills the healthcare providers' vision by
                        combining the technology & expertise
                    </h2>
                    <div class="w-[100px] h-[2px] bg-pink-web">

                    </div>
                    <p class="textPara py-5">
                        MedsIT Nexus provides advanced medical billing and coding services at both the facility and
                        professional level; we navigate your practice through the complex  revenue cycle operations with
                        the integration of automated solutions in healthcare systems, ensuring maximum growth in the
                        financial outcomes of your organization
                    </p>
                    <li class="flex justify-start items-center gap-3"><img
                            src="{{Vite::asset('resources/images/Tick-icons.png')}}" alt="">Instant Patient’s EOB
                        verification</li>
                    <li class="flex justify-start items-center gap-3"><img
                            src="{{Vite::asset('resources/images/Tick-icons.png')}}" alt="">Insurance Claim auditing
                    </li>
                    <li class="flex justify-start items-center gap-3"><img
                            src="{{Vite::asset('resources/images/Tick-icons.png')}}" alt="">Instant Patient’s EOB
                        verification</li>
                    <li class="flex justify-start items-center gap-3"><img
                            src="{{Vite::asset('resources/images/Tick-icons.png')}}" alt="">Revenue cycle services</li>
                    <li class="flex justify-start items-center gap-3"><img
                            src="{{Vite::asset('resources/images/Tick-icons.png')}}" alt="">ar recovery services</li>
                    <li class="flex justify-start items-center gap-3"><img
                            src="{{Vite::asset('resources/images/Tick-icons.png')}}" alt="">Faster medical insurance
                        reimbursement</li>
                </div>

            </div>

            <div class="flex justify-end items-center gap-5 flex-col sm:flex-row">
                <div class="w-[279px] h-[327px] p-8 flex items-center flex-col gap-3 bg-white drop-shadow rounded-lg">
                    <h1 class="text-[17px] text-primary font-bold tracking-tighter text-center">Services Satisfaction
                        Level</h1>
                    <div class="progress">
                        <div class="progress-circle">98%</div>
                    </div>
                    <p class="textPara text-center">
                        Based on a 4.8-star rating from 500+ providers across the states
                    </p>
                </div>

                <div class="w-[279px] h-[327px] p-8 flex items-center flex-col gap-5 bg-white drop-shadow rounded-lg">
                    <h1 class="text-[17px] text-primary font-bold tracking-tighter text-center">Services Satisfaction
                        Level</h1>
                    <div class="my-5">
                        <h1 class="text-3xl md:text-[70px] font-bold text-pink-web">500+</h1>
                    </div>
                    <p class="textPara text-center">
                        Our medical billing team holds CMRS, RHIA, and CPB credentials for all medical specialties
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>