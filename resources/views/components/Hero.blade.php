<section>
    <div class="">
        <div id="hero" class="py-2 md:pt-[100px] md:pb-[300px] relative">
            <div class="container grid grid-cols-1 md:grid-cols-2 place-items-center gap-5 md:gap-0 py-10">
                <div class="">
                    <h1 class="title text-primary my-2">
                        Complete medical billing services for Healthcare centers and professionals in USA
                    </h1>

                    <p class="textPara mt-2">
                        MedsIT Nexus is a nationwide popular medical insurance billing company providing end-to-end
                        healthcare revenue cycle services, from insurance credentialing to payment posting for
                        healthcare professionals no matter in which facility setting they are practicing, whether
                        inpatient or outpatient
                        <br />
                        <br />
                        If your practice revenue is overwhelmed by your strict payor's regulations  and there is no
                        second option than outsourcing your revenue cycle, our certified medical billing specialists in
                        institutional and professional claims processing are here to resolve underpayment issues,
                        managing claim denials, and recovering aged invoices.
                    </p>
                    <form class="mt-10">
                        <div class="flex justify-start items-start md:items-center gap-5 flex-col md:flex-row">
                            @include('ui.Input', ['type' => 'text', 'name' => 'full_name', 'placeholder' => 'Name', 'width' => 'full'])
                            @include('ui.Input', ['type' => 'email', 'name' => 'email', 'placeholder' => 'Email', 'width' => 'full'])
                            @include('ui.Input', ['type' => 'number', 'name' => 'fnumber', 'placeholder' => 'Phone Number', 'width' => 'full'])

                        </div>
                        <button type="submit" class="px-10 py-2 mt-5 bg-primary text-white">
                            Submit
                        </button>
                    </form>
                </div>

                <div class="justify-self-center md:justify-self-end">
                    <div class="w-[300px] rounded-t-2xl">
                        <img src="{{Vite::asset('resources/images/Frame-1122.png')}}" alt="this is image of a dot bg"
                            class=" object-cover w-full" />
                    </div>
                </div>
            </div>

            <!-- here is counter part -->
            <div class="py-5 md:py-0 static md:absolute top-[83%] left-[10%] ">
                <div class="container">
                    @include('ui.Counter')
                </div>

            </div>
        </div>

        <!-- second section -->

        <article class="py-2 md:py-10 container">
            <div class="mt-5 md:mt-[150px]">
                <div class="grid grid-cols-1 md:grid-cols-2 py-5 sm:py-12 gap-5">
                    <div class="space-y-5">
                        <div>
                            <h1 class="text-[16px] font-semibold text-primary">
                                <!-- number of accordion currently active -->
                                <span class="heading">01</span> / <span id="index-number-id">6</span>
                            </h1>
                        </div>
                        <div>
                            <h3 class="heading text-primary font-medium w-full md:w-[60%]">
                                MedsIT Nexus Offers A Full Spectrum Of Medical Billing And Coding Services
                            </h3>
                        </div>
                        <div class="w-[20%] h-[2px] bg-[#FF787B]">
                        </div>
                        <div class="text-gray-700 font-semibold text-[16px]">
                            With over 10 years of excellence in healthcare revenue cycle services, MedsIT Nexus has
                            become a leading medical billing company for its dedicated and expert staff helping
                            healthcare professionals for their denial and AR issues. Our experts efficiently overcome
                            the billing and coding complications in every type of medical practice setting, such as Solo
                            and Group practices, ultimately resulting in providing better patient experience and smooth
                            cash flow
                        </div>

                        <div>
                            <div class="flex justify-start gap-8">
                                <button id="btn-decrement"
                                    class="transform transition-transform p-3 bg-white border rounded-full text-primary left-arrow">
                                    <span>
                                        <!-- Left Arrow Icon -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16"
                                            style="transform: rotate(90deg);">
                                            <path
                                                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 1 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </span>
                                </button>


                                <button id="btn-increment"
                                    class="transform transition-transform p-3 bg-white border rounded-full text-primary right-arrow">
                                    <span>
                                        <!-- Right Arrow Icon -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16"
                                            style="transform: rotate(-90deg);">
                                            <path
                                                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 1 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </span>
                                </button>

                            </div>
                            <div>
                                <!-- pagination -->
                                <div class="mt-5">
                                    <div>
                                        <button
                                            class="px-5 py-3 border rounded-lg  bg-slate-200  pagination-button"
                                            data-index="1">1</button>
                                        <button
                                            class="px-5 py-3 border border-slate-300 rounded-lg bg-slate-200 pagination-button"
                                            data-index="2">2</button>
                                        <button
                                            class="px-5 py-3 border border-slate-300 rounded-lg bg-slate-200 pagination-button"
                                            data-index="3">3</button>
                                        <button
                                            class="px-5 py-3 border border-slate-300 rounded-lg bg-slate-200 pagination-button"
                                            data-index="4">4</button>
                                        <button
                                            class="px-5 py-3 border border-slate-300 rounded-lg bg-slate-200 pagination-button"
                                            data-index="5">5</button>
                                        <button
                                            class="px-5 py-3 border border-slate-300 rounded-lg bg-slate-200 pagination-button"
                                            data-index="6">6</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="flex flex-col gap-5">
                            <div id="accordion-1" class="">
                                @include('ui.AccordonCard', ['heading' => 'Medical Billing Services', 'description' => "'MedsIT Nexus has a dedicated billing department that works with credentialed and non-credentialed healthcare providers, providing them end-to-end medical billing services from the front office to the payment posting, ensuring a top level of accuracy in claims filing and  processing being compliant with regulatory regulations", 'iconUrl' => 'resources/images/section-5/acc-1.png'])
                            </div>
                            <div id="accordion-2" class="">
                                @include('ui.AccordonCard', ['heading' => 'Medical Coding Services', 'description' => "Our medical coders have expertise in the physician’s office coding and the professional fee coding with additional coding charts audit and review services in all kinds of facility settings. Additionally, we have also expertise in clinical coding, ensuring maximum accuracy, accurate documentation, and other quality metrics", 'iconUrl' => 'resources/images/section-5/acc-img-2.png'])
                            </div>
                            <div id="accordion-3" class="">
                                @include('ui.AccordonCard', ['heading' => 'Medical Credentialing Services', 'description' => "MedsIT Nexus medical credentialing experts are highly proficient in executing a provider enrollment process. We are experts in the area of group and individual practice credentialing and have working experience with both commercial and private payors. Our services help you to join your required network of Payors with maximum privileges.", 'iconUrl' => 'resources/images/section-5/acc-img-2.png'])
                            </div>
                            <div id="accordion-4" class="">
                                @include('ui.AccordonCard', ['heading' => 'Denials & Appeal Management services', 'description' => "MedsIT Nexus denial management services cover a broad spectrum of the healthcare sector, including facilities and medical practices; our professionals work on the denied claims that occur because of the various component processes within the RCM chain, most efficiently resulting in the claim resolution and increased revenue of healthcare providers", 'iconUrl' => 'resources/images/section-5/acc-img-3.png'])
                            </div>
                            <div id="accordion-5" class="">
                                @include('ui.AccordonCard', ['heading' => 'Accounts Receivable Services', 'description' => "Our professionals have experience in payor follow-up. Our A/R follow-up policies and procedures help medical providers in getting minimized A/R days. We work at both the facility level and practice level to resolve their outstanding claims and get rid of them from financial strain", 'iconUrl' => 'resources/images/section-5/acc-img-4.png'])
                            </div>
                            <div id="accordion-6" class="">
                                @include('ui.AccordonCard', ['heading' => 'MedsIT Nexus Offers A Full Spectrum Of Medical Billing And Coding Services', 'description' => "MedsIT Nexus Offers A Full Spectrum Of Medical Billing And Coding Services', 'description' => 'With over 10 years of excellence in healthcare revenue cycle services, MedsIT Nexus has become a leading medical billing company for its dedicated and expert staff helping healthcare professionals for their denial and AR issues. Our experts efficiently overcome the billing and coding complications in every type of medical practice setting, such as Solo and Group practices, ultimately resulting in providing better patient experience and smooth cash flow", 'iconUrl' => 'resources/images/section-5/acc-img-5.png'])
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </article>
    </div>
