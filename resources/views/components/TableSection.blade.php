<section>
    <div class="container">
        <div class="max-w-[1183px] m-auto">
            <div class="flex justify-center items-center gap-3 flex-col">
                <h1 class="heading text-primary text-center">MedsIT Nexus Cost Effective Medical Billing Services</h1>
                <div class="w-[100px] h-[2px] bg-pink-web"></div>
                <p class="textPara text-center">
                    MedsIT Nexus offers billing services at very affordable rates of 2.69% of the total insurance
                    collection
                    to the broad spectrum of healthcare systems and providers, which is crucial for maintaining the
                    financial health of your practice.
                </p>
            </div>
            <div class="mt-10">
                <div class="overflow-x-auto">
                    <table class="min-w-full border border-gray-300 text-primary">
                        <thead class="bg-primary">
                            <tr class="text-white">
                                <th class="px-4 py-2 border border-gray-300 w-1/3">Cost</th>
                                <th class="px-4 py-2 border border-gray-300 w-1/3">In-House</th>
                                <th class="px-4 py-2 border border-gray-300 w-1/3">MedsIt Nexus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center px-4 py-2 border border-gray-300">BILLING SPECIALIST COSTS</td>
                                <td class="text-center px-4 py-2 border border-gray-300">$110,000</td>
                                <td class="text-center px-4 py-2 border border-gray-300">$0</td>
                            </tr>
                            <tr>
                                <td class="text-center px-4 py-2 border border-gray-300">OPERATIONS COST</td>
                                <td class="text-center px-4 py-2 border border-gray-300">$7,000</td>
                                <td class="text-center px-4 py-2 border border-gray-300">$0</td>
                            </tr>
                            <tr>
                                <td class="text-center px-4 py-2 border border-gray-300">SECURE DOCUMENT CLOUD SERVICE
                                </td>
                                <td class="text-center px-4 py-2 border border-gray-300">$1800</td>
                                <td class="text-center px-4 py-2 border border-gray-300">$0</td>
                            </tr>

                            <tr>
                                <td class="text-center px-4 py-2 border border-gray-300">CLAIM PROCESSING COST</td>
                                <td class="text-center px-4 py-2 border border-gray-300">$3,000</td>
                                <td class="text-center px-4 py-2 border border-gray-300">$38,333</td>
                            </tr>
                            <tr>
                                <td class="text-center px-4 py-2 border border-gray-300">COLLECTION (%)</td>
                                <td class="text-center px-4 py-2 border border-gray-300">$7,000</td>
                                <td class="text-center px-4 py-2 border border-gray-300">95%</td>
                            </tr>
                            <tr>
                                <td class="text-center px-4 py-2 border border-gray-300">COLLECTION ($)</td>
                                <td class="text-center px-4 py-2 border border-gray-300">$1,425,000</td>
                                <td class="text-center px-4 py-2 border border-gray-300">$38,333</td>
                            </tr>

                            <tr>
                                <td class="text-center px-4 py-2 border border-gray-300">NET COLLECTION</td>
                                <td class="text-center px-4 py-2 border border-gray-300">$1,078,200</td>
                                <td class="text-center px-4 py-2 border border-gray-300">$1,386,667 <br>
                                    (Revenue 28% increase)</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-10">
    <div class="container mt-5">
        <div class="bg-[#F4F6FC] rounded-2xl drop-shadow py-10">
            <div class="flex justify-center items-center gap-3 flex-col">
                <h1 class="heading text-primary text-center">Get Instant pricing Quote</h1>
                <div class="w-[100px] h-[2px] bg-pink-web"></div>
                <p class="textPara text-center">
                    Get a quote with us for pricing details that are customized as per your billing requirements.
                </p>
            </div>

            <div class="p-2 md:p-10">
                <form class="md:p-5">
                    <div class="relative mb-6 w-full md:max-w-[70%] m-auto">
                        <label for="labels-range-input" class="sr-only">Labels range</label>
                        <input id="labels-range-input" type="range" value="1000" min="100" max="1500"
                            class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                        <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-0 -bottom-6">Min
                            ($100)</span>
                        <span
                            class="text-sm text-gray-500 dark:text-gray-400 absolute start-1/3 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">$500</span>
                        <span
                            class="text-sm text-gray-500 dark:text-gray-400 absolute start-2/3 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">$1000</span>
                        <span class="text-sm text-gray-500 dark:text-gray-400 absolute end-0 -bottom-6">Max
                            ($1500)</span>
                    </div>

                    <div class="pt-10">
                        <div class="flex flex-col md:flex-row gap-3">
                            @include('ui.Input', ['type' => 'text', 'placeholder' => 'Name', 'name' => 'full_name', 'width' => 'full'])
                            @include('ui.Input', ['type' => 'number', 'placeholder' => 'Phone', 'name' => 'phone', 'width' => 'full'])
                            @include('ui.Input', ['type' => 'email', 'placeholder' => 'Email', 'name' => 'email', 'width' => 'full'])
                        </div>

                        <div class="flex flex-col md:flex-row gap-3 mt-3">
                            @include('ui.Input', ['type' => 'text', 'placeholder' => 'State', 'name' => 'state', 'width' => 'full'])
                            @include('ui.Input', ['type' => 'text', 'placeholder' => 'Speciality', 'name' => 'speciality', 'width' => 'full'])
                            @include('ui.Input', ['type' => 'text', 'placeholder' => 'Monthly Insurance Collection', 'name' => 'insurance_collection', 'width' => 'full'])
                        </div>

                        <div class="mt-5">
                            <textarea name="call_message"
                                class="border outline-none bg-white text-black py-2 px-4 w-full rounded-md placeholder:text-gray-400 h-[150px]"
                                placeholder="Best time to call? Please briefly Describe your requirements"></textarea>
                        </div>
                    </div>


                    <div class="mt-10 flex justify-center items-center">
                        <button class="bg-pink-web px-10 py-2 rounded-lg text-white">
                            Unlock Pricing Quote
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>