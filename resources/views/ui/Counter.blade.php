<div class="grid rounded-xl grid-cols-1 md:grid-cols-2 md:rounded-2xl">
    <div class="bg-[#FF787B] flex justify-center items-center p-5 rounded-none md:rounded-l-2xl">
        <div class="space-y-4">
            <div class="heading text-white flex justify-start items-center flex-wrap gap-1">
                Ensure
                <div class="bg-white w-[150px] rounded-md py-1">
                    <span id="animated-text" class="text-primary"> Fast </span>
                </div>
                Reimbursements
            </div>
            <p class="text-white font-semibold">ER physicians specialized billing </p>
            <p class="textPara text-white">
                Our team specializes in filing emergency room physicians' claims on both a facility and a provider
                level, ensuring accurate, timely reimbursements, allowing you to focus on patient care while we handle
                your billing operations
            </p>

            <div class="py-5">
                <a class="bg-primary px-5 py-2 text-white rounded-md" href="/meeting">Schedule a meeting</a>

            </div>
        </div>
    </div>
    <div class="w-full min-h-[126px] bg-primary grid grid-cols-1 md:grid-cols-2 rounded-none md:rounded-r-2xl">
        <div class="content-center border-[0.5px] border-gray-400">
            <div class=" ">
                <h1 class="title text-white text-center mb-2">90 +</h1>
                <p class="textPara text-white text-center">Specialties Served</p>
            </div>

        </div>

        <div class=" content-center border-[0.5px] border-gray-400">
            <div class="  ">
                <h1 class="title text-white text-center mb-2">98 %</h1>
                <p class="textPara text-white text-center">Net Collection Rate</p>
            </div>

        </div>

        <div class=" content-center border-[0.5px] border-gray-400">
            <div class="  ">
                <h1 class="title text-white text-center mb-2">30 </h1>
                <p class="textPara text-white text-center">Days in AR</p>
            </div>

        </div>

        <div class=" content-center border-[0.5px] border-gray-400">
            <div class="">
                <h1 class="title text-white text-center mb-2">10 % </h1>
                <p class="textPara text-white text-center">Increase In Cash Flow</p>
            </div>

        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const textArray = ["Quick", "Efficient", "Accurate", "Fast"];
        let index = 0;

        function changeText() {
            const animatedText = document.getElementById("animated-text");
            animatedText.textContent = textArray[index];
            index = (index + 1) % textArray.length;
        }

        setInterval(changeText, 2000);
    });
</script>