</section>

<script>
    let index = 0;
    const number = document.getElementById('index-number-id');
    const btn_incre = document.getElementById('btn-increment');
const btn_decre = document.getElementById('btn-decrement');

const increPagination = () => {
    if (index >= 0 && index < 6) {
        index += 1;  
        updatePagination(index)
    }
}

const decrePagination = () => {
    if (index > 0 && index <= 6) {  
        index -= 1;  
       updatePagination(index)
    }
}

btn_incre.addEventListener('click', increPagination); 
btn_decre.addEventListener('click', decrePagination); 

    const updatePagination = (n) => {
        index = n;
        number.innerHTML = index;

        const buttons = document.querySelectorAll('.pagination-button');
        buttons.forEach(button => {
            button.classList.remove('active');
        });


        const activeButton = document.querySelector(`.pagination-button[data-index="${index}"]`);
        if (activeButton) {
            activeButton.classList.add('active');
        }
    }
    for (let i = 1; i <= 6; i++) {
        const accordion = document.getElementById(`accordion-${i}`);
        accordion?.addEventListener('click', () => updatePagination(i));
    }


    const buttons = document.querySelectorAll('.pagination-button');
    buttons.forEach((button, i) => {
        button.addEventListener('click', () => updatePagination(i + 1));
    });

    number.innerHTML = index;
</script>