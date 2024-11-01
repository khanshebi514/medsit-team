<section class="bg-bg-gray">
    <div class="flex justify-center items-center">
        <div class="mt-5 md:mt-10 w-full md:max-w-[1200px] content-center px-5">
            <p class="text-base text-[#fc5d61] font-[600] text-center">Specialties we deal</p>
            <h3 class="heading text-primary mt-3 text-center">Professional Fee Coding</h3>
            <p class="textPara mt-5 text-center">
                By entrusting us with your professional fee coding needs, your clinical team can dedicate their energy
                to delivering exceptional patient care while we handle the complexities of coding with precision and
                efficiency.
            </p>
        </div>
    </div>

    <div class="flex justify-start">
        <div class="container mt-20">
            <div>
                <h3 class="text-xl font-semibold text-primary-text mt-5">Core competencies</h3>
                <p class="textPara mt-3">We specialize in an array of specialties, including:</p>
            </div>

            <div class="mt-10">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                    @for ($i = 0; $i <= 26; $i++)
                        @include('ui.ServiceCard', ['iconUrl' => 'resources/images/Layer 2.png', 'description' => 'Obstetrics & Gynecology coding'])
                    @endfor
                </div>

            </div>
        </div>
    </div>


</section>