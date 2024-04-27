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
                <h2 class="text-gray-300 mt-6 mb-[48px] text-center">
                    Select your best option.
                </h2>
                <div class=" mx-auto justify-center flex flex-wrap gap-[32px]">
                    <div class=" bg-white border-[1px] border-[#EE7900] custom-question rounded-[24px] inline-block layout ordal-quest p-1">
                        <img class=" justify-center mx-auto mt-quest" src="{{ asset('static/website/images/question1/qus1.png') }}" alt="">
                        <div class=" mx-auto mt-[16px]">
                            <h2 class="text-[#1F2937] text-[16px] weigth-2 text-center"> Yes, I do</h2>
                            <input type="radio" name="Q1" value="Yes">
                        </div>
                    </div>
                    <div class=" bg-white border-[1px] hover:border-[#EE7900] custom-question rounded-[24px] inline-block layout ordal-quest p-1">
                        <img class=" justify-center mx-auto mt-[35px]" src="{{ asset('static/website/images/question1/ques1a.png') }}" alt="">
                        <div class=" mx-auto mt-[16px]">
                            <h2 class="text-[#1F2937] text-[16px] weigth-2 text-center"> No, I don't</h2>
                            <input type="radio" name="Q1" value="No">
                        </div>
                    </div>
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
                <h2 class="text-gray-300 mt-6 mb-[48px] text-center">
                    Select your best option.
                </h2>

                <div class=" mx-auto justify-center flex flex-wrap gap-[32px]">
                    <div class=" bg-white border-[1px] border-[#EE7900] custom-question rounded-[24px] inline-block layout ordal-quest p-1">
                        <img class=" justify-center mx-auto mt-quest" src="{{ asset('static/website/images/question2/ques-2.png') }}" alt="">
                        <div class=" mx-auto mt-[16px]">
                            <h2 class="text-[#1F2937] text-[16px] weigth-2 text-center"> Yes</h2>
                            <input type="radio" name="Q2" value="Yes">
                        </div>
                    </div>
                    <div class=" bg-white border-[1px] hover:border-[#EE7900] custom-question rounded-[24px] p-1 inline-block layout ordal-quest">
                        <img class=" justify-center mx-auto mt-quest" src="{{ asset('static/website/images/question1/ques1a.png') }}" alt="">
                        <div class=" mx-auto mt-[16px]">
                            <h2 class="text-[#1F2937] text-[16px] weigth-2 text-center"> No</h2>
                            <input type="radio" name="Q2" value="No">
                        </div>
                    </div>
                    <div class=" bg-white border-[1px] hover:border-[#EE7900] custom-question rounded-[24px] p-1 inline-block layout ordal-quest">
                        <img class=" justify-center mx-auto mt-quest" src="{{ asset('static/website/images/question2/ques-2-2.png') }}" alt="">
                        <div class=" mx-auto mt-[1px]">
                            <h2 class="text-[#1F2937] text-[16px] weigth-2 text-center"> Passive Pool Solar Heating</h2>
                            <input type="radio" name="Q2" value="Passive Pool Solar Heating">
                        </div>
                    </div>
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
                <h2 class="text-gray-300 mt-6 mb-[48px] text-center">
                    Your best guess is ok.
                </h2>

                <div class=" mx-auto justify-center flex flex-wrap gap-[32px]">
                    <div class=" bg-white border-[1px] border-[#EE7900] custom-question rounded-[24px] p-1 inline-block layout ordal-quest">
                        <img class=" justify-center mx-auto mt-quest" src="{{ asset('static/website/images/question3/ques3.png') }}" alt="">
                        <div class=" mx-auto mt-[1px]">
                            <h2 class="text-[#1F2937] text-[16px] weigth-2 text-center">More than 5 years</h2>
                            <input type="radio" name="Q3" value="More than 5 years">
                        </div>
                    </div>
                    <div class=" bg-white border-[1px] hover:border-[#EE7900] custom-question rounded-[24px] p-1 inline-block layout ordal-quest">
                        <img class=" justify-center mx-auto mt-quest" src="{{ asset('static/website/images/question3/ques3-3.png') }}" alt="">
                        <div class=" mx-auto mt-[1px]">
                            <h2 class="text-[#1F2937] text-[16px] weigth-2 text-center">Less than 5 years</h2>
                            <input type="radio" name="Q3" value="Less than 5 years">
                        </div>
                    </div>
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
                <h2 class="text-gray-300 mt-6 mb-[48px] text-center">
                    Tell us why you’re enquiring today.
                </h2>

                <div class=" mx-auto justify-center flex flex-wrap gap-[32px]">
                    <div class=" bg-white border-[1px] border-[#EE7900] custom-question rounded-[24px] p-1 inline-block layout ordal-quest">
                        <img class=" justify-center mx-auto mt-quest" src="{{ asset('static/website/images/question4/ques4.png') }}" alt="">
                        <div class=" mx-auto mt-[1px]">
                            <h2 class="text-[#1F2937] text-[16px] weigth-2 text-center">Reduce bills</h2>
                            <input type="radio" name="Q4" value="Reduce bills">
                        </div>
                    </div>
                    <div class=" bg-white border-[1px] hover:border-[#EE7900] custom-question rounded-[24px] p-1 inline-block layout ordal-quest">
                        <img class=" justify-center mx-auto mt-quest" src="{{ asset('static/website/images/question4/ques-4-4.png') }}" alt="">
                        <div class=" mx-auto mt-[1px] justify-center">
                            <h2 class="text-[#1F2937] text-[16px] weigth-2 text-center">Back up against blackout</h2>
                            <input type="radio" name="Q4" value="Back up against blackout">
                        </div>
                    </div>
                    <div class=" bg-white border-[1px] hover:border-[#EE7900] custom-question rounded-[24px] p-1 inline-block layout ordal-quest">
                        <img class=" justify-center mx-auto mt-[40px]" src="{{ asset('static/website/images/question4/ques-4-4-4.png') }}" alt="">
                        <div class=" mx-auto mt-[10px] justify-center">
                            <h2 class="text-[#1F2937] text-[16px] weigth-2 text-center">⁠Not interested</h2>
                            <input type="radio" name="Q4" value="Not interested">
                        </div>
                    </div>
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
                <h2 class="text-gray-300 mt-6 mb-[48px] text-center">
                    Your best guess is ok
                </h2>

                <div class=" mx-auto justify-center flex flex-wrap gap-[32px]">
                    <div class=" bg-white border-[1px] border-[#EE7900] custom-question rounded-[24px] p-1 inline-block layout ordal-quest">
                        <img class=" justify-center mx-auto mt-quest" src="{{ asset('static/website/images/question5/ques5.png') }}" alt="">
                        <div class=" mx-auto mt-[1px]">
                            <h2 class="text-[#1F2937] text-[16px] weigth-2 text-center">$300 - $600</h2>
                            <input type="radio" name="Q5" value="$300 - $600">
                        </div>
                    </div>
                    <div class=" bg-white border-[1px] hover:border-[#EE7900] custom-question rounded-[24px] p-1 inline-block layout ordal-quest">
                        <img class=" justify-center mx-auto mt-quest" src="{{ asset('static/website/images/question5/ques-5-5.png') }}" alt="">
                        <div class=" mx-auto mt-[1px]">
                            <h2 class="text-[#1F2937] text-[16px] weigth-2 text-center">$600 - $900</h2>
                            <input type="radio" name="Q5" value="$600 - $900">
                        </div>
                    </div>
                    <div class=" bg-white border-[1px] hover:border-[#EE7900] custom-question rounded-[24px] p-1 ordal-quest inline-block layout">
                        <img class=" justify-center mx-auto mt-quest" src="{{ asset('static/website/images/question5/ques-5-5-5.png') }}" alt="">
                        <div class=" mx-auto mt-[1px]">
                            <h2 class="text-[#1F2937] text-[16px] weigth-2 text-center">⁠$900 - $1200</h2>
                            <input type="radio" name="Q5" value="$900 - $1200">
                        </div>
                    </div>
                    <div class=" bg-white border-[1px] hover:border-[#EE7900] custom-question rounded-[24px] p-1 ordal-quest inline-block layout">
                        <img class=" justify-center mx-auto mt-quest" src="{{ asset('static/website/images/question5/ques-5-5-5-5.png') }}" alt="">
                        <div class=" mx-auto mt-[1px]">
                            <h2 class="text-[#1F2937] text-[16px] weigth-2 text-center">⁠$1200 +</h2>
                            <input type="radio" name="Q5" value="$1200 +">
                        </div>
                    </div>
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
                <h2 class="text-gray-300 mt-6 mb-[48px] text-center">
                    Your best guess is ok
                </h2>

                <div class=" mx-auto justify-center flex flex-wrap gap-[32px]">
                    <div class=" bg-white border-[1px] border-[#EE7900] custom-question rounded-[24px] p-1 ordal-quest inline-block layout">
                        <img class=" justify-center mx-auto mt-quest" src="{{ asset('static/website/images/question6/ques6.png') }}" alt="">
                        <div class=" mx-auto mt-[1px]">
                            <h2 class="text-[#1F2937] text-[16px] weigth-2 text-center">0 - 10 Years</h2>
                            <input type="radio" name="Q6" value="0 - 10 Years">
                        </div>
                    </div>
                    <div class=" bg-white border-[1px] hover:border-[#EE7900] custom-question rounded-[24px] p-1 ordal-quest inline-block layout">
                        <img class=" justify-center mx-auto mt-quest" src="{{ asset('static/website/images/question6/ques-6-6.png') }}" alt="">
                        <div class=" mx-auto mt-[1px]">
                            <h2 class="text-[#1F2937] text-[16px] weigth-2 text-center">10 - 20 Years</h2>
                            <input type="radio" name="Q6" value="10 - 20 Years">
                        </div>
                    </div>
                    <div class=" bg-white border-[1px] hover:border-[#EE7900] custom-question rounded-[24px] p-1 inline-block layout ordal-quest">
                        <img class=" justify-center mx-auto mt-quest" src="{{ asset('static/website/images/question6/ques-6-6-6.png') }}" alt="">
                        <div class=" mx-auto mt-[1px]">
                            <h2 class="text-[#1F2937] text-[16px] weigth-2 text-center">20 + Years</h2>
                            <input type="radio" name="Q6" value="20 + Years">
                        </div>
                    </div>
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
                <div class=" flex justify-center gap-[32px] mt-[56px]">
                    <div>
                        <h1 class="text-black text-[18px] weigth text-center mb-[12px]" for="">What's your
                            first
                            name? *</h1>
                        <input
                            class="w-[360px] outline-none border-[1px] border-[#E5E7EB] rounded-lg p-2 placeholder-1"
                            type="text" name="Q7" placeholder="first name" required>
                    </div>
                    <div>
                        <h1 class="text-black text-[18px] weigth text-center mb-[12px]" for="">What's your
                            last
                            name? *</h1>
                        <input
                            class=" w-[360px] outline-none border-[1px] border-[#E5E7EB] rounded-lg p-2 placeholder-1"
                            type="text" name="Q8" placeholder="lass name" required>
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
                        <h1 class="text-black text-[18px] weigth text-center mb-[12px]" for="">What's your
                            email
                            address? *</h1>
                        <div
                            class=" bg-white border-[1px] border-[#E5E7EB] shadow-sm flex items-center p-2   gap-2 rounded-lg w-[400px] mx-auto">
                            <i class="fas fa-envelope"></i>
                            <input class="w-[400px] outline-none border-none bg-none" placeholder="you@email.com"
                                type="email" name="Q9" id="" required>
                        </div>
                    </div>
                    <div>
                        <h1 class="text-black text-[18px] weigth text-center mb-[12px]" for="">What's
                            your mobile phone number? *</h1>
                        <input
                            class=" w-[360px] outline-none border-[1px] border-[#E5E7EB] rounded-lg p-2 placeholder-1"
                            type="phone" name="Q10" placeholder="lass name" required>
                    </div>
                </div>
            </div>


            <div class="mt-[60px] mx-auto justify-center flex gap-5 form-navigation">
                <button class=" text-[#1F2937] text-[17px] weigth previous"><i class="fas fa-arrow-left"></i>
                    PREVOUS</button>
                <button class=" next-button text-white bg-[#111827] rounded-lg text-[17px] weigth next">NEXT <i
                        class="fas fa-arrow-right text-sm font-weight"></i></button>
                <button type="submit"
                    class=" text-white bg-[#111827] p-3 rounded-lg text-[17px] weigth next">Submit</button>
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
