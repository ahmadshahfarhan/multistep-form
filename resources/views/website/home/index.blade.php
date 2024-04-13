@extends('website.layout')

<script src="https://cdn.tailwindcss.com"></script>

{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> --}}


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"
    integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@section('content')


    <div class="mt-[50px] custom-container">
        <div class="">
            <div class="bg-[#EE790014]  py-2 px-3 rounded-[100px] w-[113px] justify-center mx-auto">
                <h2 class="text-[#EE7900] font-semibold text-center">Question 1</h2>
            </div>

            <form action="/post" method="post" class="employee-form">
                @csrf
                <div class="form-section">
                    <h2 class=" text-black text-[32px] weigth text-center mt-4">What's your home address? *</h2>
                @section('progres')
                    @include('website.progres')
                @show

                <div class=" flex flex-wa justify-center gap-[32px] mt-[56px]">
                    <div>
                        <h1 class="text-black text-[18px] weigth text-center mb-[12px]" for="">What's your email
                            address? *</h1>
                        <input class="w-[360px] outline-none border-[1px] border-[#E5E7EB] rounded-lg p-2 placeholder-1"
                            type="email" name="name" placeholder="first name" required>
                    </div>
                    <div>
                        <h1 class="text-black text-[18px] weigth text-center mb-[12px]" for="">What's
                            your mobile phone number? *</h1>
                        <input
                            class=" w-[360px] outline-none border-[1px] border-[#E5E7EB] rounded-lg p-2 placeholder-1"
                            type="phone" name="last_name" placeholder="lass name" required>
                    </div>
                </div>
            </div>

            <div class="form-section">
                {{-- progress bar manual --}}
                {{-- <div class="progress-bar flex gap-1 items-center mx-auto justify-center mt-6 mb-[56px]">
                    <div class="bg-[#F3F4F6] step step0 w-[70.15px] h-[6px] rounded"></div>
                    <div class="bg-[#F3F4F6] step step1 w-[70.15px] h-[6px] rounded"></div>
                    <div class="bg-[#F3F4F6] step step2 w-[70.15px] h-[6px] rounded"></div>
                </div> --}}
                @section('progres')
                    @include('website.progres')
                @show
                <div class=" flex justify-center gap-[32px]">
                    <div>
                        <h1 class="text-black text-[18px] weigth text-center mb-[12px]" for="">What's your first
                            name? *</h1>
                        <input class="w-[360px] outline-none border-[1px] border-[#E5E7EB] rounded-lg p-2 placeholder-1"
                            type="text" name="name" placeholder="first name" required>
                    </div>
                    <div>
                        <h1 class="text-black text-[18px] weigth text-center mb-[12px]" for="">What's your last
                            name? *</h1>
                        <input
                            class=" w-[360px] outline-none border-[1px] border-[#E5E7EB] rounded-lg p-2 placeholder-1"
                            type="text" name="last_name" placeholder="lass name" required>
                    </div>
                </div>
            </div>


            <div class="mt-[60px] mx-auto justify-center flex gap-5 form-navigation">
                <button class=" text-[#1F2937] text-[17px] weigth previous"><i class="fas fa-arrow-left"></i>
                    PREVOUS</button>
                <button class=" next-button text-white bg-[#111827] rounded-lg text-[17px] weigth next">NEXT <i
                        class="fas fa-arrow-right text-sm font-weight"></i></button>
                {{-- <button type="submit"
                        class=" text-white bg-[#111827] p-3 rounded-lg text-[17px] weigth next">Submit</button> --}}
            </div>

        </form>

        {{-- <div class=" mt-[150px]">
                <h2 class="text-black text-[28px] text-center" style="font-weight: 700;">Why Use Solar Selector?</h2>
                <div class=" mt-[80px] flex flex-wrap gap-[32px] justify-center">
                    <div class=" card-text card-near-footer w-[410.67px] p-4">
                        <img src=" {{ asset('static/website/images/Link.png') }}" alt="">
                        <h2 class=" mt-4 text-[#1F2937] text-[18px]" style="font-weight: 700;">Access Solar Incentives
                        </h2>
                        <p class=" mt-1 text-gray-400 text-[16px]">In less than 60 seconds you'll find out if you
                            qualify for solar incentives up
                            to $3,700.</p>
                    </div>
                    <div class=" card-text card-near-footer w-[410.67px] p-4">
                        <img src=" {{ asset('static/website/images/Link.png') }}" alt="">
                        <h2 class=" mt-4 text-[#1F2937] text-[18px]" style="font-weight: 700;">Access Solar Incentives
                        </h2>
                        <p class=" mt-1 text-gray-400 text-[16px]">In less than 60 seconds you'll find out if you
                            qualify for solar incentives up
                            to $3,700.</p>
                    </div>
                    <div class=" card-text card-near-footer w-[410.67px] p-4">
                        <img src=" {{ asset('static/website/images/Link.png') }}" alt="">
                        <h2 class=" mt-4 text-[#1F2937] text-[18px]" style="font-weight: 700;">Access Solar Incentives
                        </h2>
                        <p class=" mt-1 text-gray-400 text-[16px]">In less than 60 seconds you'll find out if you
                            qualify for solar incentives up
                            to $3,700.</p>
                    </div>
                </div>
            </div> --}}
    </div>
</div>
@stop
