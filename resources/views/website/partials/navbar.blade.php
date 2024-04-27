<div class="custom-container">
    <div class=" flex justify-between bg-white py-[33px]">
        <img class=" w-[120.8px] h-[40px]" src="{{ asset('static/website/images/srne_log.png') }}" alt="">
        <div class=" flex gap-5 items-center relative">
            <input type="text" placeholder="Search.." style="display: none"
                class="border outline-none rounded-lg shadow-search input-slide py-2 p-2">
            <i class="fa fa-search search-button hover:text-black text-gray-400 transition-all cursor-pointer"></i>
            {{-- <div
                class=" flex gap-2 items-center px-3 py-3 border-[1px] border-[#E5E7EB] rounded-xl cursor-pointer login-button">
                <img width="14" src="{{ asset('static/website/images/user.svg') }}" alt="">
                <h1 class="text-[#1F2937] text-[15px] font-semibold">Login</h1>
            </div> --}}
        </div>
    </div>
</div>
<div class="background flex align-middle relative overflow-hidden">
    <div class="bg-opleft"></div>
    <div class=" lg:ml-[72px] md:ml-[72px] items-center py-7 zeedds">
        <h2 
            class="text-[28px] titan-one-regular" style=" font-weight:700;">On-Grid Solution</h2>
        <h3 class=" lg:w-[600px] md:w-[600px] color-head">Off-grid solar solution is a self-sufficient system.It is designed to provide power to residential or other
            applications in areas without access to grid electricity or where grid power is unreliable.</h3>
    </div>
    {{-- <div class="block-pic"></div> --}}
    <img style="height: 170px" class="pic-bright absolute right-0 top-0"
        src=" {{ asset('static/website/images/srne.svg') }}">
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
