<div class="custom-container">
    <div class=" flex justify-between bg-white py-[33px]">
        <img src="{{ asset('static/website/images/Logo.svg') }}" alt="">
        <div class=" flex gap-5 items-center relative">
            <input type="text" placeholder="Search.." style="display: none"
                class="border outline-none rounded-lg shadow-search input-slide py-2 p-2">
            <i class="fa fa-search search-button hover:text-black text-gray-400 transition-all cursor-pointer"></i>
            <div class=" flex gap-2 items-center px-3 py-3 border-[1px] border-[#E5E7EB] rounded-xl cursor-pointer login-button">
                <img width="14" src="{{ asset('static/website/images/user.svg') }}" alt="">
                <h1 class="text-[#1F2937] text-[15px] font-semibold">Login</h1>
            </div>
        </div>
    </div>
</div>
<div class="background flex align-middle relative overflow-hidden">
    <h2 style="display: flex; align-items: center; margin-left: 72px; z-index: 2" class=" text-[#FFFFFF] text-[28px] weigth w-[700px] titan-one-regular ">Check Your
        Eligibility For
        Government
        Solar Incentives
        & No-Net-Cost Solar</h2>
    <div class="block-pic"></div>
    <img style="height: 170px" class="pic-bright absolute right-0 top-0" src=" {{ asset('static/website/images/solar.png') }}">
</div>
{{-- <div class="background relative h-[160px]">
    <div class=" flex items-center">
        <h2 class="text-[#FFFFFF] text-[28px] weigth w-[787px] mt-10 ml-[72px] z-50 titan-one-regular">Check Your
            Eligibility For
            Government
            Solar Incentives
            & No-Net-Cost Solar</h2>
        <img class="absolute right-0 top-0" src=" {{ asset('static/website/images/solar.png') }}" alt="">
    </div>
</div> --}}

<script>
    $(document).ready(function() {
        $(".search-button").click(function() {
            $(".input-slide").slideToggle();
        });
    });
</script>
