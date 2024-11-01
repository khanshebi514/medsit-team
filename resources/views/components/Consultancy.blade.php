<section class="py-10">
    <div class="container grid grid-cols-1 md:grid-cols-2">
        <div class="flex flex-col justify-center gap-5 p-2 md:p-10">
            <h1 class="text-2xl md:text-3xl font-bold lg:text-4xl text-primary">Experience our secured medical
                billing services for <span class="text-pink-web">as low as 2.69%</span></h1>
            <div class="my-2 md:my-4">
                <h1 class="text-3xl md:text-4xl font-bold xl:text-[70px] text-pink-web">
                    2000+
                </h1>
            </div>
            <p class="text-2xl font-semibold text-gray-700">
                healthcare providers trust MedsIT Nexus medical billing services company
            </p>
        </div>
        <div class="flex justify-end mb-5">
            @include('ui.ContactForm')
        </div>
    </div>

    <!-- reserve section billing -->
    <div class="bg-[#F1F5F9] py-10">
        <div class="container">
            <!-- first row -->
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="">
                    <div class="space-y-4">
                        <h1 class="heading text-primary">Reserve your spot for our dedicated medical billing experts
                        </h1>
                        <div class="bg-pink-web w-[100px] h-[2px]"></div>
                        <p class="textPara">
                            With our partnership in revenue cycle management, you will be assigned a dedicated medical
                            billing team committed to providing personalized, efficient, and accurate services tailored
                            to your practice requirements.
                        </p>
                    </div>

                    <div class="flex flex-col sm:flex-row justify-start items-center gap-5 mt-10">
                        <div class="w-[275px] h-[209px] p-3 bg-white rounded-md">
                            <div
                                class="w-[50px] h-[50px] bg-white p-1 drop-shadow rounded-full flex justify-center items-center">
                                <img src="{{Vite::asset('resources/images/Fill out line.png')}}">
                            </div>
                            <p class="paraText text-primary mt-2">
                                Our tailored approach to healthcare financial management  services has ridiculously
                                overcome medical claim denials
                            </p>
                        </div>
                        <div class="w-[275px] h-[209px] p-3 bg-primary rounded-md">
                            <div
                                class="w-[50px] h-[50px] bg-white p-1 drop-shadow rounded-full flex justify-center items-center">
                                <img src="{{Vite::asset('resources/images/fileo.png')}}">
                            </div>
                            <p class="paraText text-white mt-2">
                                Our tailored approach to healthcare financial management  services has ridiculously
                                overcome medical claim denials
                            </p>
                        </div>

                    </div>

                </div>

                <!-- col-2 -->
                <div class="justify-self-end">
                    <img src="{{Vite::asset('resources/images/paper-file.png')}}" alt="" class="w-[70%]">
                </div>
            </div>
            <!-- second row -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-10">
                <div>
                    <img src="{{Vite::asset('resources/images/certificate.png')}}">
                </div>
                <div class="bg-[#F4F6FC] p-10 drop-shadow">

                <h2 class="text-2xl font-bold text-primary">Select Your Time</h2>
                    <form class="flex justify-around flex-col gap-5 mt-10">
                        
                        <div class="flex flex-col md:flex-row justify-start  gap-5">
                            <div>

                                <label aria-required="true" for="date">Select Date:</label>
                                @include('ui.Input', ['type' => 'date', 'placeholder' => 'Name', 'name' => 'date', 'width' => 'full'])
                            </div>

                            <div>
                                <label aria-required="true" for="duration">How long do you need?</label>
                                <div class="mt-2 space-x-1">
                                    <input type="radio" id="html" name="duration" value="HTML">
                                    <label for="html">15 Mins</label>
                                    <input type="radio" id="css" name="duration" value="CSS">
                                    <label for="css">30 Mins</label>
                                    <input type="radio" id="javascript" name="duration" value="JavaScript">
                                    <label for="javascript">45 Mins</label>
                                </div>

                            </div>
                         </div>

                         <div class="flex flex-col md:flex-row justify-center  gap-5">
                                <div>
                                    <label aria-required="true" for="date">Select Time Zone</label>
                                    @include('ui.Input', ['type' => 'text', 'placeholder' => 'UMT +2', 'name' => 'time_zone', 'width' => 'full'])
                                </div>
                                <div>
                                    <label aria-required="true" for="date">What Time Works Best for You?</label>
                                    @include('ui.Input', ['type' => 'text', 'placeholder' => 'UMT +3', 'name' => 'best_time_zone', 'width' => 'full'])
                                </div>
                        </div>
                        <div class="mt-2">
                            <Button class="bg-primary text-white rounded-md px-8 py-2">
                                Submit
                            </Button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>