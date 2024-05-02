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
            <form action="/post" method="post" class="employee-form">
                @csrf
                {{-- question 1 --}}
                <div class="form-section">
                    <div class="bg-[#EE790014]  py-2 px-3 rounded-[100px] w-[113px] justify-center mx-auto">
                        <h2 class="text-[#EE7900] font-semibold text-center">Question 1</h2>
                    </div>
                    <h1 class="text-black text-[18px] weigth text-center mb-[24px] mt-[16px]" for="">Do you own or
                        rent a house? *</h1>
                @section('progres')
                    @include('website.progres')
                @show
                <h2
                    class="text-gray-300 lg:mt-6 md:mt-6 sm:mt-6 mt-4 lg:mb-[48px] md:mb-[48px] sm:mb-[48px] mb-[30px] text-center">
                    Select your best option.
                </h2>
                <div class="mx-auto justify-center flex flex-wrap gap-[32px]">
                    <label for="ques-1-1" class="cursor-pointer">
                        <div id="ques-1-1-a"
                            class="bg-white border-[1px] hover:border-[#EE7900] custom-question radius-border-q inline-block layout ordal-quest p-1  lg:pt-0 md:pt-0 sm:pt-0 pt-4 lg:pb-0 md:pb-0 sm:pb-0 pb-4">
                            <div class="phone-flex lg:mx-0 md:mx-0 sm:mx-0 mx-[100px]">
                                <img class="mt-quest img-custom-ques mx-auto"
                                    src="{{ asset('static/website/images/question1/qus1.png') }}" alt="">
                                <div class="mx-auto lg:mt-[16px] md:mt-[16px] text-question">
                                    <h2 class="text-[#1F2937]  weight-2 text-center option-text-ques">Yes, I do</h2>
                                    <input id="ques-1-1" type="radio" name="Q1" value="Yes, I do"
                                        style="display: none;">
                                </div>
                            </div>
                        </div>
                    </label>

                    <label for="ques-1-2" class="cursor-pointer">
                        <div id="ques-1-2-a"
                            class="bg-white border-[1px] hover:border-[#EE7900] custom-question radius-border-q inline-block layout ordal-quest p-1 lg:pt-0 md:pt-0 sm:pt-0 pt-4 lg:pb-0 md:pb-0 sm:pb-0 pb-4">
                            <div class="phone-flex lg:mx-0 md:mx-0 sm:mx-0 mx-[80px]">
                                <img class="justify-center mx-auto lg:mt-[35px] md:mt-[35px] mt-quest img-custom-ques"
                                    src="{{ asset('static/website/images/question1/ques1a.png') }}" alt="">
                                <div class="mx-auto lg:mt-[16px] md:mt-[16px] text-question">
                                    <h2 class="text-[#1F2937]  weight-2 text-center option-text-ques">No, I don't</h2>
                                    <input id="ques-1-2" type="radio" name="Q1" value="No, I rent"
                                        style="display:none">
                                </div>
                            </div>
                        </div>
                    </label>
                </div>
            </div>

            {{-- question 2 --}}
            <div class="form-section">
                <div class="bg-[#EE790014]  py-2 px-3 rounded-[100px] w-[113px] justify-center mx-auto">
                    <h2 class="text-[#EE7900] font-semibold text-center">Question 2</h2>
                </div>
                <h1 class="text-black text-[18px] weigth text-center mb-[24px] mt-[16px]" for="">Do you
                    already have solar panels? *</h1>
                @section('progres')
                    @include('website.progres')
                @show
                <h2
                    class="text-gray-300 lg:mt-6 md:mt-6 sm:mt-6 mt-4 lg:mb-[48px] md:mb-[48px] sm:mb-[48px] mb-[30px] text-center">
                    Select your best option.
                </h2>

                <div class=" mx-auto justify-center flex flex-wrap gap-[32px]">
                    <label for="ques-2-1" class=" cursor-pointer">
                        <div id="ques-2-1-a"
                            class=" bg-white border-[1px] hover:border-[#EE7900] custom-question radius-border-q inline-block layout ordal-quest p-1 lg:pt-0 md:pt-0 sm:pt-0 pt-4 lg:pb-0 md:pb-0 sm:pb-0 pb-4">
                            <div class="phone-flex lg:mx-0 md:mx-0 sm:mx-0 mx-[100px]">
                                <img class=" justify-center mx-auto mt-quest img-custom-ques"
                                    src="{{ asset('static/website/images/question2/ques-2.png') }}" alt="">
                                <div class=" mx-auto mt-[16px]">
                                    <h2 class="text-[#1F2937]  weigth-2 text-center option-text-ques"> Yes</h2>
                                    <input id="ques-2-1" type="radio" name="Q2" value="Yes"
                                        style="display: none">
                                </div>
                            </div>
                        </div>
                    </label>

                    <label for="ques-2-2" class=" cursor-pointer">
                        <div id="ques-2-2-a"
                            class=" bg-white border-[1px] hover:border-[#EE7900] custom-question radius-border-q  p-1 inline-block layout ordal-quest lg:pt-0 md:pt-0 sm:pt-0 pt-4 lg:pb-0 md:pb-0 sm:pb-0 pb-4">
                            <div class="phone-flex lg:mx-0 md:mx-0 sm:mx-0 mx-[100px]">
                                <img class=" justify-center mx-auto mt-quest img-custom-ques"
                                    src="{{ asset('static/website/images/question1/ques1a.png') }}" alt="">
                                <div class=" mx-auto mt-[16px]">
                                    <h2 class="text-[#1F2937]  weigth-2 text-center option-text-ques"> No</h2>
                                    <input id="ques-2-2" type="radio" name="Q2" value="No"
                                        style="display: none">
                                </div>
                            </div>
                        </div>
                    </label>

                    <label for="ques-2-3" class=" cursor-pointer">
                        <div id="ques-2-3-a"
                            class=" bg-white border-[1px] hover:border-[#EE7900] custom-question radius-border-q  p-1 inline-block layout ordal-quest lg:pt-0 md:pt-0 sm:pt-0 pt-4 lg:pb-0 md:pb-0 sm:pb-0 pb-4">
                            <div class="phone-flex lg:mx-0 md:mx-0 sm:mx-0 mx-[30px]">
                                <img class=" justify-center mx-auto mt-quest img-custom-ques"
                                    src="{{ asset('static/website/images/question2/ques-2-2.png') }}" alt="">
                                <div class="mt-[1px]">
                                    <h2 class="text-[#1F2937]  weigth-2 text-center option-text-ques"> Passive Pool
                                        Solar
                                        Heating
                                    </h2>
                                    <input id="ques-2-3" type="radio" name="Q2"
                                        value="Passive Pool Solar Heating" style="display: none">
                                </div>
                            </div>
                        </div>
                    </label>
                </div>
            </div>

            {{-- question 3 --}}
            <div class="form-section">
                <div class="bg-[#EE790014]  py-2 px-3 rounded-[100px] w-[113px] justify-center mx-auto">
                    <h2 class="text-[#EE7900] font-semibold text-center">Question 3</h2>
                </div>
                <h1 class="text-black text-[18px] weigth text-center mb-[24px] mt-[16px]" for="">How old is
                    your existing solar system? *</h1>
                @section('progres')
                    @include('website.progres')
                @show
                <h2
                    class="text-gray-300 lg:mt-6 md:mt-6 sm:mt-6 mt-4 lg:mb-[48px] md:mb-[48px] sm:mb-[48px] mb-[30px] text-center">
                    Your best guess is ok.
                </h2>

                <div class=" mx-auto justify-center flex flex-wrap gap-[32px]">
                    <label for="ques-3-1" class=" cursor-pointer">
                        <div id="ques-3-1-a"
                            class=" bg-white border-[1px] hover:border-[#EE7900] custom-question radius-border-q p-1 inline-block layout ordal-quest lg:pt-0 md:pt-0 sm:pt-0 pt-4 lg:pb-0 md:pb-0 sm:pb-0 pb-4">
                            <div class="phone-flex lg:mx-0 md:mx-0 sm:mx-0 mx-[65px]">
                                <img class=" justify-center mx-auto mt-quest img-custom-ques"
                                    src="{{ asset('static/website/images/question3/ques3.png') }}" alt="">
                                <div class=" mx-auto mt-[1px]">
                                    <h2 class="text-[#1F2937]  weigth-2 text-center option-text-ques">More than 5 years
                                    </h2>
                                    <input id="ques-3-1" type="radio" name="Q3" value="More than 5 years"
                                        style="display: none">
                                </div>
                            </div>
                        </div>
                    </label>

                    <label for="ques-3-2" class=" cursor-pointer">
                        <div id="ques-3-2-a"
                            class=" bg-white border-[1px] hover:border-[#EE7900] custom-question radius-border-q p-1 inline-block layout ordal-quest lg:pt-0 md:pt-0 sm:pt-0 pt-4 lg:pb-0 md:pb-0 sm:pb-0 pb-4">
                            <div class="phone-flex lg:mx-0 md:mx-0 sm:mx-0 mx-[65px]">
                                <img class=" justify-center mx-auto mt-quest img-custom-ques"
                                    src="{{ asset('static/website/images/question3/ques3-3.png') }}" alt="">
                                <div class=" mx-auto mt-[1px]">
                                    <h2 class="text-[#1F2937]  weigth-2 text-center option-text-ques">Less than 5 years
                                    </h2>
                                    <input id="ques-3-2" type="radio" name="Q3" value="Less than 5 years"
                                        style="display: none">
                                </div>
                            </div>
                        </div>
                    </label>
                </div>
            </div>

            {{-- question 4 --}}
            <div class="form-section">
                <div class="bg-[#EE790014]  py-2 px-3 rounded-[100px] w-[115px] justify-center mx-auto">
                    <h2 class="text-[#EE7900] font-semibold text-center">Question 4</h2>
                </div>
                <h1 class="text-black text-[18px] weigth text-center mb-[24px] mt-[16px]" for="">Why are you
                    interested in solar battery? *</h1>
                @section('progres')
                    @include('website.progres')
                @show
                <h2
                    class="text-gray-300 lg:mt-6 md:mt-6 sm:mt-6 mt-4 lg:mb-[48px] md:mb-[48px] sm:mb-[48px] mb-[30px] text-center">
                    Tell us why you’re enquiring today.
                </h2>

                <div class=" mx-auto justify-center flex flex-wrap gap-[32px]">
                    <label for="ques-4-1" class=" cursor-pointer">
                        <div id="ques-4-1-a"
                            class=" bg-white border-[1px] hover:border-[#EE7900] custom-question radius-border-q p-1 inline-block layout ordal-quest lg:pt-0 md:pt-0 sm:pt-0 pt-4 lg:pb-0 md:pb-0 sm:pb-0 pb-4">
                            <div class="phone-flex lg:mx-0 md:mx-0 sm:mx-0 mx-[80px]">
                                <img class=" justify-center mx-auto mt-quest img-custom-ques"
                                    src="{{ asset('static/website/images/question4/ques4.png') }}" alt="">
                                <div class=" mx-auto mt-[1px]">
                                    <h2 class="text-[#1F2937]  weigth-2 text-center option-text-ques">Reduce bills</h2>
                                    <input id="ques-4-1" type="radio" name="Q4" value="Reduce bills"
                                        style="display: none">
                                </div>
                            </div>
                        </div>
                    </label>
                    <label for="ques-4-2" class=" cursor-pointer">
                        <div id="ques-4-2-a"
                            class=" bg-white border-[1px] hover:border-[#EE7900] custom-question radius-border-q p-1 inline-block layout ordal-quest lg:pt-0 md:pt-0 sm:pt-0 pt-4 lg:pb-0 md:pb-0 sm:pb-0 pb-4">
                            <div class="phone-flex lg:mx-0 md:mx-0 sm:mx-0 mx-[30px]">
                                <img class="justify-center mx-auto mt-quest img-custom-ques"
                                    src="{{ asset('static/website/images/question4/ques-4-4.png') }}" alt="">
                                <div class="mt-[1px] justify-center">
                                    <h2 class="text-[#1F2937]  weigth-2 text-center option-text-ques">Back up against
                                        blackout
                                    </h2>
                                    <input id="ques-4-2" type="radio" name="Q4"
                                        value="Back up against blackout" style="display:none">
                                </div>
                            </div>
                        </div>
                    </label>
                    <label for="ques-4-3" class=" cursor-pointer">
                        <div id="ques-4-3-a"
                            class=" bg-white border-[1px] hover:border-[#EE7900] custom-question radius-border-q p-1 inline-block layout ordal-quest lg:pt-0 md:pt-0 sm:pt-0 pt-4 lg:pb-0 md:pb-0 sm:pb-0 pb-4">
                            <div class="phone-flex lg:mx-0 md:mx-0 sm:mx-0 mx-[68px]">
                                <img class=" justify-center mx-auto lg:mt-[40px] md:mt-[40px] sm:mt-[40px] coverce img-custom-ques"
                                    src="{{ asset('static/website/images/question4/ques-4-4-4.png') }}"
                                    alt="">
                                <div class=" mx-auto mt-[10px] justify-center">
                                    <h2 class="text-[#1F2937]  weigth-2 text-center option-text-ques">⁠Not interested
                                    </h2>
                                    <input id="ques-4-3" type="radio" name="Q4" value="Not interested"
                                        style="display: none">
                                </div>
                            </div>
                        </div>
                    </label>
                </div>

            </div>

            {{-- question 5 --}}
            <div class="form-section">
                <div class="bg-[#EE790014]  py-2 px-3 rounded-[100px] w-[115px] justify-center mx-auto">
                    <h2 class="text-[#EE7900] font-semibold text-center">Question 5</h2>
                </div>
                <h1 class="text-black text-[18px] weigth text-center mb-[24px] mt-[16px]" for="">How much is
                    your quarterly electricity bill? *</h1>
                @section('progres')
                    @include('website.progres')
                @show
                <h2
                    class="text-gray-300 lg:mt-6 md:mt-6 sm:mt-6 mt-4 lg:mb-[48px] md:mb-[48px] sm:mb-[48px] mb-[30px] text-center">
                    Your best guess is ok
                </h2>

                <div class=" mx-auto justify-center flex flex-wrap gap-[32px]">
                    <label for="ques-5-1" class=" cursor-pointer">
                        <div id="ques-5-1-a"
                            class=" bg-white border-[1px] hover:border-[#EE7900] custom-question radius-border-q p-1 inline-block layout ordal-quest lg:pt-0 md:pt-0 sm:pt-0 pt-4 lg:pb-0 md:pb-0 sm:pb-0 pb-4">
                            <div class="phone-flex lg:mx-0 md:mx-0 sm:mx-0 mx-[80px]">
                                <img class=" justify-center mx-auto mt-quest img-custom-ques"
                                    src="{{ asset('static/website/images/question5/ques5.png') }}" alt="">
                                <div class="mt-[1px]">
                                    <h2 class="text-[#1F2937]  weigth-2 text-center option-text-ques">$300 - $600</h2>
                                    <input id="ques-5-1" type="radio" name="Q5" value="$300 - $600"
                                        style="display: none">
                                </div>
                            </div>
                        </div>
                    </label>
                    <label for="ques-5-2" class=" cursor-pointer">
                        <div id="ques-5-2-a"
                            class=" bg-white border-[1px] hover:border-[#EE7900] custom-question radius-border-q p-1 inline-block layout ordal-quest lg:pt-0 md:pt-0 sm:pt-0 pt-4 lg:pb-0 md:pb-0 sm:pb-0 pb-4">
                            <div class="phone-flex lg:mx-0 md:mx-0 sm:mx-0 mx-[80px]">
                                <img class=" justify-center mx-auto mt-quest img-custom-ques"
                                    src="{{ asset('static/website/images/question5/ques-5-5.png') }}" alt="">
                                <div class="mt-[1px]">
                                    <h2 class="text-[#1F2937]  weigth-2 text-center option-text-ques">$600 - $900</h2>
                                    <input id="ques-5-2" type="radio" name="Q5" value="$600 - $900"
                                        style="display: none">
                                </div>
                            </div>
                        </div>
                    </label>
                    <label for="ques-5-3" class=" cursor-pointer">
                        <div id="ques-5-3-a"
                            class=" bg-white border-[1px] hover:border-[#EE7900] custom-question radius-border-q p-1 ordal-quest inline-block layout lg:pt-0 md:pt-0 sm:pt-0 pt-4 lg:pb-0 md:pb-0 sm:pb-0 pb-4">
                            <div class="phone-flex lg:mx-0 md:mx-0 sm:mx-0 mx-[80px]">
                                <img class=" justify-center mx-auto mt-quest img-custom-ques"
                                    src="{{ asset('static/website/images/question5/ques-5-5-5.png') }}"
                                    alt="">
                                <div class="mt-[1px]">
                                    <h2 class="text-[#1F2937]  weigth-2 text-center option-text-ques">⁠$900 - $1200
                                    </h2>
                                    <input id="ques-5-3" type="radio" name="Q5" value="$900 - $1200"
                                        style="display: none">
                                </div>
                            </div>
                        </div>
                    </label>
                    <label for="ques-5-4" class=" cursor-pointer">
                        <div id="ques-5-4-a"
                            class=" bg-white border-[1px] hover:border-[#EE7900] custom-question radius-border-q p-1 ordal-quest inline-block layout lg:pt-0 md:pt-0 sm:pt-0 pt-4 lg:pb-0 md:pb-0 sm:pb-0 pb-4">
                            <div class="phone-flex lg:mx-0 md:mx-0 sm:mx-0 mx-[95px]">
                                <img class=" justify-center mx-auto mt-quest img-custom-ques"
                                    src="{{ asset('static/website/images/question5/ques-5-5-5-5.png') }}"
                                    alt="">
                                <div class="mt-[1px]">
                                    <h2 class="text-[#1F2937]  weigth-2 text-center option-text-ques">⁠$1200 +</h2>
                                    <input id="ques-5-4" type="radio" name="Q5" value="$1200 +"
                                        style="display: none">
                                </div>
                            </div>
                        </div>
                    </label>
                </div>

            </div>

            {{-- question 6 --}}
            <div class="form-section">
                <div class="bg-[#EE790014]  py-2 px-3 rounded-[100px] w-[115px] justify-center mx-auto">
                    <h2 class="text-[#EE7900] font-semibold text-center">Question 6</h2>
                </div>
                <h1 class="text-black text-[18px] weigth text-center mb-[24px] mt-[16px]" for="">What's
                    the age of your home? *</h1>
                @section('progres')
                    @include('website.progres')
                @show
                <h2
                    class="text-gray-300 lg:mt-6 md:mt-6 sm:mt-6 mt-4 lg:mb-[48px] md:mb-[48px] sm:mb-[48px] mb-[30px] text-center">
                    Your best guess is ok
                </h2>

                <div class=" mx-auto justify-center flex flex-wrap gap-[32px]">
                    <label for="ques-6-1" class=" cursor-pointer">
                        <div id="ques-6-1-a"
                            class=" bg-white border-[1px] hover:border-[#EE7900] custom-question radius-border-q p-1 ordal-quest inline-block layout lg:pt-0 md:pt-0 sm:pt-0 pt-4 lg:pb-0 md:pb-0 sm:pb-0 pb-4">
                            <div class="phone-flex lg:mx-0 md:mx-0 sm:mx-0 mx-[85px]">
                                <img class=" justify-center mx-auto mt-quest img-custom-ques"
                                    src="{{ asset('static/website/images/question6/ques6.png') }}" alt="">
                                <div class="mt-[1px]">
                                    <h2 class="text-[#1F2937]  weigth-2 text-center option-text-ques">0 - 10 Years</h2>
                                    <input id="ques-6-1" type="radio" name="Q6" value="0 - 10 Years"
                                        style="display: none">
                                </div>
                            </div>
                        </div>
                    </label>
                    <label for="ques-6-2" class=" cursor-pointer">
                        <div id="ques-6-2-a"
                            class=" bg-white border-[1px] hover:border-[#EE7900] custom-question radius-border-q p-1 ordal-quest inline-block layout lg:pt-0 md:pt-0 sm:pt-0 pt-4 lg:pb-0 md:pb-0 sm:pb-0 pb-4">
                            <div class="phone-flex lg:mx-0 md:mx-0 sm:mx-0 mx-[85px]">
                                <img class=" justify-center mx-auto mt-quest img-custom-ques"
                                    src="{{ asset('static/website/images/question6/ques-6-6.png') }}" alt="">
                                <div class="mt-[1px]">
                                    <h2 class="text-[#1F2937]  weigth-2 text-center option-text-ques">10 - 20 Years
                                    </h2>
                                    <input id="ques-6-2" type="radio" name="Q6" value="10 - 20 Years"
                                        style="display: none">
                                </div>
                            </div>
                        </div>
                    </label>
                    <label for="ques-6-3" class=" cursor-pointer">
                        <div id="ques-6-3-a"
                            class=" bg-white border-[1px] hover:border-[#EE7900] custom-question radius-border-q p-1 inline-block layout ordal-quest lg:pt-0 md:pt-0 sm:pt-0 pt-4 lg:pb-0 md:pb-0 sm:pb-0 pb-4">
                            <div class="phone-flex lg:mx-0 md:mx-0 sm:mx-0 mx-[85px]">
                                <img class=" justify-center mx-auto mt-quest img-custom-ques"
                                    src="{{ asset('static/website/images/question6/ques-6-6-6.png') }}"
                                    alt="">
                                <div class="mt-[1px]">
                                    <h2 class="text-[#1F2937]  weigth-2 text-center option-text-ques">20 + Years</h2>
                                    <input id="ques-6-3" type="radio" name="Q6" value="20 + Years"
                                        style="display: none">
                                </div>
                            </div>
                        </div>
                    </label>
                </div>

            </div>

            {{-- question 7 --}}
            <div class="form-section">
                <div class="bg-[#EE790014]  py-2 px-3 rounded-[100px] w-[115px] justify-center mx-auto">
                    <h2 class="text-[#EE7900] font-semibold text-center">Question 7</h2>
                </div>
                @section('progres')
                    @include('website.progres')
                @show
                <div class=" flex flex-wrap justify-center gap-[32px] mt-[56px]">
                    <div>
                        <h1 class="text-black label-panel weigth text-center mb-[12px]" for="">What's your
                            first
                            name? *</h1>
                        <input
                            class="lg:w-[360px] md:w-[360px] sm:w-[360px] w-[340px] outline-none border-[1px] border-[#E5E7EB] rounded-lg p-2 placeholder-1 text-center qwe"
                            type="text" name="Q7" placeholder="first name">
                    </div>
                    <div>
                        <h1 class="text-black label-panel weigth text-center mb-[12px]" for="">What's your
                            last
                            name? *</h1>
                        <input
                            class=" lg:w-[360px] md:w-[360px] sm:w-[360px] w-[340px]  outline-none border-[1px] border-[#E5E7EB] rounded-lg p-2 placeholder-1 text-center"
                            type="text" name="Q8" placeholder="lass name">
                    </div>
                </div>
            </div>

            {{-- question 8 --}}
            <div class="form-section">
                <div class="bg-[#EE790014]  py-2 px-3 rounded-[100px] w-[115px] justify-center mx-auto">
                    <h2 class="text-[#EE7900] font-semibold text-center">Question 8</h2>
                </div>
                @section('progres')
                    @include('website.progres')
                @show
                <div class=" flex flex-wrap justify-center gap-[32px] mt-[56px]">
                    <div>
                        <h1 class="text-black label-panel weigth text-center mb-[12px]" for="">What's your
                            email
                            address? *</h1>
                        <div
                            class=" bg-white border-[1px] border-[#E5E7EB] shadow-sm flex items-center p-2   gap-2 rounded-lg lg:w-[360px] md:w-[360px] sm:w-[360px] w-[340px] mx-auto">
                            <i class="fas fa-envelope"></i>
                            <input
                                class="lg:w-[360px] md:w-[360px] sm:w-[360px] w-[340px] outline-none border-none bg-none"
                                placeholder="you@email.com" type="email" name="Q9" id="Q9">
                                @if ($errors->has('Q9'))
                                <div style="width:auto; color:red; margin-top:0.25rem;">
                                    {{ $errors->first('Q9') }}
                                </div>
                            @endif 
                        </div>
                    </div>
                    <div>
                        <h1 class="text-black label-panel weigth text-center mb-[12px]" for="">What's
                            your mobile phone number? *</h1>
                        <input
                            class="custom-input lg:w-[360px] md:w-[360px] sm:w-[360px] w-[340px] outline-none border-[1px] border-[#E5E7EB] rounded-lg p-2 placeholder-1 text-center"
                            type="phone" name="Q10" placeholder="+61 0000 000" required>
                    </div>
                </div>
            </div>

            {{-- tombol prev dan next --}}
            <div
                class="lg:mt-[60px] md:mt-[60px] sm:mt-[60px] mt-[25px] mx-auto justify-center flex gap-5 form-navigation">
                <button class=" text-[#1F2937] text-[17px] weigth previous"><i class="fas fa-arrow-left"></i>
                    PREVOUS</button>
                <button class=" next-button fungsi text-white bg-[#111827] rounded-lg text-[17px] weigth next">NEXT <i
                        class="fas fa-arrow-right text-sm font-weight"></i></button>
                <button type="submit"
                    class=" text-white bg-[#111827] p-3 rounded-lg text-[17px] weigth next">Submit</button>
            </div>


        </form>
    </div>
</div>
@stop
